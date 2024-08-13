<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdoptionStatusChanged;

class AdminController extends Controller
{
    public function index()
    {
        $adoptions = Adoption::with(['pet', 'user'])->get();
        return view('/admin/adminDashboard/adoption/index', compact('adoptions'));
    }

    public function approve(Adoption $adoption)
    {
        $adoption->status = 'approved';
        $adoption->save();
        Log::info('Adoption approved: ' . $adoption->id);

        return redirect()->route('admin.adoptions.index')->with('success', 'Adoption approved successfully!');
    }

    public function reject(Adoption $adoption)
    {
        $adoption->status = 'rejected';
        $adoption->save();
        Log::info('Adoption rejected: ' . $adoption->id);

        return redirect()->route('admin.adoptions.index')->with('success', 'Adoption rejected successfully!');
    }

    public function history()
    {
        $adoptedPets = Adoption::where('status', 'approved')->with('pet')->get();
        return view('/admin/adminDashboard/adoption/adoptionHistory', compact('adoptedPets'));
    }

    public function changeAdoptionStatus(Request $request, $id)
    {
        $adoption = Adoption::findOrFail($id);
        $adoption->status = $request->input('status');
        $adoption->save();

        return redirect()->back()->with('success', 'Adoption status updated successfully.');
    }
}