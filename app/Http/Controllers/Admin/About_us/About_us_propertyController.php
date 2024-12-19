<?php

namespace App\Http\Controllers\Admin\About_us;

use App\Http\Controllers\Controller;
use App\Models\Property_state;
use Illuminate\Http\Request;

class About_us_propertyController extends Controller
{
    public function index() 
    {
        $about_us_properties = Property_state::all() ; 
        return view('admin.aboutUs.about_us_property' , compact('about_us_properties')) ;
    }

    public function edit($id)
    {
        $about_us_property = Property_state::findOrFail($id);
        return view('admin.aboutUs.about_us_property' , compact('about_us_property'));
    }

    public function update(Request $request, $id)
    {
      
        $request->validate([
            'apartments_count' => 'required|integer|max:500',
            'floors_count' => 'required|integer|max:500',
            'image_path_1' => 'required|image',
            'image_path_2' => 'required|image',
        ]);
        $about_us_property = Property_state::findOrFail($id);

        if ($request->hasFile('image_path_1')) {
            $about_us_property->image_path_1 = $request->file('image_path_1')->store('images', 'public');
        }

        if ($request->hasFile('image_path_2')) {
            $about_us_property->image_path_2 = $request->file('image_path_2')->store('images', 'public');
        }

        $about_us_property->apartments_count = $request->apartments_count;
        $about_us_property->floors_count = $request->floors_count;
        // dd($request->all()) ;
        $about_us_property->save();
        return redirect()->route('about_us_property.index')->with('success', 'Property updated successfully!');
    }
    
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:500',
    //         'description' => 'required|string|max:500',
    //         'image' => 'nullable|image',  
    //     ]);
    //         $imagePath = null;
    //         if ($request->hasFile('image')) {
    //              $imagePath = $request->file('image')->store('images', 'public');
    //         }
    //         About_us_content::create([
    //             'title' => $request->input('title'),
    //             'description' => $request->input('description'),
    //             'image' => $imagePath,  // Store the image path
    //         ]);
    //     return redirect()->back()->with('success', 'Post created successfully!');
    // }
}
