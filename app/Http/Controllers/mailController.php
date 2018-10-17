<?php

namespace Porteno\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Porteno\mail\sendMail;

class mailController extends Controller
{
        public function send() 
    {
		 Mail::send(new sendMail());
    }
}
