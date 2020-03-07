<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function index(){
        return view('services')->with('description', 'Moderna - Сервисы')
            ->with('title', 'Moderna - Сервисы');
    }
}
