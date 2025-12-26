<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\blog;
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

    public function talltubular()
    {
         $products = Product::where('category', '=', 'inverter')->get();
        return view('pages.inverter-batteries', compact('products'));
    }

      public function talltubularbat($id) {
        $product = Product::find($id);
        return view('pages.inverter-battery', compact('product'));
    }

    public function bike()
    {
        $products = Product::where('category', '=', 'bike')->get();
        return view('pages.bike-batteries', compact('products'));
    }

     public function bikebat($id) {
        $product = Product::find($id);
        return view('pages.bike-battery', compact('product'));
    }

    public function rickshaw()
    {
          $products = Product::where('category', '=', 'rickshaw')->get();
        return view('pages.rickshaw-batteries', compact('products'));
    }

       public function rickshawbat($id) {
        $product = Product::find($id);
        return view('pages.rickshaw-battery', compact('product'));
    }

  public function blog(){
         $blogs = Blog::orderBy('id', 'DESC')->get();
        return view('pages.blog', compact('blogs'));
    }

       public function show($slug){
        $blogs = Blog::where('slug', $slug)->firstOrFail();
        return view('pages.details', compact('blogs'));
    }

    
}
