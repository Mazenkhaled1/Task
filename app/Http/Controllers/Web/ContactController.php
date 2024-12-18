<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact_Page;
use App\Models\Contact_Us;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact_Page::first() ; 
        return view('web.home.contact' , compact('contact')) ;
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'unit_type' => 'required|string',
            'message' => 'required|string',
        ]);

        // Create a new contact record in the database
        Contact_Us::create([
            'name' => $validated['Name'],
            'email' => $validated['Email'],
            'phone' => $validated['phone'],
            'unit_type' => $validated['unit_type'],
            'message' => $validated['message'],
        ]);

        // Return a success response
        return back()->with('success', 'تم إرسال رسالتك بنجاح.');
    }
}
