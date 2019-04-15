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
                    ->paginate('20');

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
        $member = Member::create($request);

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
        $member = Member::findOrFail($id);

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
        $member = Member::findOrFail($id);
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
        $member = Member::findOrFail($id);

        $member->update($request->all());
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

        if($socio->estado === 1)
          $socio->estado='0';
          else 
          $socio->estado='1';        
        
        $socio->update();
        
        return back();  
    }

}
