<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    
     
    
    public function __construct()
    {
    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {   
        if(!$num=$request->name[0]==null){
        $num=count($request->input('name'));
        for($i=0;$i<$num;$i++){
         $memname[$i]=$request->name[$i];
        
        } for($i=$num;$i<10;$i++){
         $memname[$i]=null;
        
     }
     $num1=$request->input('_token');
     $amount=299;
     $data='HUNAR'.'-'.substr($request->input('event'),0,3).substr($request->input('first_name'),0,3).substr($num1,8,3).substr($request->input('phone'),7,10);
     $team=$memname[0].' '.$memname[1].' '.$memname[2].' '.$memname[3].' '.$memname[4].' '.$memname[5].' '.$memname[6].' '.$memname[7].' '.$memname[8].' '.$memname[9];

     return $this->view('email.registermail',['bodyMessage'=>'Thanks For Your Registration','first_name'=>$request->first_name,'event'=>$request->input('event'),'registrationId'=>$data,'team'=>$team,'amount'=>$amount])->from('contact@hunartalenthunt.com')->to($request->email)->cc('contact@hunartalenthunt.com')->subject($request->event);

    }
     else{
        $num1=$request->input('_token');
        $data='HUNAR'.'-'.substr($request->input('event'),0,3).substr($request->input('first_name'),0,3).substr($num1,8,3).substr($request->input('phone'),7,10);
        $amount=599;
        return $this->view('email.registermail',['bodyMessage'=>'Thanks For Your Registration','first_name'=>$request->first_name,'event'=>$request->input('event'),'registrationId'=>$data,'amount'=>$amount,'team'=>false])->from('contact@hunartalenthunt.com')->to($request->email)->cc('contact@hunartalenthunt.com')->subject($request->event);
        }
    }
}
