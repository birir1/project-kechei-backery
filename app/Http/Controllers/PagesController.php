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

    public function FAQs()
    {
        return view('frontend.FAQs');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function terms()
    {
        return view('frontend.terms');
    }

    public function menu()
    {
        return view('frontend.menu');
    }

    public function feedback()
    {
        return view('frontend.feedback');
    }

    public function ourhistory()
    {
        return view('frontend.ourhistory');
    }

    public function bakingtips()
    {
        return view('frontend.bakingtips');
    }

    public function breads()
    {
        return view('frontend.breads');
    }

    public function pastries()
    {
        return view('frontend.pastries');
    }

    public function specials()
    {
        return view('frontend.specials');
    }

    public function businessevents()
    {
        return view('frontend.businessevents');
    }

    public function collaborativecatering()
    {
        return view('frontend.collaborativecatering');
    }
}