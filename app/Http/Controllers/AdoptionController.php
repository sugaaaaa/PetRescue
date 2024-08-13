<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Models\Pets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;



class AdoptionController extends Controller
{
    public function create(Pets $pet)
    {
        $adoption = Adoption::where('pet_id', $pet->id)->whereIn('status', ['pending', 'approved', 'rejected'])->first();

        return view('pages.adoptPage', compact('pet', 'adoption'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'pet_id' => 'required',
            'name' => 'required|unique:adoptions',
            'email' => 'required|unique:adoptions',
            'phone' => 'required',
            'address' => 'required',
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9' => 'required',
            'q10' => 'required',
            'q11' => 'required',
            'q12' => 'required',
        ]);

        $user_id = Auth::id();

        if (is_null($user_id)) {
            return back()->with('error', 'You need to be logged in to submit an adoption application.');
        }

        $adoption = new Adoption($request->all());
        $adoption->user_id = $user_id;
        $adoption->status = 'pending';
        $adoption->save();

        return response()->json(['success' => true]);
    }

    public function downloadPdf()
    {
        $adoptions = Adoption::with('pet')->get();
        $pdf = Pdf::loadView('pdf.adoptions', compact('adoptions'));

        return $pdf->download('adoptions.pdf');
    }
    public function viewPdf()
    {
        $adoptions = Adoption::all();
        $pdf = PDF::loadView('pdf.adoptions', compact('adoptions'));

        return $pdf->stream('adoptions.pdf');
    }
}