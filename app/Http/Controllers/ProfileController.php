<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Adoption;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's post in dashboard
     */
    public function index(): View
    {
        $post = Profile::all(); 
        return view('/admin/adminDashboard/userPost/index', ['post' => $post]);
    }

    public function show($id): View
    {
        $post = Profile::find($id);
        return view('/admin/adminDashboard/userPost/show', ['post' => $post]);
    }

    public function editShow($id):View
    {
        $post = Profile::find($id);
        return view('/admin/adminDashboard/userPost/update', ['post' => $post]);
    }

    public function updateShow(Request $request, string $id):RedirectResponse
    {
        $post = Profile::find($id);
        
        $post->title = $request->input('title');
        $post->description= $request->input('description');

        if ($request->hasFile('images')) {
            $nameImage = time().'.'.$request->image->extension();  
            $request->image->move(public_path('/userImage'), $nameImage);
            $post->images = $nameImage;
        }
    
        $post->save();
        return redirect('/admin/adminDashboard/userPost/index')->with('flash_message', 'Update successful!');
    }

    public function delete($id)
    {
        Profile::destroy($id);
        return redirect('/admin/adminDashboard/userPost/index')->with('success','User deleted successfully');
    }


     /**
     * Display the user's profile
     */
    public function edit(Request $request): View
    {
        $user = $request->user();
        $adoptions = Adoption::where('user_id', $user->id)->with('pet')->get();
        $post = Profile::all();

        return view('profile.edit', [
            'user' => $user,
            'adoptions' => $adoptions,
            'post' => $post,
        ]);
    }

    public function post(Request $request): View
    {
        $user = $request->user();
        $post = Profile::all();

        return view('profile.userPost', [
            'user' => $user,
            'post' => $post,
        ]);
    }

    public function history(Request $request): View
    {
        $user = $request->user();
        $adoptions = Adoption::where('user_id', $user->id)->with('pet')->get();

        return view('profile.history', [
            'user' => $user,
            'adoptions' => $adoptions,
        ]);
    }
     /**
     * Display the user's post.
     */
    public function createPost():View
    {
        return view('/profile/createPost');
    }
     /**
     * Display the user's store post.
     */
    public function storePost(Request $request): RedirectResponse
    {
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    $nameImage = time(). '.' .$image->extension();  
                    $image->move(public_path('/userImage'), $nameImage);

                    $post = new Profile([
                        'title' => $request->input('title'),
                        'images' => $nameImage,
                        'description' => $request->input('description'),
                    ]);
                    $post->save();
                }
            }
            return Redirect::route('profile.edit')->with('status', 'profile-updated');
        } else {
            return redirect()->back()->withErrors(['images' => 'No file uploaded.'])->withInput();
        }
    }

    public function detailPost($id)
    {
        $post = Profile::find($id);
        return view('/profile/detailPost', ['post' => $post]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}