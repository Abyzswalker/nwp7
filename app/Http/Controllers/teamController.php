<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teamController extends Controller
{
    public function index(){
        return view('team')->with('description', 'Moderna - Команда')
            ->with('title', 'Moderna - Команда');
    }
}
