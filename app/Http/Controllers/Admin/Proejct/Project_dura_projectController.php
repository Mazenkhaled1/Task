<?php

namespace App\Http\Controllers\Admin\Proejct;

use App\Http\Controllers\Controller;
use App\Models\Dura_project;
use Illuminate\Http\Request;

class Project_dura_projectController extends Controller
{
    public function index() 
    {
        $dura_projects = Dura_project::all() ; 
        return view('admin.project.dura_project' , compact('dura_projects')) ;
    }

    public function edit($id)
    {
        $dura_project = Dura_project::findOrFail($id);
        return view('admin.project.dura_project' , compact('dura_project'));
    }

    public function update(Request $request, $id)
    {
        // إزالة dd(4) لأنه يؤدي إلى توقف التنفيذ
        // dd(4); // خطأ هنا
    
        // التحقق من البيانات المدخلة
        $request->validate([
            'title' => 'required|string|max:800',
            'description' => 'required|string|max:1000',
            'main_image' => 'nullable|image', 
            'secondary_image' => 'nullable|image',
        ]);
    
        // العثور على العنصر باستخدام الـ id
        $dura_project = Dura_project::findOrFail($id); // تأكد من صحة اسم النموذج
    
        // التحقق إذا كان هناك صورة مرفوعة
        if ($request->hasFile('main_image')) {
            // تخزين الصورة في مجلد 'images' في المسار العام
            $dura_project->main_image = $request->file('main_image')->store('images', 'public');
        }
        if ($request->hasFile('secondary_image')) {
            // تخزين الصورة في مجلد 'images' في المسار العام
            $dura_project->secondary_image = $request->file('secondary_image')->store('images', 'public');
        }
    
        // تحديث البيانات الأخرى
        $dura_project->title = $request->title;
        $dura_project->description = $request->description;
    
        // حفظ التحديثات
        $dura_project->save();
    
        // إعادة التوجيه مع رسالة نجاح
        return redirect()->back()
                         ->with('success', 'Project updated successfully!');
    }
    
    
}
