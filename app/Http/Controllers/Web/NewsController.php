<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\SubHeader;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $new = SubHeader::first() ;
        $posts = Post::all() ; 
        return view('web.home.news' , compact(['new' , 'posts']));
    }

    public function show($id)
    { 
        $new = SubHeader::first() ;
        $post = Post::findOrFail($id); // البحث عن المنشور باستخدام الـ id
        return view('web.home.news_single', compact(['post' , 'new'])); // عرض الصفحة مع البيانات
    }
    
 
}
