<?php

namespace Porteno\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;
use Porteno\Member;

class newMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {
        // $socio = Member::where('mail', $request->email)->get();
        // if ($socio)
        // {
        //     dd($request);
        // } 
        // else
        // {
        //     dd($socio);
        // }
        $socio = Member::firstOrCreate(['mail'      =>$request->email, 
                                        'apellido'  =>$request->apellido,
                                        'nombre'    =>$request->nombre]);
        $socio->save();
// $users = DB::table('users')->where('votes', 100)->get();
        return $this->markdown('email',
            [   'msg'=>$request->mensaje,
                'nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'email'=>$request->email
            ])->to('porteno.bragado@gmail.com');        
    }
}
