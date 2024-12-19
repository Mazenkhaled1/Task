<?php

namespace App\Http\Controllers\Admin\About_us;

use App\Http\Controllers\Controller;
use App\Models\About_us_main;
use Illuminate\Http\Request;

class About_us_mainController extends Controller
{
    public function index() 
    {
        $about_us_mains = About_us_main::all() ; 
        return view('admin.aboutUs.about_us_main' , compact('about_us_mains')) ;
    }

    public function edit($id)
    {
        $about_us_main = About_us_main::findOrFail($id);
        return view('admin.aboutUs.about_us_main', compact('about_us_main'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);
        $about_us_main = About_us_main::findOrFail($id);
        $about_us_main->title = $request->title;
        $about_us_main->subtitle = $request->subtitle; 
        
        if ($request->hasFile('image')) {
        
    
            $about_us_main->image = $request->file('image')->store('images', 'public');
        }
        $about_us_main->save();
        return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
    }
}
