<?php

namespace App\Http\Controllers\Admin\About_us;

use App\Http\Controllers\Controller;
use App\Models\About_us_header;
use Illuminate\Http\Request;

class About_us_headerController extends Controller
{
    public function index() 
    {
        $about_us_headers = About_us_header::all() ; 
        return view('admin.aboutUs.about_us_header' , compact('about_us_headers')) ;
    }

    public function edit($id)
    {
        $about_us_header = About_us_header::findOrFail($id);
        return view('admin.aboutUs.about_us_header', compact('about_us_header'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        $about_us_header = About_us_header::findOrFail($id);
        $about_us_header->name = $request->name;
        $about_us_header->title = $request->title; 
        $about_us_header->description = $request->description; 
        
        $about_us_header->save();
        return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
    }
}
