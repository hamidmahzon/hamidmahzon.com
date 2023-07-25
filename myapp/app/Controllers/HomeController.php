<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function __construct()
    {
        helper('app');
    }
    
    public function index()
    {
        return view('home/home');
    }
    
    
    public function lang()
    {
        if(sess()->get('lang') == 'fa')
        {    
            sess()->remove('lang');
            sess()->set('lang', 'en');
        }
        else
        {
            sess()->remove('lang');
            sess()->set('lang', 'fa');
        }
        $url = base_url();
        if(isset($_SERVER['HTTP_REFERER']))
        {
            $url = $_SERVER['HTTP_REFERER'];
        }
        return redirect()->to($url);
    }
    
    public function color($val)
    {
        if($val == 'w3-dark-grey')
        {    
            session()->set('color', 'w3-light-grey');
        }
        else
        {
            session()->set('color', 'w3-dark-grey');
        }
        
        $url = base_url();
        if(isset($_SERVER['HTTP_REFERER']))
        {
            $url = $_SERVER['HTTP_REFERER'];
        }
        
        return redirect()->to($url);
    }
    
    public function add($sec=false)
    {
		if(sess()->get('login'))
		{
			if($_POST)
			{
                array_pop($_POST);
                
				db($sec.'s')->insert($_POST);
        
				session()->setFlashdata('flash', "<b class='w3-text-blue'>".lang('app.opr_done')."</b>");
				return redirect()->back();
			
			}
			else
			{
				return view($sec.'/add');
			}
		}
        else
        {
            $url = base_url();
            if(isset($_SERVER['HTTP_REFERER']))
            {
                $url = $_SERVER['HTTP_REFERER'];
            }  
        }
    }
    
    public function edit($sec='', $id='')
	{
        
		if(sess()->get('login'))
		{
			if($_POST)
			{
                array_pop($_POST);
                db($sec.'s')->set($_POST)->where('id',$id)->update();
				session()->setFlashdata('flash', "<b class='w3-text-blue'>".lang('app.opr_done')."</b>");
				return redirect()->back();
				
			}
			else
			{
				$data['record']	=  db($sec.'s')->where('id',$id)->get()->getResult();
				return view($sec.'/edit',$data);
			}
			
		}
	}
}
