<?php

namespace Porteno\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

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
        // return $this->markdown('email')->to('porteno.bragado@gmail.com');
        return $this->markdown('email',
            [   'msg'=>$request->mensaje,
                'nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'email'=>$request->email
            ])->to('porteno.bragado@gmail.com');        
    }
}
