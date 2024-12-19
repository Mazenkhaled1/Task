<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\About_us_content;
use App\Models\About_us_header;
use App\Models\About_us_main;
use App\Models\Property_state;
use Illuminate\Http\Request;

class AboutControlelr extends Controller
{
    public function index() 
    {
        $about_us_main = About_us_main::first() ; 
        $about_us_header = About_us_header::first() ; 
        $about_us_contents = About_us_content::all() ; 
        $about_us_property = Property_state::first() ; 

        return view('web.home.about' , compact(['about_us_main' ,'about_us_header','about_us_contents','about_us_property'])) ; 
     }
}
