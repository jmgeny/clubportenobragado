<?php

namespace Porteno\Http\Controllers;

use Illuminate\Http\Request;
use Porteno\Nota;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::orderBy('fecha','DES')->paginate(24);
        return view('nota.index', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = new Nota;

        $nota->titulo = $request->titulo;
        $nota->descripcion = $request->descripcion;
        $nota->desarrollo = $request->desarrollo;
        $nota->fecha = $request->fecha;
        $nota->state = $request->state;

//imagen
        if($request->file('avatar')) {

            // Necesito el archivo en una variable esta vez
            $file = $request->file("avatar");
            // Armo un nombre único para este archivo
            $name = $request->id . $request->fecha . "." . $file->extension();
            // carpeta en la que voy a guardar la imagen
            $folder = "notas";

            $path = $file->storeAs($folder, $name);
            $nota->avatar = $path;
        }

        $nota->save();

        return redirect()->route('nota.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $nota = Nota::find($id);
        return view('nota.show', compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = Nota::find($id);
        return view('nota.edit', compact('nota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
// dd($request->titulo);
        $nota = Nota::find($id);

        $nota->titulo = $request->titulo;
        $nota->descripcion = $request->descripcion;
        $nota->desarrollo = $request->desarrollo;
        $nota->fecha = $request->fecha;
        $nota->state = $request->state;

//imagen
        if($request->file('avatar')) {

            // Necesito el archivo en una variable esta vez
            $file = $request->file("avatar");
            // Armo un nombre único para este archivo
            $name = $request->id . $request->fecha . "." . $file->extension();
            // carpeta en la que voy a guardar la imagen
            $folder = "notas";

            $path = $file->storeAs($folder, $name);
            $nota->avatar = $path;
        }

        $nota->save();

        return redirect()->route('nota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
