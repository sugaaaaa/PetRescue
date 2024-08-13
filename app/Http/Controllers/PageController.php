<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Pets;
use App\Models\Category;

class PageController extends Controller
{
    public function homePage()
    {
        $pethome = Pets::orderBy('created_at', 'desc')->get();
        $adminBlogs = Blog::all();
        $category = Category::all();

        $shareComponent = \Share::page(
            url('/'),
            'Here is our Blog',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram();

        return view('pages.homePage', compact('pethome', 'adminBlogs', 'category', 'shareComponent'));
    }

    public function detail($id)
    {
        $petdetail = Pets::find($id);
        $category = Category::all();
        $adoption = Adoption::where('pet_id', $id)
            ->whereIn('status', ['approved', 'pending'])
            ->first();

        $shareComponent = \Share::page(
            url('/'),
            'Here is our Blog',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram();

        return view('/pages/detailPets', compact('petdetail', 'shareComponent','category', 'adoption'));
    }

}