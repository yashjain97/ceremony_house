@section('title',$title)
@extends('layouts.master')


	<!-- banner pages -->
	
@section('content')
	<div class="page-heading">
	@if($flash=session('message'))
	<div style="float:right;" class="alert alert-success right" role="alert">{{$flash}}</div>@endif
	<img src="./images/modelling_large.jpg" class="img-reponsive" alt="" style="opacity: 0.8;">
		

		
	</div>

<div id="main">
		<div class="entry-content">
			<!-- single event3 -->
			<div class="entry-single-event3">
				<div class="container">
					<h1>Modelling</h1>
					<div class="col-md-9">
						<div class="entry-tabs" role="tabpanel">
							<div class="tab-content">
								<div role="tabpanel" class="entry-tabs-content tab-pane animated zoomIn active" id="tab-event1">
									<p>Modelling Audition and online Registration for HUNAR are now open officially for all young girls and guys to find the young talents to the fashion and glamour industry. It is a beauty pageant in Uttar Pradesh that is annually organised by the Ceremony House.
Auditions will conduct across the state in 7 cities including Raebareli, Kanpur, Gorakhpur, Lucknow, Varanasi etc. to find the next top model. This is the best and perfect platform for you to make your career in Modelling and fashion industries. So Register Now.!!
</p>
								
								</div>
							</div>

						</div>
						<!-- pricing table home 5 extend pricing table -->
						<div class="main-pricing-table main5-pricing-table">

							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="pricing-detail">
										<h3>JUNIOR</h3>

										<ul>
											<li>
												<span>Rs. 599</span>
											</li>
											<li><strong>AGE </strong>: 5-14 yrs</li>
											<li>ROUNDS to reach FINALE : 3 </li>
											<li><strong>LOCATIONS </strong>: <br><br>Allahabad, Lucknow , Kanpur ,Raebareley ,Gorakhpur,Varanasi</li>
											
										</ul>


										<a href="#" class="pricing-buy">register now</a>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="pricing-detail">
										<h3>SENIOR</h3>

										<ul>
											<li>
												<span>Rs. 599</span>
											</li>
											<li><strong>AGE</strong> : 15-30 yrs</li>
											<li>ROUNDS to reach FINALE : 3 </li>
											<li><strong>LOCATIONS</strong> :<br><br>
												 Allahabad, Lucknow , Kanpur ,Raebareley ,Gorakhpur,Varanasi</li>
											
										</ul>


										<a href="#" class="pricing-buy">register now</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="prize-img">
										<img src="images/model-02.jpg" alt="">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="prize-img">
										<img src="images/model-02.jpg" alt="">
									</div>
								</div>
							</div>
						</div>


					</div>

					<div class="col-md-3">
						<!-- event detail event3 -->
						<div class="event-details-event3">
							<h3>event details</h3>
							<ul>
								<li>
									<span>
										<i class="fa fa-calendar-check-o" aria-hidden="true"></i> Start Time:</span> 8:00, Oct 12, 2017</li>
								<li>
									<span>
										<i class="fa fa-calendar-times-o" aria-hidden="true"></i> Finish Time:</span> 17:00, Oct 14, 2017</li>
								<li>
									<span>
										<i class="fa fa-map-marker" aria-hidden="true"></i> Location:</span> New York, USA</li>
								<li>
									<span>
										<i class="fa fa-university" aria-hidden="true"></i> Venue:</span> Sparta Plaza Hotel</li>
								<!-- <li><span><i class="fa fa-key" aria-hidden="true"></i> Organizer:</span> The World Bank</li>
							<li><span><i class="fa fa-folder-open" aria-hidden="true"></i> Category:</span> Business</li>
							<li><span><i class="fa fa-street-view" aria-hidden="true"></i> Seats:</span> 1000 Seats</li> -->
								<li>
									<span>
										<i class="fa fa-phone" aria-hidden="true"></i> Phone:</span> (0452) 452 357 9</li>
								<li>
									<span>
										<i class="fa fa-envelope" aria-hidden="true"></i> Email:</span> info@unievent.com</li>
							</ul>
						</div>

						<!-- register event3 -->
						<div class="entry-register-now-event3">
							<div class="frm-register">
								<!-- <h3>register now</h3> -->
								<!-- <form class="frm-res" action="https://html.univertheme.com/unievent/action.php" method="post">
	    						<input type="text" placeholder="Your Full Name" class="fullname">
	    						<input type="email" placeholder="Your Email" class="email">
	    						<select name="ticket" class="sl-ticket">
	    							<option>Ticket 1</option>
	    							<option>Ticket 2</option>
	    							<option>Ticket 3</option>
	    						</select>

	    						<button class="btn-register">register</button>
	    					</form> -->
								<button class="btn-register" data-toggle="modal" data-target="#registerModal">register</button>
								<div class="overlay"></div>
							</div>
						</div>
						<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 999999999">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<h4 class="modal-title h4 text-center text-uppercase" id="myModalLabel">Registration Form</h4>
									</div>
									<div class="modal-body">
										<p>* Every Field is mandatory to be filled</p>
										<form action="{{route('register.store')}}" method="post" name="form1" enctype="multipart/form-data">
											{{csrf_field()}}
											<div class="form-group{{$errors->has('name')}}">
												<label>Name</label>
												<input type="text" placeholder="Name" name="name" class="form-control1 form-control" id="name" >
											@if($errors->has('name'))
												<span class="help-block">
												{{$errors->first('name')}}
												</span>
												@endif
											</div>
											<div class="form-group{{$errors->has('guardian_name')}}">
												<label>Guardian Name</label>
												<input type="text" placeholder="Mother/Father/Guardian Name" name="guardian_name" class="form-control1 form-control" id="gname" >
												@if($errors->has('guardian_name'))
												<span class="help-block">
												{{$errors->first('guardian_name')}}
												</span>
												@endif
											</div>
											<div class="form-group{{$errors->has('photo_id')}}">
												<label>Your Photo</label>
												<input type="file" placeholder="Upload Your Photo" name="photo_id" class="form-control1 form-control" id="gname" >
												@if($errors->has('photo_id'))
												<span class="help-block">
												{{$errors->first('photo_id')}}
												</span>
												@endif
											</div>
											<div class="form-group{{$errors->has('identification_id')}}">
												<label>Your Identification Id</label>
												<input type="file" placeholder="Upload Your Identificattion id" name="identification_id" class="form-control1 form-control" id="gname" >
												@if($errors->has('identification_id'))
												<span class="help-block">
												{{$errors->first('identification_id')}}
												</span>
												@endif
											</div>
											<div class="form-group{{$errors->has('event')}}">
												<label>Event Name</label>
												<select type="text" name="event" class="form-control1 form-control" >
													<option selected disabled>Select Participation Event</option>
													<option>Dance</option>
													<option>Music</option>
													<option>Modeling</option>
												</select>
												@if($errors->has('event'))
												<span class="help-block">
												{{$errors->first('event')}}
												</span>
												@endif
											</div>
											<div class="form-group{{$errors->has('agecategory')}}">
												<label>Age Category</label>
												<select type="text" name="agecategory" class="form-control1 form-control" >
													<option selected disabled>Select Participation Category</option>
													<option>Junior</option>
													<option>Senior</option>
												</select>
												@if($errors->has('agecategory'))
												<span class="help-block">
												{{$errors->first('agecategory')}}
												</span>
												@endif
											</div>
											<div class="form-group{{$errors->has('location')}}">
													<label>Location</label>
												<select type="text" name="location" class="form-control1 form-control sl1" >
													<option selected disabled>Select Venue</option>
													<option>LUCKNOW</option>
													<option>RAEBARELI</option>
													<option>KANPUR</option>
													<option>ALLAHABAD</option>
													<option>GORAKHPUR</option>
													<option>VARANASI</option>
												</select>
												@if($errors->has('location'))
												<span class="help-block">
												{{$errors->first('location')}}
												</span>
												@endif
											</div>
											<div class="form-group{{$errors->has('pincode')}}">
												<label>Pin Code</label>
												<input type="text" placeholder="Zip code" name="pincode" class="form-control1 form-control" id="zip" >
												@if($errors->has('pincode'))
												<span class="help-block">
												{{$errors->first('pincode')}}
												</span>
												@endif
											</div>
											<div class="form-group{{$errors->has('email')}}">
												<label>Email*</label>
												<input type="email" placeholder="email" name="email" class="form-control1 form-control" id="email" >
												@if($errors->has('email'))
												<span class="help-block">
												{{$errors->first('email')}}
												</span>
												@endif
											</div>
											<div class="form-group{{$errors->has('phone')}}">
												<label>Phone</label>
												<input type="phone" name="phone" placeholder="(Dial-code)-(10 digit number)" class="form-control1 form-control" id="phone" >
												@if($errors->has('phone'))
												<span class="help-block">
												{{$errors->first('phone')}}
												</span>
												@endif
											</div>
											<input type="submit" value="register" name="register" class="btn btn-primary btn-block text-uppercase">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection


	