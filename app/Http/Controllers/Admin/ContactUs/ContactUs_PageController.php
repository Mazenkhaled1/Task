<?php

namespace App\Http\Controllers\Admin\ContactUs;

use App\Http\Controllers\Controller;
use App\Models\Contact_Page;
use Illuminate\Http\Request;

class ContactUs_PageController extends Controller
{
    public function index() 
    {
        $contacts = Contact_Page::all() ; 
        return view('admin.contactUs.contact_page' , compact('contacts')) ;
    }

    public function edit($id)
    {
        dd($id) ;
        // جلب السجل المطلوب باستخدام الـ id
        $contact = Contact_Page::findOrFail($id);
        
        // إرسال السجل إلى view لعرضه في النموذج
        return view('admin.contactUs.contact_page', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        // التحقق من صحة المدخلات
        $request->validate([
            'title' => 'required|string|max:255',
            'breadcrumb' => 'required|string|max:255',
            'background_image' => 'nullable|image',
            'sub_title' => 'nullable|string|max:255',
            'secondary_image' => 'nullable|array',
            'secondary_image.*' => 'image',
        ]);
    
        // جلب السجل باستخدام الـ id
        $contact = Contact_Page::findOrFail($id);
        
        // تحديث البيانات
        $contact->title = $request->title;
        $contact->breadcrumb = $request->breadcrumb;
        $contact->sub_title = $request->sub_title;
    
        if ($request->hasFile('background_image')) {
            // تخزين الصورة في مجلد التخزين العام
            $contact->background_image = $request->file('background_image')->store('background_images', 'public');
        }
        if ($request->hasFile('secondary_image')) {
            $secondaryImages = [];
            foreach ($request->file('secondary_image') as $image) {
                // تخزين الصور في مجلد التخزين العام (public)
                $secondaryImages[] = $image->store('secondary_images', 'public');
            }
            // تعديل المسارات لتتوافق مع التنسيق الصحيح (استبدال \/ بـ /)
            $secondaryImages = array_map(function($path) {
                return str_replace('\/', '/', $path);
            }, $secondaryImages);
        
            // تخزين المسارات الخاصة بالصور الثانوية في قاعدة البيانات
            $contact->secondary_images = json_encode($secondaryImages);
        }
    
        // حفظ التحديثات في قاعدة البيانات
        $contact->save();
    
        // إعادة التوجيه إلى صفحة العرض مع رسالة نجاح
        return redirect()->route('contactUs_Page.index')->with('success', 'تم تحديث البيانات بنجاح');
    }
    
}
