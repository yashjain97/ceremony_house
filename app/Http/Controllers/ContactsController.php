<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;

class ContactsController extends Controller
{
    public function contactus(Request $request){
        
        
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required | email',
           'bodyMessage'=>'required'
            ]);
    
        \Mail::send(new Contact());
        return view('contact');
    }
}
