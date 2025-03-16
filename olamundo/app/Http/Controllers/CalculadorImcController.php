<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadorImcController extends Controller
{
    public function index() {
        return view('calculadorImc');
    }
}
