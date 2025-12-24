<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function inverter()
    {
        return view('pages.inverter-batteries');
    }

    public function bike()
    {
        return view('pages.bike-batteries');
    }

    public function rickshaw()
    {
        return view('pages.rickshaw-batteries');
    }



    
}
