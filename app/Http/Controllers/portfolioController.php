<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function index(){
        return view('portfolio')->with('description', 'Moderna - Портфолио')
            ->with('title', 'Moderna - Портфолио');
    }
}
