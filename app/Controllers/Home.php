<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function event()
    {
        return view('event');
    }
    public function register()
    {
        return view('register');
    }
    
    public function adddaftar()
    {
        return view ('addregister');
    } 
    public function editregis()
    {
        return view ('editregis');
    } 
    public function addevent()
    {
        return view ('addevent');
    } 
     
}