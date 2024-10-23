<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function products()
    {
        return view('frontend.products');
    }

    public function orderOnline()
    {
        return view('frontend.order');
    }

    public function catering()
    {
        return view('frontend.catering');
    }

    public function recipes()
    {
        return view('frontend.recipes');
    }

    public function events()
    {
        return view('frontend.events');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function terms()
    {
        return view('frontend.terms');
    }
}