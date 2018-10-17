<?php

namespace Porteno\Http\Controllers;

use Illuminate\Http\Request;
use Porteno\Member;
// use Porteno\Sport;

class MemberSportController extends Controller
{
    public function create()
    {
        return view('deportes.create');
    }

    public function store(Request $request)
    {
    	
        $member = Member::findOrFail($request->member_id);
        $member->sports()->attach($request->sport_id); //sync
        
    	return redirect()->route('member.index')->with('info','Fue agregado un deporte');
    }

    public function borrar(Request $request)
    {
        
        return 'BORRAR';
        // $member = Member::findOrFail($request->member_id);
        // $member->sports()->dettach($request->sport_id);
        
        // return redirect()->route('member.index')->with('info','Fue agregado un deporte');
    }    

}
