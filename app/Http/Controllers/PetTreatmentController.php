<?php

namespace App\Http\Controllers;

use App\Models\PetTreatment;
use Illuminate\Http\Request;

class PetTreatmentController extends Controller
{
    public function view()
    {
        $petTreatment = PetTreatment::all();
        return view('/pages/petTreatment', ['petTreatment' => $petTreatment]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petTreatment = PetTreatment::all(); 
        return view('/admin/adminDashboard/petTreatment/index', ['petTreatment' => $petTreatment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/adminDashboard/petTreatment/create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $nameImage = time() . '.' . $request->images->extension();  
        $request->images->move(public_path('/petTreatment'), $nameImage);
    
        $petTreatment = new PetTreatment([
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
        $petTreatment->save();
        return redirect('admin/adminDashboard/petTreatment/index')->with('success', 'Pet information added successfully!');   
     }     

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pet = PetTreatment::find($id);
        return view('/admin/adminDashboard/petTreatment/show' ,['pet' => $pet] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pet = PetTreatment::find($id); 
        return view('/admin/adminDashboard/petTreatment/update ' ,['pet' => $pet] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pet = PetTreatment::find($id);
        
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
            $request->image->move(public_path('petTreatment'), $nameImage);
            $pet->images = $nameImage;
        }

        $pet->save();
    
        return redirect('/admin/adminDashboard/petTreatment/index')->with('flash_message', 'Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PetTreatment::destroy($id);
        return redirect('/admin/adminDashboard/petTreatment/index/')->with('flash_message', 'pet Deleted!'); 
    }
}