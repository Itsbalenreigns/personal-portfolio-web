<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function home()
    {
        return view('pages.home');
    }

    
    // public function about()
    // {
    //     return view('pages.about');
    // }
    public function education()
    {
        return view('pages.education');
    }
    public function skills()
    {
        return view('pages.skills');
    }
    public function projects()
    {
        return view('pages.projects');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
