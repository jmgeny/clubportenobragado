<?php

namespace Porteno\Http\Controllers;

use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function patin()
    {
    	return view('actividades.patin');
    }

    public function funcional()
    {
    	return view('actividades.funcional');
    }

    public function adultos()
    {
    	return view('actividades.adultos');
    }

    public function eventos()
    {
    	return view('actividades.eventos');
    }

    public function futsal()
    {
    	return view('actividades.futsal');
    }

    public function tela()
    {
    	return view('actividades.tela');
    }

    public function gym()
    {
    	return view('actividades.gym');
    }

    public function especial()
    {
    	return view('actividades.especial');
    }

    public function taekwondo()
    {
        return view('actividades.taekwondo');
    }    

}
