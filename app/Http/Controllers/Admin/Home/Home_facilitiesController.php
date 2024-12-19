<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Home_facilitie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Home_facilitiesController extends Controller
{
    public function index() 
    {
        $facilities = Home_facilitie::all() ; 
        return view('admin.home.facilities' , compact('facilities')) ;
    }

    public function edit($id)
    {
        $facility = Home_facilitie::findOrFail($id);
        return view('admin.home.facilities' , compact('facility'));
    }

    public function update(Request $request, $id)
    {
        
    
        // التحقق من صحة البيانات
        $request->validate([
            'name' => 'required|string|max:500',
            'description' => 'required|string|max:500',
            'icon' => 'required|image',  
        ]);
        // العثور على العنصر في قاعدة البيانات باستخدام الـ id
        $facility = Home_facilitie::findOrFail($id);
    
        // تحديث الحقول الأخرى
        $facility->name = $request->name;
        $facility->description = $request->description;

        // التحقق من وجود صورة جديدة وتحميلها
        if ($request->hasFile('icon')) {
            // حذف الصورة القديمة إذا كانت موجودة
            if ($facility->icon) {
                Storage::disk('public')->delete($facility->icon);
            }
    
            // تخزين الصورة الجديدة
            $facility->icon = $request->file('icon')->store('images', 'public');
        }
    
        // حفظ التغييرات في قاعدة البيانات
        $facility->save();
    
        // إعادة التوجيه مع رسالة نجاح
        return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
    }
    
    public function store(Request $request)
{
    // التحقق من صحة البيانات
    $request->validate([
        'name' => 'required|string|max:500',
        'description' => 'required|string|max:500',
        'icon' => 'nullable|image',  // تحقق من الصورة
    ]);

    // التعامل مع الصورة (إذا كانت موجودة)
    $imagePath = null;
    if ($request->hasFile('icon')) {
        // تخزين الصورة في مجلد 'images' داخل 'public'
        $imagePath = $request->file('icon')->store('images', 'public');
    }

    // إنشاء سجل جديد في قاعدة البيانات باستخدام البيانات المدخلة
    Home_facilitie::create([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'icon' => $imagePath,  // تخزين مسار الصورة (NULL إذا لم يتم رفع صورة)
    ]);

    // إعادة التوجيه مع رسالة نجاح
    return redirect()->back()->with('success', 'تم إضافة المحتوى بنجاح!');
}

    
}
