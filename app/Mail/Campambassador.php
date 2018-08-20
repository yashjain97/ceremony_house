<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Campambassador extends Mailable
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
    public function build(Request $request)
    {
        $num1=$request->input('_token');
        $data='HUNAR'.'-'.substr($request->input('institution'),0,5).substr($request->input('first_name'),0,3).substr($num1,8,3).substr($request->input('phone'),7,10);
        
        return $this->view('email.campusmail',['bodyMessage'=>'Thanks For Your Registration','first_name'=>$request->first_name,'institution'=>$request->input('institution'),'registrationId'=>$data])->from('contact@hunartalenthunt.com')->to($request->email)->cc('contact@hunartalenthunt.com')->subject('Campus Ambassador');
        
    }
}
