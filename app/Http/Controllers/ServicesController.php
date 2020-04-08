<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function residentiel()
    {
        return view('services.residentiel');
    }
    public function commercial()
    {
        return view('services.industriel');
    }
    public function aide()
    {
        return view('services.aide');
    }
    public function accompagnement()
    {
        return view('services.accompagnement');
    }
    public function conciliation_fammille()
    {
        return view('services.conciliation');
    }
    public function peinture_bricolage()
    {
        return view('services.peinture');
    }
    public function jardinage()
    {
        return view('services.jardinage');
    }
    public function nettoyage()
    {
        return view('services.nettoyage');
    }
    public function contact()
    {
        return view('services.contact');
    }
}
