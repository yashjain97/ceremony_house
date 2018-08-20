<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use App\Mail\Campambassador;
use Illuminate\Http\Request;
use App\Register;
use Session;
use Carbon\Carbon;
use Image;
use App\Campus;
use App\Member;
use Illuminate\Validate\Rule;
class RegistersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Event Details";
      return view('event_details')->with('title',$title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $this->validate(request(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'father_name'=>'required',
            'mother_name'=>'required',
            'event'=>'required',
            'agecategory'=>'required',
            'location'=>'required',
            'date_of_birth'=>'required',
            'email'=>'required |email',
            'phone'=>'required | min:10',
            'whatsappNo'=>'required | min:10',
            'howmany'=>'required',
            'identification_id'=>'required',
            'photo_id'=>'required'
        ]);
        
        
        $email=$request->email;
        

        $data=Register::where('email','=',$email)->where('event',$request->event)->get();
        if(sizeof($data)>0){
            session()->flash('message','User Already Registered !');
            }
        else{
        
        $register= new Register;
        $register->first_name=$request->first_name;
        $register->last_name=$request->last_name;
        $register->father_name=$request->father_name;
        $register->mother_name=$request->mother_name;
        $register->event=$request->event;
        $register->agecategory=$request->agecategory;
        $register->location=$request->location;
        $register->date_of_birth=$request->date_of_birth;
        $register->whatsappNo=$request->whatsappNo;
        $register->howmany=$request->howmany;
        $register->email=$request->email;
        $register->phone=$request->phone;
        $num=$request->_token;
        
        $register->registrationId='HUNAR'.'-'.substr($register->event,0,3).substr($register->first_name,0,3).substr($num,8,3).substr($register->phone,7,10);
        
        if($request->hasFile('photo_id')){
            $image=$request->file('photo_id');
    
            $filename=time(). "." . $image->getClientOriginalExtension();
            $location=public_path('images/'.$filename);
            
            Image::make($image)->save($location);
            $register->photo_id=$filename;
        }
        if($request->hasFile('identification_id')){
            $image=$request->file('identification_id');
            $filename=time(). "." . $image->getClientOriginalExtension();
            $location=public_path('images/'.$filename);
            Image::make($image)->save($location);
            $register->identification_id=$filename;
        }
        
        //dd($request->input('name'));
        if(!$num=$request->name[0]==null){
            $member=new Member;
            $num=count($request->input('name'));
             for($i=0;$i<$num;$i++){
              $memname[$i]=$request->name[$i];
              $memdob[$i]=$request->dob[$i];
                        }
            for($i=$num;$i<10;$i++){
              $memname[$i]=null;
              $memdob[$i]=null;
          }

            $member->member1=$request->first_name;
        
            $member->memdob1=$request->date_of_birth;
            $member->member2=$memname[0] ;   
           $member->memdob2=$memdob[0];
            $member->member3=$memname[1];
            $member->memdob3=$memdob[1];
            $member->member4=$memname[2] ;   
            $member->memdob4=$memdob[2];
             $member->member5=$memname[3];
             $member->memdob5=$memdob[3];
             $member->member6=$memname[4] ;   
             $member->memdob6=$memdob[5];
              $member->member7=$memname[6];
              $member->memdob7=$memdob[6];
              $member->member8=$memname[7] ;   
              $member->memdob8=$memdob[7];
               $member->member9=$memname[8];
               $member->memdob9=$memdob[8];
               $member->member10=$memname[9] ;   
               $member->memdob10=$memdob[9];
              

    
            $member->save();
      
        }
       
        session()->flash('message','Registration Successful !');

        //$smend=new Register();
        //$smend->smssend($request);
        

        \Mail::send(new sendMail());
       $register->save();
        }
       
       return view('/register1');
        
    }

    public function store1(Request $request)
    {
    
         $this->validate(request(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'father_name'=>'required',
            'mother_name'=>'required',
            'institution'=>'required',
            'location'=>'required',
            'date_of_birth'=>'required',
            'email'=>'required |email',
            'phone'=>'required | min:10',
            'whatsappNo'=>'required | min:10',
           'identification_id'=>'required',
            'photo_id'=>'required'
        ]);
        
         $email=$request->email;
        $data=Register::where('email','=',$email)->get();
        if(sizeof($data)>0){
            session()->flash('message','You are already Registered !');
            }
        else{
            
        $register= new Campus;
        $register->first_name=$request->first_name;
        $register->last_name=$request->last_name;
       
        $register->father_name=$request->father_name;
        $register->mother_name=$request->mother_name;
        $register->institution=$request->institution;
        $register->location=$request->location;
        $register->date_of_birth=$request->date_of_birth;
        $register->whatsappNo=$request->whatsappNo;
       
        $register->email=$request->email;
        $register->phone=$request->phone;
        $num=$request->_token;
        
        $register->registrationId='HUNAR'.'-'.substr($register->institution,0,3).substr($register->first_name,0,3).substr($num,8,3).substr($register->phone,7,10);
        
        if($request->hasFile('photo_id')){
            $image=$request->file('photo_id');
    
            $filename=time(). "." . $image->getClientOriginalExtension();
            $location=public_path('images/'.$filename);
            
            Image::make($image)->save($location);
            $register->photo_id=$filename;
        }
        if($request->hasFile('identification_id')){
            $image=$request->file('identification_id');
            $filename=time(). "." . $image->getClientOriginalExtension();
            $location=public_path('images/'.$filename);
            Image::make($image)->save($location);
            $register->identification_id=$filename;
        }
        
            $register->save();
              
        session()->flash('message','You are Registered as A Campus Ambassador !');

        \Mail::send(new Campambassador());
    
        }
        return view('/campus_ambb');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function register1(){
        $title="Event Dance";
        return view('register1')->with('title',$title);
    }
    public function event_model(){
        $title="Event Model";
        return view('event_modelling')->with('title',$title);
    }
    public function event_sing(){
        $title="Event Sing";
        return view('event_singing')->with('title',$title);
    }
}
