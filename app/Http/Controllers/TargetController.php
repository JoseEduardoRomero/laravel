<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function index(){
        return view('index');
        //se le debe de poner view para que nos regrese la vista
    }
    public function create(){
        return view('create');
    }
    public function edit(){
        return view('edit');
    }
}
