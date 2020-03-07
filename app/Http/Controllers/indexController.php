<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view('index')->with('description', 'Moderna - Главная страница')
            ->with('title', 'Moderna - Главная страница');
    }
}
