<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TpController extends Controller
{
    public function index()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function contact()
    {
        return view('contact');
    }

    public function formContact(Request $request)
    {

        return view('contact', ['data' => $request]);
    }
}
