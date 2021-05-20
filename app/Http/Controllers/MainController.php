<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * Home page
     */
    public function home()
    {
        return view('welcome');
    }

    /**
     * skills page
     */
    public function skills()
    {
        return view('skills');
    }

     /**
     * presentation page
     */
    public function presentation()
    {
        return view('presentation');
    }

    /**
     * formation page
     */
    public function formation()
    {
        return view('formation');
    }

    /**
     * projects page
     */
    public function projects()
    {
        return view('projects');
    }

    /**
     * contact page
     */
    public function contact()
    {
        return view('contact');
    }



}
