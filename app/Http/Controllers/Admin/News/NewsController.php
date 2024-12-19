<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\SubHeader;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() 
    {
        $news = SubHeader::all() ; 
        return view('admin.news.news' , compact('news')) ;
    }

    public function edit($id)
    {
        dd(1); 
        // جلب السجل المطلوب باستخدام الـ id
        $news = SubHeader::findOrFail($id);
        
        // إرسال السجل إلى view لعرضه في النموذج
        return view('admin.news.news', compact('news'));
    }

    public function update(Request $request, $id)
    {
    
        // التحقق من صحة المدخلات
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'background_image' => 'nullable|image',
        ]);
        
        // جلب السجل باستخدام الـ id
        $new = SubHeader::findOrFail($id);
        
        // تحديث البيانات
        $new->title = $request->title;
        $new->description = $request->description; // تم تعديل breadcrumb إلى description
        
        if ($request->hasFile('background_image')) {
            // تخزين الصورة في مجلد التخزين العام
            // إذا كان هناك صورة جديدة، قم بتخزينها
            $new->background_image = $request->file('background_image')->store('background_images', 'public');
        }
     
        // حفظ التحديثات في قاعدة البيانات
        $new->save();
    
        // إعادة التوجيه إلى صفحة العرض مع رسالة نجاح
        return redirect()->route('news.index')->with('success', 'تم تحديث البيانات بنجاح');
    }
}
