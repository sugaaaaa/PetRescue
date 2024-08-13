<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SocialShareButtonsController extends Controller
{
    public function share()
    {
        $petblog = Blog::all();

        $shareComponents = [];

        foreach ($petblog as $blog) {
            $shareComponents[$blog->id] = \Share::page(
                url('/pages/detailBlogs/' . $blog->id),
                $blog->title . ' - ' . $blog->content
            )
                ->facebook()
                ->twitter()
                ->linkedin()
                ->telegram();
        }

        return view('/pages/blogPage', compact('shareComponents', 'petblog'));
    }

    
}