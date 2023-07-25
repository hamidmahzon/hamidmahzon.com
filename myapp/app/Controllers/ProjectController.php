<?php

namespace App\Controllers;

class ProjectController extends BaseController
{
    public function __construct()
    {
        helper('app');
    }
    
    public function index()
    {
        $data['records']    = db('projects')->orderBy('id','DESC')->get()->getResult();
        return view('project/home',$data);
    }
    
    
}
