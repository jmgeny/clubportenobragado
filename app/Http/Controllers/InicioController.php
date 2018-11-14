<?php

namespace Porteno\Http\Controllers;

use Illuminate\Http\Request;
use Porteno\Nota;

class InicioController extends Controller
{
    public function index() {

    	$notas = Nota::where('state',1)
    				->orderby('fecha','DES')
    				->paginate(6);
    	return view('index',compact('notas'));

    }
}
