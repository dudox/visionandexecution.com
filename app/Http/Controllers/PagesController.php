<?php

namespace App\Http\Controllers;

use App\Notifications\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function sendContactForm()
    {

        Notification::route('mail', env('MAIL_FROM_ADDRESS'))->notify(new Consultation(request()->all()));
    }
}
