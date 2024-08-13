<?php

namespace App\Http\Controllers;

use App\Models\PetShop;
use Illuminate\Http\Request;

class PetShopController extends Controller
{
    public function view()
    {
        $petShop = PetShop::all();
        return view('/pages/petShop', ['petShop' => $petShop]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petShop = PetShop::all(); 
        return view('/admin/adminDashboard/petShop/index', ['petShop' => $petShop]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/adminDashboard/petShop/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nameImage = time() . '.' . $request->images->extension();  
        $request->images->move(public_path('/petShop'), $nameImage);
    
        $petShop = new PetShop([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phoneNumber' => $request->input('phoneNumber'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phoneNumber'),
            'openDay' => $request->input('openDay'),
            'timeOpen' => $request->input('timeOpen'),
            'content' => $request->input('content'),
            'location' => $request->input('location'),
            'images' => $nameImage,  
        ]);
        $petShop->save();
        return redirect('admin/adminDashboard/petShop/index')->with('success', 'Pet information added successfully!');   
     }    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pet = PetShop::find($id); 
        return view('/admin/adminDashboard/petShop/update' ,['pet' => $pet] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pet = PetShop::find($id); 
        return view('/admin/adminDashboard/petShop/update' ,['pet' => $pet] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pet = PetShop::find($id);
        
        $pet->name = $request->input('name');
        $pet->address = $request->input('address');
        $pet->phoneNumber = $request->input('phoneNumber');
        $pet->email = $request->input('email');
        $pet->openDay = $request->input('openDay');
        $pet->timeOpen = $request->input('timeOpen');
        $pet->content = $request->input('content');
        $pet->location = $request->input('location');
        
        if ($request->hasFile('image')) {
            $nameImage = time().'.'.$request->image->extension();  
            $request->image->move(public_path('petShop'), $nameImage);
            $pet->images = $nameImage;
        }

        $pet->save();
    
        return redirect('/admin/adminDashboard/petShop/index')->with('flash_message', 'Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PetShop::destroy($id);
        return redirect('/admin/adminDashboard/petShop/index/')->with('flash_message', 'pet Deleted!');
    }
}