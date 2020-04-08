<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.somme-nous');
    }
    public function mission()
    {
        return view('about.mission');
    }
    public function defference()
    {
        return view('about.defference');
    }
    public function egagement()
    {
        return view('about.egagement');
    }



}
