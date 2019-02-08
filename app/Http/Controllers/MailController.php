<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use App\Jobs\ProcessEmail;

class MailController extends Controller
{
    public function send(Request $request)
    {
    	$id = $request->id ?? 0;
    	
		
        // dispatch job to queue
		ProcessEmail::dispatch($id)->delay(now()->addSeconds(5));

		// get a visual output of the sent mail 
        return (new OrderShipped($id))->render();

    }
}
