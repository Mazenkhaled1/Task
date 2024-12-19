<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() 
    {
        $posts = Post::all() ; 
        return view('admin.news.post' , compact('posts')) ;
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'author_name' => 'required|string|max:255',
            'author_image' => 'nullable|image',  // تحقق من الصورة فقط إذا كانت موجودة
            'image' => 'nullable|image',  // تحقق من الصورة فقط إذا كانت موجودة
        ]);
            // dd($request->all()) ;
$authorImagePath = null;
if ($request->hasFile('author_image')) {
    $authorImagePath = $request->file('author_image')->store('author_images', 'public');
}

$imagePath = null;
if ($request->hasFile('image')) {
  
    $imagePath = $request->file('image')->store('post_images', 'public');
}

$post = new Post();
$post->category = $request->input('category');
$post->title = $request->input('title');
$post->description = $request->input('description');
$post->author_name = $request->input('author_name');
$post->author_image = $authorImagePath; // Store the author image path
$post->image = $imagePath; // Store the post image path
$post->save();
    
        // Redirect to a relevant page (like the newly created post view or list)
        return redirect()->back()->with('success', 'Post created successfully!');
    }


    // Controller (PostController.php)
public function destroy($id)
{
    // ابحث عن المنشور باستخدام المعرف
    $post = Post::findOrFail($id);
    $post->delete();

    // إعادة التوجيه مع رسالة نجاح
    return redirect()->back()->with('success', 'Post deleted successfully!');
}
    
}
