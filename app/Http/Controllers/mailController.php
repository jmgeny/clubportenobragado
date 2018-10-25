<?php

namespace Porteno\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Porteno\mail\newMail;

class mailController extends Controller
{
        public function send() 
    {
		 Mail::send(new newMail());
		 return back();
    }
}
