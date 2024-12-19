<?php

namespace App\Http\Controllers\Admin\About_us;

use App\Http\Controllers\Controller;
use App\Models\About_us_content;
use Illuminate\Http\Request;

class About_us_contentController extends Controller
{
    public function index() 
    {
        $about_us_contents = About_us_content::all() ; 
        return view('admin.aboutUs.about_us_content' , compact('about_us_contents')) ;
    }

    public function edit($id)
    {
        $about_us_content = About_us_content::findOrFail($id);
        return view('admin.aboutUs.about_us_content' , compact('about_us_content'));
    }

    public function update(Request $request, $id)
    {
      
        $request->validate([
            'title' => 'required|string|max:500',
            'description' => 'required|string|max:500',
            'image' => 'required|image',
        ]);
        $about_us_content = About_us_content::findOrFail($id);
        $about_us_content->title = $request->title; 
        $about_us_content->description = $request->description; 
        if ($request->hasFile('image')) {
 
            $about_us_content->image = $request->file('image')->store('images', 'public');
        }
        $about_us_content->save();
        return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:500',
            'description' => 'required|string|max:500',
            'image' => 'nullable|image',  
        ]);
            $imagePath = null;
            if ($request->hasFile('image')) {
                 $imagePath = $request->file('image')->store('images', 'public');
            }
            About_us_content::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'image' => $imagePath,  // Store the image path
            ]);
        return redirect()->back()->with('success', 'Post created successfully!');
    }
}
