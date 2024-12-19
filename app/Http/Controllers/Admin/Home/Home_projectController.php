<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Home_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Home_projectController extends Controller
{
    public function index() 
    {
        $projects = Home_project::all() ; 
        return view('admin.home.project' , compact('projects')) ;
    }

    public function edit($id)
    {
        $project = Home_project::findOrFail($id);
        return view('admin.home.project', compact('project'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:500',
            'title' => 'required|string|max:500',
            'description' => 'required|string|max:500',
            'image_1' => 'required|image' ,
            'image_2' => 'required|image' ,
        ]);
        $project = Home_project::findOrFail($id);
        $project->name = $request->name;
        $project->title = $request->title; 
        $project->description = $request->description; 
         // التحقق من وجود صورة 1 وتحميلها
    if ($request->hasFile('image_1')) {
        // حذف الصورة القديمة إذا كانت موجودة
        if ($project->image_1) {
            Storage::disk('public')->delete($project->image_1);
        }

        // تخزين الصورة الجديدة
        $project->image_1 = $request->file('image_1')->store('images', 'public');
    }

    // التحقق من وجود صورة 2 وتحميلها
    if ($request->hasFile('image_2')) {
        // حذف الصورة القديمة إذا كانت موجودة
        if ($project->image_2) {
            Storage::disk('public')->delete($project->image_2);
        }

        // تخزين الصورة الجديدة
        $project->image_2 = $request->file('image_2')->store('images', 'public');
    }
     
        $project->save();

        return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
    }
}
