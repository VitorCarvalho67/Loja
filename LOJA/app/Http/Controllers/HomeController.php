<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Método para a página inicial
    public function index()
    {
        // Retorna a view home.blade.php
        return view('home');
    }
}

?>