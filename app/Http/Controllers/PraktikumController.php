<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PraktikumController extends Controller
{
    public function index()
    {
        return view('0098.0098index');
    }

    public function artikel()
    {
        return view('0098.0098artikel');
    }
    public function contactus()
    {
        return view('0098.0098contactus');
    }

    public function codeigniter()
    {
        return view('0098.0098codeigniter');
    }

    public function laravel()
    {
        return view('0098.0098laravel');
    }
}
