<?php

namespace App\Http\Controllers\Admin\Proejct;

use Illuminate\Http\Request;
use App\Models\Project_service;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class Project_serviceController extends Controller
{
    public function index() 
    {
        $services = Project_service::all() ; 
        return view('admin.project.service' , compact('services')) ;
    }

    public function edit($id)
    {
        $service = Project_service::findOrFail($id);
        return view('admin.project.service' , compact('services'));
    }

    public function update(Request $request, $id)
    {
        
    
        // التحقق من صحة البيانات
        $request->validate([
            'name' => 'required|string|max:500',
            'description' => 'required|string|max:500',
            'image' => 'required|image',  
        ]);
        // العثور على العنصر في قاعدة البيانات باستخدام الـ id
        $service = Project_service::findOrFail($id);
    
        // تحديث الحقول الأخرى
        $service->name = $request->name;
        $service->description = $request->description;

        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
    

            $service->image = $request->file('image')->store('images', 'public');
        }

        $service->save();
    
        // إعادة التوجيه مع رسالة نجاح
        return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
    }
    
    public function store(Request $request)
{

    $request->validate([
        'name' => 'required|string|max:500',
        'description' => 'required|string|max:500',
        'image' => 'nullable|image',  
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
    }

    Project_service::create([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'image' => $imagePath,  
    ]);

    return redirect()->back()->with('success', 'تم إضافة المحتوى بنجاح!');
}

}
