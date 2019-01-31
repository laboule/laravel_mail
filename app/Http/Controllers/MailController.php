<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use App\Jobs\ProcessEmail;

class MailController extends Controller
{
    public function send(Request $request)
    {
    	$id = $request->id;
    	
		
        
		ProcessEmail::dispatch($id)->delay(now()->addSeconds(5));


        return (new OrderShipped($id))->render();

    }
}
