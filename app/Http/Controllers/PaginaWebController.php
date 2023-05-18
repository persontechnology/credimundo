<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaWebController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function ahorros()
    {
        return view('ahorros');
    }

    public function creditos()
    {
        return view('creditos');
    }

    public function inversiones()
    {
        return view('inversiones');
    }

    public function nosotros()
    {
        return view('nosotros');
    }
    public function contacto()
    {
        return view('contacto');
    }
    
}
