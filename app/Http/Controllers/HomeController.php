<?php

namespace App\Http\Controllers;

use App\Pai;
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
            ->with('location', 'inicio');
    }

    public function inicio()
    {
        $paises = Pai::all()->pluck('nombre', 'id');
        return view('welcome.index')
            ->with('location', 'inicio')
            ->with('paises', $paises);
    }

    public function contenido()
    {
        $paises = Pai::all()->pluck('nombre', 'id');
        return view('welcome.contenido')
            ->with('location', 'contenido')
            ->with('paises', $paises);
    }

    public function galeria()
    {
        $paises = Pai::all()->pluck('nombre', 'id');
        return view('welcome.galeria')
            ->with('location', 'galeria')
            ->with('paises', $paises);
    }

    public function preguntas()
    {
        $paises = Pai::all()->pluck('nombre', 'id');
        return view('welcome.preguntas_frecuentes')
            ->with('location', 'preguntas')
            ->with('paises', $paises);
    }


}
