<?php

namespace App\Http\Controllers\Web;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\Contact_Page;
use App\Models\Home_facilitie;
use App\Models\Home_header;
use App\Models\Home_image;
use App\Models\Home_project;
use App\Models\Home_state;

class HomeController extends Controller
{
    public function index() 
    {
        $posts = Post::all() ; 
        $contact = Contact_Page::first() ; 
        $projects = Home_project::all();
        $states  = Home_state::all() ; 
        $facilities = Home_facilitie::all() ; 
        $images =  Home_image::all() ; 
        $section = Home_header::first() ;
        return view('web.home.index' , compact(['posts','contact','projects' ,'states' , 'facilities', 'images','section'])) ;
    }
}
