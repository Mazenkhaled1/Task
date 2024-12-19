<?php

namespace App\Http\Controllers\Admin\Home;

use App\Models\Home_image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class Home_imageController extends Controller
{
    public function index() 
    {
        $images = Home_image::all() ; 
        return view('admin.home.images' , compact('images')) ;
    }

    public function edit($id)
    {
        $image = Home_image::findOrFail($id);
        return view('admin.home.images'  , compact('image'));
    }

    public function update(Request $request, $id)
    {
        
    
        // التحقق من صحة البيانات
        $request->validate([
            'alt' => 'required|string|max:500',
            'src' => 'required|image',  
        ]);
        $image = Home_image::findOrFail($id);
        $image->alt = $request->alt;


        if ($request->hasFile('src')) {

            if ($image->src) {
                Storage::disk('public')->delete($image->src);
            }

            $image->src = $request->file('src')->store('images', 'public');
        }
    
   
        $image->save();
    

        return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
    }
}
