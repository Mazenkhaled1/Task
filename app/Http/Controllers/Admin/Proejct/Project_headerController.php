<?php

namespace App\Http\Controllers\Admin\Proejct;

use App\Http\Controllers\Controller;
use App\Models\Project_header;
use Illuminate\Http\Request;

class Project_headerController extends Controller
{
    public function index() 
    {
        $prject_headers = Project_header::all() ; 
        return view('admin.project.header' , compact('prject_headers')) ;
    }

    public function edit($id)
    {
        $prject_header = Project_header::findOrFail($id);
        return view('admin.project.header', compact('prject_header'));
    }

    public function update(Request $request, $id)
    {
        // التحقق من صحة البيانات
        $request->validate([
            'title' => 'required|string|max:500',
            'sub_title' => 'required|string|max:500',
            'image' => 'nullable|image', // تحقق من أنواع الفيديو وحجمه
        ]);
    
        // العثور على العنصر باستخدام الـ id
        $prject_header = Project_header::findOrFail($id);
    
        // التحقق إذا كان هناك فيديو مرفوع
        if ($request->hasFile('image')) {
            // تخزين الفيديو في مجلد 'videos' بدلاً من 'images'
            $prject_header->image = $request->file('image')->store('images', 'public');
        }
    
        // تحديث البيانات الأخرى
        $prject_header->title = $request->title;
        $prject_header->sub_title = $request->sub_title;
    
        // حفظ التحديثات
        $prject_header->save();
    
        // إعادة التوجيه مع رسالة نجاح
        return redirect()->back()->with('success', 'Header updated successfully!');
    }
    
}
