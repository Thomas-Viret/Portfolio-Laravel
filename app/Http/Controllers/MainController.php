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
     * skill page
     */
    public function skill()
    {
        return view('skill');
    }

}
