<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Home_header;
use Illuminate\Http\Request;

class Home_headerController extends Controller
{
    public function index() 
    {
        $home_headers = Home_header::all() ; 
        return view('admin.home.header' , compact('home_headers')) ;
    }

    public function edit($id)
    {
        $home_header = Home_header::findOrFail($id);
        return view('admin.home.header' , compact('home_header'));
    }

    public function update(Request $request, $id)
    {
        // التحقق من صحة البيانات
        $request->validate([
            'slider_title' => 'required|string|max:500',
            'slider_description' => 'required|string|max:500',
            'video_url' => 'nullable|mimes:mp4,mov|max:51200', // تحقق من أنواع الفيديو وحجمه
        ]);
    
        // العثور على العنصر باستخدام الـ id
        $home_header = Home_header::findOrFail($id);
    
        // التحقق إذا كان هناك فيديو مرفوع
        if ($request->hasFile('video_url')) {
            // تخزين الفيديو في مجلد 'videos' بدلاً من 'images'
            $home_header->video_url = $request->file('video_url')->store('videos', 'public');
        }
    
        // تحديث البيانات الأخرى
        $home_header->slider_title = $request->slider_title;
        $home_header->slider_description = $request->slider_description;
    
        // حفظ التحديثات
        $home_header->save();
    
        // إعادة التوجيه مع رسالة نجاح
        return redirect()->back()->with('success', 'Header updated successfully!');
    }
    
}
