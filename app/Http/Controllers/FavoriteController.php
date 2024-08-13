<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Log;

class FavoriteController extends Controller
{
    use ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function favorites(Request $request)
    {
        $user = $request->user();

        $favorites = Favorite::with('blog')->where('user_id', $user->id)->get();

        return view('profile.favorite', [
            'user' => $user,
            'favorites' => $favorites,
        ]);
    }

    public function addFavorite(Request $request)
    {
        $this->validate($request, [
            'blog_id' => 'required|exists:blogs,id',
        ]);

        if (!auth()->check()) {
            return response()->json(['success' => false, 'message' => 'You must be logged in to add items to your favorite.']);
        }

        $user_id = auth()->user()->id;
        $blog_id = $request->blog_id;

        $blog = Blog::findOrFail($blog_id);
        $isAlreadyAdded = Favorite::where('user_id', $user_id)
            ->where('blog_id', $blog_id)
            ->first();

        if ($isAlreadyAdded) {
            $isAlreadyAdded->delete();
            $blog->decrement('likes');
            return response()->json(['success' => true, 'message' => 'Blog removed from favorites', 'likes' => $blog->likes]);
        }

        $favorite = new Favorite();
        $favorite->blog_id = $blog_id;
        $favorite->user_id = $user_id;
        $favorite->save();

        $blog->increment('likes');
        return response()->json(['success' => true, 'message' => 'Blog successfully added to favorites', 'likes' => $blog->likes]);
    }

    public function remove(Request $request)
    {
        $this->validate($request, [
            'blog_id' => 'required|exists:blogs,id',
        ]);

        if (!auth()->check()) {
            return response()->json(['success' => false, 'message' => 'You must be logged in to remove items from your favorite.']);
        }

        $user_id = auth()->user()->id;
        $blog_id = $request->blog_id;

        Log::info('Remove request received', ['user_id' => $user_id, 'blog_id' => $blog_id]);

        $favorite = Favorite::where('user_id', $user_id)
            ->where('blog_id', $blog_id)
            ->first();

        if (!$favorite) {
            Log::warning('Favorite item not found', ['user_id' => $user_id, 'blog_id' => $blog_id]);
            return response()->json(['success' => false, 'message' => 'Favorite item not found']);
        }

        $favorite->delete();

        $blog = Blog::findOrFail($blog_id);
        $blog->decrement('likes');

        Log::info('Favorite item removed', ['user_id' => $user_id, 'blog_id' => $blog_id]);

        return response()->json(['success' => true, 'message' => 'Item removed from favorites', 'likes' => $blog->likes]);
    }
}