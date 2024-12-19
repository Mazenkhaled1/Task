<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Home_state;
use Illuminate\Http\Request;

class Home_stateController extends Controller
{
    public function index() 
    {
        $home_states = Home_state::all() ; 
        return view('admin.home.state' , compact('home_states')) ;
    }

    public function edit($id)
    {
        $home_state = Home_state::findOrFail($id);
        return view('admin.home.state', compact('home_state'));
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'label' => 'required|string|max:500',
             'count_value' => 'required|string|max:500' , 
            'image_url' => 'required|image',
        ]);
        $home_state = Home_state::findOrFail($id);

        if ($request->hasFile('image_url')) {
            $home_state->image_url = $request->file('image_url')->store('images', 'public');
        }
        $home_state->label = $request->label;
        $home_state->count_value = $request->count_value;
        $home_state->save();
        return redirect()->back()->with('success', 'Property updated successfully!');
    }
    
    public function store(Request $request)
    {
        // التحقق من صحة البيانات المدخلة
        $request->validate([
            'label' => 'required|string|max:500',
            'count_value' => 'required|string|max:500',
            'image_url' => 'required|image', // التحقق من نوع الصورة
        ]);
    
        // إذا كانت الصورة موجودة في الطلب
        $imagePath = null;
        if ($request->hasFile('image_url')) {
            // تخزين الصورة في مجلد 'images' في public
            $imagePath = $request->file('image_url')->store('images', 'public');
        }
    
        // تخزين البيانات في قاعدة البيانات
        Home_state::create([
            'label' => $request->input('label'),
            'count_value' => $request->input('count_value'),
            'image_url' => $imagePath,  // تخزين مسار الصورة
        ]);
    
        // إعادة التوجيه مع رسالة نجاح
        return redirect()->back()->with('success', 'Post created successfully!');
    }
}
