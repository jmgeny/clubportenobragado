<?php

namespace Porteno\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Porteno\mail\newMail;
use Porteno\Http\Requests\MailRequest;

class mailController extends Controller
{
        public function send(MailRequest $request) 
    {
		 Mail::send(new newMail());
		 return back();
    }
}
