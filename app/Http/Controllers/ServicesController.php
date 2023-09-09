<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('pages.services.index');
    }

    public function technology_commercialization()
    {
        return view('pages.services.technology-commercialization');
    }

    public function strategic_growth()
    {
        return view('pages.services.strategic-growth');
    }

    public function innovation_management()
    {
        return view('pages.services.innovation-management');
    }

    public function voice_of_the_customer()
    {
        return view('pages.services.voice-of-the-customer');
    }

    public function software_development()
    {
        return view('pages.services.software-development');
    }
}
