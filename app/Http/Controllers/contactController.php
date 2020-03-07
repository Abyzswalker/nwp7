<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(){
        return view('contact')->with('description', 'Moderna - Контакты')
            ->with('title', 'Moderna - Контакты');
    }
}
