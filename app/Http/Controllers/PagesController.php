<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index()
    {
      
           return view('pages.welcome');
      
    }

    public function about()
    {
      
           return view('pages.about');
      
    }

    public function contact()
    {
      
           return view('pages.contact');
      
    }

    public function blog()
    {
      
           return view('pages.blog');
      
    }


    public function donate()
    {
      
           return view('pages.donate');
      
    }


    public function faq()
    {
      
           return view('pages.faq');
      
    }
     

    public function service()
    {
      
           return view('pages.service');
      
    }


    public function team()
    {
      
           return view('pages.team');
      
    }


    public function testimonials()
    {
      
           return view('pages.testimonials');
      
    }


    public function volunteer()
    {
      
           return view('pages.volunteer');
      
    }
}
