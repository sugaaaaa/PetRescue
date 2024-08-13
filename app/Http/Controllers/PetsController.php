<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Category;

class PetsController extends Controller
{
    public function index(Request $request): View
    {
        $pets = Pets::all(); 
        $categories = Category::all();
    return view('admin.adminDashboard.pets.index', ['pets' => $pets] , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::all();
        return view('/admin/adminDashboard/pets/index', compact('categories')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $nameImage = time(). '.' .$request->images->extension();  
        $request->images->move(public_path('/images'), $nameImage);

        $category = Category::firstOrCreate(['name' => $request->input('category_name')]);
    
        $pets = new Pets([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'sex' => $request->input('sex'),
            'vaccine' => $request->input('vaccine'),
            'images' => $nameImage,
            'content' => $request->input('content'),
            'category_id' => $category->id,
        ]);
    
        $pets->save();
        return redirect('admin/adminDashboard/pets/index')->with('success', 'Pets added successfully!');
    }
    /**
     * Display the specified resource.
     */
   public function show($id)
{
    $pet = Pets::find($id);
    return view('admin/adminDashboard/pets/show', ['pet' => $pet]);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pet = Pets::find($id);
        return view('admin/adminDashboard/pets/update', ['pet' => $pet]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $pet = Pets::find($id);
        
        $pet->name = $request->input('name');
        $pet->age = $request->input('age');
        $pet->sex = $request->input('sex');
        $pet->vaccine = $request->input('vaccine');
        $pet->content = $request->input('content');
        
        if ($request->hasFile('image')) {
            $nameImage = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $nameImage);
            $pet->images = $nameImage;
        }
    
        $pet->save();
    
        return redirect('/admin/adminDashboard/pets/index')->with('flash_message', 'Update successful!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Pets::destroy($id);
        return redirect('/admin/adminDashboard/pets/index/')->with('flash_message', 'pet Deleted!');
    }


    // pets Page
    public function pets()
    {
        $pagepet = Pets::all(); 
        return view('/pages/pets-show/allPets',['pagepet' => $pagepet]);
    }

    public function dogIndex() {
        $dogs = Pets::whereHas('category', function($query) {
            $query->where('name', 'dog');
        })->get();

        return view('/pages/pets-show/dogs', compact('dogs'));
    }
    public function catIndex() {
        $cats = Pets::whereHas('category', function($query) {
            $query->where('name', 'cat');
        })->get();

        return view('/pages/pets-show/cats', compact('cats'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $pets = Pets::where('name', 'LIKE', "%{$query}%")
        ->orWhere('content', 'LIKE', "%{$query}%")
        ->get();

        return view('pages.pets-show.search', compact('pets'));
    }

    

    
}