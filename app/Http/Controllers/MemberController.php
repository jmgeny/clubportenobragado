<?php

namespace Porteno\Http\Controllers;

use Illuminate\Http\Request;
use Porteno\Member;
use Illuminate\Support\Facades\Storage;
// use Porteno\Member_sport;
use Porteno\Sport;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->nombre;
        $apell = $request->apellido;
        $mail = $request->mail;
        $estado = $request->estado;

        $members = Member::orderBy('apellido','ASC')
                    ->name($name)
                    ->apell($apell)
                    ->mail($mail)
                    ->estado($estado)
                    ->paginate('7');

        return view('member.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $socio = new Member;
        $socio->nombre   = $request->nombre;
        $socio->apellido = $request->apellido;
        $socio->dni     = $request->dni;
        $socio->phone     = $request->phone;        
        $socio->nacimiento     = $request->nacimiento;
        $socio->ingreso     = $request->ingreso;
        $socio->address     = $request->address;
        $socio->city_id     = $request->city_id;
        $socio->estado     = $request->estado;
        $socio->mail     = $request->mail;

//imagen
        if($request->file('avatar')) {

            // Necesito el archivo en una variable esta vez
            $file = $request->file("avatar");
            // Armo un nombre único para este archivo
            $name = $request->apellido . $request->nombre . "." . $file->extension();
            // carpeta en la que voy a guardar la imagen
            $folder = "image";

            $path = $file->storeAs($folder, $name);
            $socio->avatar = $path;
        }          

        $socio->save();

        // $member = Member::findOrFail($request->$socio->id);
        $socio->sports()->attach($request->sport_id);        

        return redirect()->route('member.index')
                         ->with('info','El Socio fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);

        return view('member.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);

        return view('member.edit',compact('member'));
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
        $member = Member::find($id);

        $member->nombre     = $request->nombre;
        $member->apellido   = $request->apellido;
        $member->mail       = $request->mail;
        $member->dni        = $request->dni;
        $member->phone      = $request->phone;
        $member->nacimiento = $request->nacimiento;
        $member->ingreso    = $request->ingreso;
        $member->address    = $request->address;
        $member->city_id    = $request->city_id;
        $member->estado     = $request->estado;

//imagen
        if($request->file('avatar')) {

            // Necesito el archivo en una variable esta vez
            $file = $request->file("avatar");
            // Armo un nombre único para este archivo
            $name = $request->apellido . $request->nombre . "." . $file->extension();
            // carpeta en la que voy a guardar la imagen
            $folder = "avatars";

            $path = $file->storeAs($folder, $name);
            $member->avatar = $path;
        }         

        $member->save();

        return redirect()->route('member.index')
                         ->with('info','El Socio fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socio = Member::findOrFail($id);
        $socio->estado='0';
        $socio->update();
        
        return back();  
    }

}
