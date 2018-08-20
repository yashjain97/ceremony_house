<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $fillable=['first_name','last_name','name2','dob2','name3','dob3','father_name','mother_name','agecategory','event','location','whatsappNo','email','phone','howmany','photo_id','identification_id','date_of_birth'];



    public function smssend( $request){
      
      $username = "jainy35@gmail.com";
      $hash = "63cd4b54da63830ced233c94bdb6d451a6d49aa6a3c3e864dc15ee502ee4c128";
  
      // Config variables. Consult http://api.textlocal.in/docs for more info.
      $test = "0";
  
      // Data for text message. This is the text message data.
      $sender = "TXTLCL"; // This is who the message appears to be from.
      $numbers = "91".$request->input('phone');
      $num=$request->input('_token');
      //Automated User Id 
      $message ='Thanks,'.$request->input('first_name').'for Your Registration in '.$request->input('event').'.Your Registration Id is : '.'HUNAR'.'-'.substr($request->input('event'),0,3).substr($request->input('name'),0,3).substr($num,8,3).substr($request->input('phone'),7,10).'For more details please contact 9917787010.With Regards Team Hunar';
      
      // 612 chars or less 
      // A single number or a comma-seperated list of numbers
      $message = urlencode($message);
      $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
      $ch = curl_init('http://api.textlocal.in/send/?');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch); 
      
    }    
}
