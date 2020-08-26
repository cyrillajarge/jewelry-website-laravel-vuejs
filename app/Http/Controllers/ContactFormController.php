<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request) {
        
        // dd($request);
        
        $this->validate($request, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'regex:/(0)[0-9]{9}$/',
            'message' => 'required',
            'file' => 'mimes:jpeg,png,pdf'
        ]);


        /*
          Add mail functionality here.
        */
        Mail::to( "test@gmail.com" )->send( new ContactEmail($request->only(['firstname', 'lastname', 'email', 'phone', 'message', 'file'])) );

        return response()->json( ['sent' => true], 200);
    }
}