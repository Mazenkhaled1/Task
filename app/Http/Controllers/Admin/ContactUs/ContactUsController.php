<?php

namespace App\Http\Controllers\Admin\ContactUs;

use App\Http\Controllers\Controller;
use App\Models\Contact_Us;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index() 
    {
        $contactUs_form = Contact_Us::all() ; 
        // dd($contactUs_form) ;
        return view('admin.contactUs.contactUs' , compact('contactUs_form')) ; 
    }
    public function destroy($id)
    {
        // dd($id)  ;
        $contact = Contact_Us::find($id);
        if ($contact) {
            $contact->delete();
            return redirect()->route('contactUs.index')->with('success', 'Contact information deleted successfully!');
        }

        // If the contact doesn't exist, redirect back with an error message
        return redirect()->route('contactUs.index')->with('error', 'Contact information not found!');
    }
}
