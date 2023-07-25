<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function __construct()
    {
        helper('app');
    }
    
    public function index()
    {
        if(sess()->get('login'))
        {
            return redirect()->to('/');
        }
        else
        {
            return view('login/login');
        }
    }
    
    public function logging()
    {
        
        $record    = db('users')->where('email',request()->getPost('email'))->get()->getResult();
        if ($record && password_verify(request()->getPost('password'), $record[0]->password)) 
        {
            $udata = 
            [
                'name'  => $record[0]->name,
                'email' => $record[0]->email,
                'login' => true,
            ];
            sess()->set($udata);

            return redirect()->to('/');
        } 
        
        else 
        {
            exit('No');
            sess()->setFlashdata('flash', "<b class='w3-text-red'>".lang('app.login_fail')."</b>");
            return redirect()->to('home');
        }
    }
    
     public function logout()
    {
        session()->set('login', false);
        session()->set('role', false);
        return redirect()->back();
    }
}
