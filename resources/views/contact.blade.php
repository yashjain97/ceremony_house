@section('title',$title)
@extends('layouts.master')

<!-- banner pages -->
<div class="page-heading">
	<h1 class="entry-title">Contact Us</h1>

	<ul class="entry-breadcrumb">
		<li><a href="#"></a></li>
		<li></li>
		<li><a href="#"></a></li>
	</ul>
</div>

<div id="main">
	<div class="entry-content">

	<!-- maps -->
	<!-- <div class="main-maps main2-maps">
		<div id="style-selector-control"  class="map-control">
	      <select id="style-selector" class="selector-control">
	        <option value="dark">Dark</option>
	        <option value="silver">Silver</option>
	        <option value="night">Night mode</option>
	        <option value="retro">Retro</option>
	        <option value="hiding" selected="selected">Hide features</option>
	      </select>
	    </div>
		<div id="map"></div>

		<div class="container">
			<div class="contact-maps">
				<h3>contact information</h3>

				<ul>
					<li>
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<p><span>address</span><br>45 Queen's Park Rd, Brighton, BN2 0GJ, UK</p>
					</li>
					<li>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<p><span>tel</span><br>(0486) 256 458 9</p> 
					</li>
					<li>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<p><span>email</span><br><a href="mailto:unievent@domain.com">unievent@domain.com</a></p>
					</li>
				</ul>

				<a href="#" class="btn-contact-us">contact us</a>
			</div>
		</div> -->
		
	</div>


<!-- contact pages pages3  extend contact pages pages2 -->
		<div class="entry-contact entry-contact2-page3">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3>Have A Question? Send Us</h3>

						<form id="frm-contact" name="form3" action="/contact" method="post">
								{{csrf_field()}}
							<input type="text" class="name"  name="name" placeholder="Your Name">
							<input type="text" class="email" name="email" placeholder="Your Email">
							<textarea id="txt-p" name="bodyMessage" placeholder="Your Question"></textarea>
							<button class="btn-contact" type="submit" name="contact" >SEND</button>	
						</form>
					</div>
					<div class="col-md-4">
						<h3>Contact</h3>

						<ul>
							<li>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<p><span>tel</span><br>09598882640</p>
							</li>
							<li>
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<p><span>email</span><br> hunar2k18@gmail.com</p>
							</li>
							<li>
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<p><span>phone</span><br> Near NISSAN MOTORS, LUCKNOW ROAD, RAEBARELI-229001</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


