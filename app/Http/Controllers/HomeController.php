<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');
        return view('home')
            ->with('location', 'home');
    }

    public function inicio()
    {
        return view('welcome.index')
            ->with('location', 'inicio');
    }

    public function contenido()
    {
        return view('welcome.contenido')
            ->with('location', 'contenido');
    }

    public function galeria()
    {
        return view('welcome.galeria')
            ->with('location', 'galeria');
    }
    public function preguntas()
    {
        return view('welcome.preguntas_frecuentes')
            ->with('location', 'preguntas');
    }


}
