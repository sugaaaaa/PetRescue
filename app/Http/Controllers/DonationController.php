<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::all();
        return view('admin.adminDashboard.donation.index', compact('donations'));
    }

    public function store(Request $request)
    {
        Log::info('Create order method called.');

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'amount' => 'required|numeric',
            'remarks' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        Log::info('Validation passed.');

        if (!auth()->check()) {
            return response()->json(['success' => false, 'message' => 'You must be logged in to make a donation']);
        }

        try {
            if ($request->hasFile('images')) {
                $nameImage = time() . '.' . $request->file('images')->extension();
                $request->file('images')->move(public_path('/Donation'), $nameImage);
            }

            $donation = new Donation([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'amount' => $request->input('amount'),
                'remarks' => $request->input('remarks'),
                'image' => $nameImage ?? null,
            ]);

            $donation->save();

            return response()->json(['success' => true, 'message' => 'Thank you for your kindness. May GOD bless you and your family']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }




    public function destroy(Donation $donation)
    {
        $donation->delete();

        return redirect()->route('donations.index')->with('success', 'Donation has been deleted successfully');
    }
}