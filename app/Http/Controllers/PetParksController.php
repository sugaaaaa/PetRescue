<?php

namespace App\Http\Controllers;

use App\Models\PetParks;
use Illuminate\Http\Request;

class PetParksController extends Controller
{
    public function view()
    {
        $petPark = PetParks::all();
        return view('/pages/petPark', ['petPark' => $petPark]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $petPark = PetParks::all(); 
        return view('/admin/adminDashboard/petPark/index' , ['petPark' => $petPark] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/adminDashboard/petPark/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nameImage = time() . '.' . $request->images->extension();  
        $request->images->move(public_path('/petPark'), $nameImage);
    
        $petPark = new PetParks([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phoneNumber' => $request->input('phoneNumber'),
            'email' => $request->input('email'),
            'openDay' => $request->input('openDay'),
            'timeOpen' => $request->input('timeOpen'),
            'content' => $request->input('content'),
            'location' => $request->input('location'),
            'images' => $nameImage, 
        ]);
        $petPark->save();
        return redirect('admin/adminDashboard/petPark/index')->with('success', 'Pet information added successfully!');   
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pet = PetParks::find($id); 
        return view('/admin/adminDashboard/petPark/update' ,['pet' => $pet] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pet = PetParks::find($id); 
        return view('/admin/adminDashboard/petPark/update' ,['pet' => $pet] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pet = PetParks::find($id);
        
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
            $request->image->move(public_path('petPark'), $nameImage);
            $pet->images = $nameImage;
        }

        $pet->save();
    
        return redirect('/admin/adminDashboard/petPark/index')->with('flash_message', 'Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PetParks::destroy($id);
        return redirect('/admin/adminDashboard/petPark/index/')->with('flash_message', 'pet Deleted!');
    }
}