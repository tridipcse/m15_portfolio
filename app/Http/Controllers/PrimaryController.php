<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimaryController extends Controller
{
    public function homePage(){
        $data = [
            'name'       => 'Tridip Sarkar',
            'profession' => 'Laravel Developer'
        ];
        return view('home', compact('data'));
    }

    public function aboutPage(){
        return view('about');
    }

    public function servicesPage(){
        return view('services');
    }

    public function portfolioPage(){
        return view('portfolio');
    }

    public function contactPage(){
        return view('contact');
    }
}
