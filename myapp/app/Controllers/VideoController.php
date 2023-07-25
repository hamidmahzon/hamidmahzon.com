<?php

namespace App\Controllers;

class VideoController extends BaseController
{
    public function __construct()
    {
        helper('app');
    }
    
    public function index()
    {
        $data['records']    = db('videos')->orderBy('id','DESC')->get()->getResult();
        return view('video/home',$data);
    }
    
    
}
