<?php

namespace App\Http\Controllers\Web;


use App\Models\Contact_Page;
use App\Models\Dura_project;

use App\Models\Project_header;
use App\Http\Controllers\Controller;
use App\Models\Project_service;

class ProjectController extends Controller
{
    public function index() 
    {
        $header = Project_header::first() ;
        $dura_project  =  Dura_project::first() ;
        $contact = Contact_Page::first() ; 
        $project_services = Project_service::all() ;
        return view('web.home.project' , compact(['header' , 'dura_project','contact' , 'project_services'])) ; 
    }

}
