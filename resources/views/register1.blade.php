@extends('layouts.master')

@section('content')
<div class="form-frame">
<div class="container">
@if($flash=session('message'))
    <div style="float:right;" class="alert alert-success right" role="alert">{{$flash}}</div>@endif
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <form  id="frm" action="{{route('register.store')}}" method="post" name="form1" enctype="multipart/form-data">
    {{csrf_field()}}
			<h2>Registration Form <small></small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group{{$errors->has('first_name')}}">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                        @if($errors->has('first_name'))
												<span class="message">
												{{$errors->first('first_name')}}
												</span>
												@endif					
                    </div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group{{$errors->has('last_name')}}">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                        @if($errors->has('last_name'))
												<span class="message">
												{{$errors->first('last_name')}}
												</span>
												@endif					
                    </div>
				</div>
            </div>
            

            
          
         

<!-- copy of input fields group -->
        
			
          
            <div class="form-group{{$errors->has('father_name')}}">
				<input type="text" name="father_name" id="email" class="form-control input-lg" placeholder="Father's Name" tabindex="4">
                @if($errors->has('father_name'))
				<span class="message">
				{{$errors->first('father_name')}}
				</span>
				@endif
            </div>
            <div class="form-group{{$errors->has('mother_name')}}">
				<input type="text" name="mother_name" id="email" class="form-control input-lg" placeholder="Mother's Name" tabindex="4">
                @if($errors->has('mother_name'))
				<span class="message">
				{{$errors->first('mother_name')}}
				</span>
				@endif
            </div>
            <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group{{$errors->has('date_of_birth')}}">
                    <input type="date" name="date_of_birth" placeholder="Birth date" class="form-control input-lg" id="phone" >
                    @if($errors->has('date_of_birth'))
					<span class="message">
					{{$errors->first('date_of_birth')}}
					</span>
					@endif
                    </div>
				</div>
                <div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group{{$errors->has('whatsappNo')}}">
                    <input type="phone" name="whatsappNo" placeholder="WhatsApp No." class="form-control input-lg" id="phone" >
                    @if($errors->has('whatsappNo'))
				    <span class="message">
					{{$errors->first('whatsappNo')}}
					</span>
					@endif
                    </div>
				</div>
                </div>
                <div class="form-group{{$errors->has('event')}}">
            <select type="text" name="event" class="form-control input-lg" >
													<option selected disabled>Select Participation Event</option>
													<option>Dance</option>
													<option>Music</option>
													<option>Modeling</option>
												</select>
                                                @if($errors->has('event'))
												<span class="message">
												{{$errors->first('event')}}
												</span>
												@endif                                               
            </div>
             <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group{{$errors->has('agecategory')}}">
                    <select type="text" name="agecategory" class="form-control input-lg" >
						<option selected disabled>Category</option>
							<option>Junior</option>
							<option>Senior</option>
					</select>
						@if($errors->has('agecategory'))
						<span class="message">
						{{$errors->first('agecategory')}}
						</span>
						@endif			
                        </div>
				</div>
                <div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group{{$errors->has('howmany')}}">
                    <select type="text" name="howmany" class="form-control input-lg" >
					<option selected disabled>I am</option>
				    <option>Individual</option>
					<option>Duet</option>
					<option>Team</option>
													
					</select>		
                    @if($errors->has('howmany'))
					<span class="message">
					{{$errors->first('howmany')}}
					</span>
				    @endif				
                    </div>
				</div>
                
                
                </div>
			
                <div class="form-group fieldGroup">
                <div class="input-group">
                    <input type="text" name="name[]" class="form-control input-lg" placeholder="Enter Team Member Name"/>
                    <input type="date" name="dob[]" class="form-control input-lg" placeholder="Enter Team Member Date of Birth"/>
                    <div class="input-group-addon "> 
                        <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
                    </div>
                </div>
              </div>
          
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group{{$errors->has('phone')}}">
                    <input type="phone" name="phone" placeholder="(10 digit No.)" class="form-control input-lg" id="phone" >
					@if($errors->has('phone'))
						<span class="message">
						{{$errors->first('phone')}}
						</span>
						@endif
                    </div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group{{$errors->has('location')}}">
                    <select type="text" name="location" class="form-control input-lg" >
                    <option selected disabled>Select City</option>
						<option>LUCKNOW</option>
						<option>RAEBARELI</option>
						<option>KANPUR</option>
						<option>ALLAHABAD</option>
						<option>GORAKHPUR</option>
						<option>VARANASI</option>
					</select>		
                    @if($errors->has('location'))
						<span class="message">
					    {{$errors->first('location')}}
					    </span>
						@endif				
                    </div>												
				</div>
			</div><div class="form-group{{$errors->has('email')}}">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="example@abc.com" tabindex="4">
                @if($errors->has('email'))
				<span class="message">
				{{$errors->first('email')}}
				</span>
				@endif
            </div>
     
           
                <div class="form-group{{$errors->has('photo_id')}}">
                <label>Upload Your Photo</label>
				<input type="file" name="photo_id" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
                @if($errors->has('identification_id'))
												<span class="message">
												{{$errors->first('identification_id')}}
												</span>
												@endif
            </div>
            <div class="form-group{{$errors->has('identification_id')}}">
            <label>Your Identification Id</label>
				<input type="file" name="identification_id" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
                @if($errors->has('identification_id'))
												<span class="message">
												{{$errors->first('identification_id')}}
												</span>
												@endif
            </div>

            <!-- copy of input feilds group -->
			<div class="form-group fieldGroupCopy" style="display: none;">
                <div class="input-group">
                    <input type="text" name="name[]" class="form-control input-lg" placeholder="Enter Team Member Name"/>
                    <input type="date" name="dob[]" class="form-control input-lg" placeholder="Enter  Team Memeber Date of Birth"/>
                    <div class="input-group-addon"> 
                        <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
                    </div>
                </div>
            </div>
          
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-12"><input type="submit" name="register" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->

</div>
</div>
@endsection