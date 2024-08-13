<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\PetCare;


class PetCareController extends Controller
{
    public function petcare()
    {
        $petcare = PetCare::all();
        return view('pages.petCarePage', ['petcare' => $petcare]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petCare = PetCare::all(); 
        return view('admin/adminDashboard/petCare/index' , ['petCare' => $petCare]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/adminDashboard/petCare/create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request) : RedirectResponse
    {
        $nameImage = time() . '.' . $request->images->extension();  
        $request->images->move(public_path('/petCare'), $nameImage);
    
        $petCare = new PetCare([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'contact' => $request->input('contact'),
            'content' => $request->input('content'),
            'images' => $nameImage, 
        ]);
        $petCare->save();
        return redirect('admin/adminDashboard/petCare/index')->with('success', 'Pet information added successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $petCare = PetCare::find($id);
        return view('admin/adminDashboard/petCare/show', ['petCare' => $petCare]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $petCare = PetCare::find($id);
        return view('admin/adminDashboard/petCare/update', ['petCare' => $petCare]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $petCare = PetCare::find($id);
        
        $petCare->name = $request->input('name');
        $petCare->address = $request->input('address');
        $petCare->contact = $request->input('contact');
        $petCare->content = $request->input('content');
        
        if ($request->hasFile('image')) {
            $nameImage = time().'.'.$request->image->extension();  
            $request->image->move(public_path('/petCare'), $nameImage);
            $petCare->images = $nameImage;
        }
    
        $petCare->save();
        return redirect('/admin/adminDashboard/petCare/index')->with('flash_message', 'Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        PetCare::destroy($id);
        return redirect('/admin/adminDashboard/petCare/index/')->with('flash_message', 'pet Deleted!');
    }
}
