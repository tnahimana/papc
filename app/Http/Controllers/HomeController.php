<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function about(){
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function service()
    {
        return view('home.service');
    }

    public function donate()
    {
        return view('home.donate');
    }

    public function testimony()
    {
        return view('home.testimony');
    }

    public function team()
    {
        return view('home.team');
    }
}
