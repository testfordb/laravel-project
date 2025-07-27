<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function features()
    {
        return view('features');
    }

    public function testimonials()
    {
        return view('testimonials');
    }

    public function teamMembers()
    {
        return view('team-members');
    }

    public function services()
    {
        return view('services');
    }

    public function skills()
    {
        return view('skills');
    }

    public function workSteps()
    {
        return view('work-steps');
    }

    public function events()
    {
        return view('events');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function videos()
    {
        return view('videos');
    }

    public function stats()
    {
        return view('stats');
    }

    public function discount()
    {
        return view('discount');
    }
}