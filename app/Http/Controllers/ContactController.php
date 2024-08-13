<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('/pages/contactPage');
    }

    public function send(Request $request)
    {
        $data=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('receipentemail@gamil.com')->send(new ContactUs($data));

        return redirect()->back()->with('success', 'message send successfully!');

    }
}
