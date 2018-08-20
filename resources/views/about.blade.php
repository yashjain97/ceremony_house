@section('title',$title)
@extends('layouts.master')
	<!-- banner pages -->
	@section('content')
	<div class="page-heading">
		
		<img src="./images/about-ceremony.jpeg" class="img-reponsive" alt="">
	</div>

	<div id="main">
		<div class="entry-content">
			<!-- who we are page -->
			<div class="page1-who-we-are">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="page1-who-we-are-text">
								<h2>What We Do ?</h2>

								<p>We are the coordinated effort behind the planning, organising and executing various events. This includes weddings,
									conferences and seminars, anniversaries, theme party etc. We create ideas, save your time and money and execute
									the plans very smoothly with best possible technology</p>

							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div id="vidwrap3" onclick="play3();" class="page1-who-we-are-video"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- core values page -->
			<div class="page1-core-values">
				<div class="container">
					<h2>past records</h2>

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="item">
								<i class="fa fa-signal" aria-hidden="true"></i>

								<h3>Registrations</h3>

								<p>The event received over 1000+ registrations last year in different categories.</p>
							</div>
						</div>


						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="item">
								<i class="fa fa-plane" aria-hidden="true"></i>

								<h3>Stagess</h3>

								<p>175 candidates qualified the auditions and were followed by Quarter-final and Semi-final rounds.</p>
							</div>
						</div>

						<!-- <div class="col-xs-12 col-sm-6 col-md-4">
							<div class="item">
								<i class="fa fa-trophy" aria-hidden="true"></i>

								<h3>constantle growing</h3>

								<p>>Pellentesque habitant morbi tristique senectusnetus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
							</div>
						</div> -->

						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="item">
								<i class="fa fa-dropbox" aria-hidden="true"></i>

								<h3>Voting</h3>

								<p>Final results of Grand Finale were declared through public voting.</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="item">
								<i class="fa fa-recycle" aria-hidden="true"></i>

								<h3>Celebrity Performance</h3>

								<p>Grand Finale included performances by reputed Bollywood and TV celebrities.</p>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="slider">
				<div class="row">
					<div class="col-md-5 hidden-xs hidden-sm">
						<img src="images/logo1.jpg" alt="" style="margin-top: 60px;">
					</div>
					<div class="col-md-7">
						<div class="text-center slide-itm">
							<h2 class="text-uppercase">company</h2>
							<p><span>Ceremony House</span> is recognized for the most sophisticated, innovative and memorable events in UP. Our team performs best and creates history, they're experts in every events like coventions, conferences, concerts, festivals, theme parties and different occassions.</p>
							<hr>
							<p><span>Ceremony House</span> has been a driving force behind some of the major Corporate, Institutional and Private events in UP. Ceremony House enjoys the honourable recognition for the most innovative and unforgettable events.</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5 hidden-xs hidden-sm">
						<img src="images/mission.jpg" alt="">
					</div>
					<div class="col-md-7">
						<div class="text-center slide-itm">
							<h2 class="text-uppercase">our mission</h2>
							<p>Uttar Pradesh has seen brilliant levels of talent from the rural and local cities. It has played a major role in the
								development of the country. Our mission is to provide a path for the hidden talent in our state whcih has not been
								recognised effectively. Every child may not get a chance to showcase their talent in the metropolitan cities but
								that should not be the end to their dreams. We in Uttar Pradesh, aim to bring forward the hidden talent of our very
								own artistic youth.</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5 hidden-xs hidden-sm">
						<img src="images/talent_show.jpg" alt="">
					</div>
					<div class="col-md-7">
						<div class="text-center slide-itm">
							<h2 class="text-uppercase">why a talent show</h2>
							<p>The spirit of all the competitors in a talent show is an unforgettable and once in a lifetime experience for all the students who aspire to be a part of Hunar. A talent hunt is a showcase where the studnets can display their non-academic talents and bewitch the audience by their spectre. A talent hunt is a great platform for any aspirer to build his confidence, gain courage and enhance your character in the filed of your talent, respectively.</p>
						</div>
					</div>
				</div>
			</div>


			<!-- our speakers -->
			<div class="main2-our-speakers">
				<h2>our team</h2>

				<div class="container">
					<div id="owl-speakers" class="owl-carousel owl-theme">
						<div class="item">
							<div class="person">
								<div class="avatar-person">
									<img src="images/person/person1.jpg" alt="">
								</div>

								<div class="all-box"></div>

								<div class="box">
									<ul>
										<li>
											<a href="#">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-google-plus" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<h3>
								<a href="#">thomas muller</a>
							</h3>
							<p>CEO - Apple Inc</p>
						</div>

						<div class="item">
							<div class="person">
								<div class="avatar-person">
									<img src="images/person/person2.jpg" alt="">
								</div>

								<div class="all-box"></div>

								<div class="box">
									<ul>
										<li>
											<a href="#">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-google-plus" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<h3>
								<a href="#">thomas muller</a>
							</h3>
							<p>CEO - Apple Inc</p>
						</div>

						<div class="item">
							<div class="person">
								<div class="avatar-person">
									<img src="images/person/person3.jpg" alt="">
								</div>

								<div class="all-box"></div>

								<div class="box">
									<ul>
										<li>
											<a href="#">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-google-plus" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<h3>
								<a href="#">thomas muller</a>
							</h3>
							<p>CEO - Apple Inc</p>
						</div>

						<div class="item">
							<div class="person">
								<div class="avatar-person">
									<img src="images/person/person4.jpg" alt="">
								</div>

								<div class="all-box"></div>

								<div class="box">
									<ul>
										<li>
											<a href="#">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-google-plus" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<h3>
								<a href="#">thomas muller</a>
							</h3>
							<p>CEO - Apple Inc</p>
						</div>
					</div>

					<div class="prev-speakers">
						<i class="fa fa-chevron-left" aria-hidden="true"></i>
					</div>
					<div class="next-speakers">
						<i class="fa fa-chevron-right" aria-hidden="true"></i>
					</div>
				</div>

			</div>

			<!-- advisory panel -->
			<div class="main3-adv">
					<div class="container">
						<h2>Advisory Panel</h2>
						<div class="owl-carousel owl-theme" id="owl-adv-panel">
							<div class="item">
								<img src="images/advisory/a.jpg" alt="">
								<div class="cap-name">
									<p>
										Name: Vivek Mishra <br>
										Designation: Choreographer 
									</p>
								</div>
							</div>
							<div class="item">
								<img src="images/advisory/g.jpg" alt="">
								<div class="cap-name">
									<p>
										Name: Amrit Sharma <br>
										Designation: Ramp Choreographer
									</p>
								</div>
							</div>
							<div class="item">
								<img src="images/advisory/t.jpg" alt="">
								<div class="cap-name">
									<p>
										Name: Tanmay Mukherjee <br>
										Designation: Drummer/Percussionist 
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- testimonials -->
			<div class="main2-testimonials">
				<div class="container">
					<h2>Celebrity Review</h2>

					<div class="icon-tes">
						<i class="fa fa-quote-left" aria-hidden="true"></i>
					</div>

					<div id="owl-testimonials" class="owl-carousel owl-theme">
						<div class="item">
							<div class="row">
								<div class="col-md-2">
									<div class="img-tes">
										<a href="#">
											<img src="/images/ankita.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-md-10">
									<div class="infor-tes">
										<p>Wow, I just updated my all social sites with a awesome experience in Raebareli, being the part of hunar is ultimate. Great talent from small city. Thanks for being so nice to me. High fives!.</p>
										<strong>
											<a href="#">Ankita Kapoor</a>
											<span> - Singer</span>
										</strong>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="row">
								<div class="col-md-2">
									<div class="img-tes">
										<a href="#">
											<img src="/images/parul.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-md-10">
									<div class="infor-tes">
										<p>I just wanted to share a quick note &amp; let yoy know that you guys do a really good job. I'm glad I decided to attend your show with you. It's really great opportunity to come to Raebareli for such a great show. I enjoyed a lot this talent show which you people organised for small city..</p>
										<strong>
											<a href="#">Parul Chauhan</a>
											<span> - TV Actress</span>
										</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-md-2">
									<div class="img-tes">
										<a href="#">
											<img src="/images/jay.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-md-10">
									<div class="infor-tes">
										<p>Nice show, nice talents, nice arrangements. Thanks for being so humble lovely city "Raebareli". HUNAR justified it's name.</p>
										<strong>
											<a href="#">Jay Prashar</a>
											<span> - TV Actor</span>
										</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-md-2">
									<div class="img-tes">
										<a href="#">
											<img src="/images/tanmay.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-md-10">
									<div class="infor-tes">
										<p>Outstanding work! These guys are awesome, manages wonderfully such a big event with a motive to encourage children &amp; youth for their talents recognition. Thanks for your invitation "Ceremony House". Love to be part of it.</p>
										<strong>
											<a href="#">Tanmay Mukherjee</a>
											<span> - Drummer &amp; Percussionist</span>
										</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-md-2">
									<div class="img-tes">
										<a href="#">
											<img src="/images/shrey.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-md-10">
									<div class="infor-tes">
										<p>There's been a natural adaption of the platfomr with no training whatsoever participants immediately see the enefit to themselves, to their teams, and to the company as a whole. 
						<br>
						Great Show, Deserving Winners.
						<br></p>
										<strong>
											<a href="#">Shrey Khanna</a>
											<span> - Dancer, Choreographer </span>
										</strong>
									</div>
								</div>
							</div>
						</div>

						<!-- <div class="item">
				    	<div class="row">
				    		<div class="col-md-2">
				    			<div class="img-tes">
						    		<a href="#"><img src="images/testimonials.jpg" alt=""></a>
						    	</div>
				    		</div>
				    		<div class="col-md-10">
				    			<div class="infor-tes">
									<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisisit amet.</p>
									<strong><a href="#">admin smith</a><span> - CEO, Apple Inc</span></strong>
								</div>
				    		</div>
				    	</div>			
				    </div> -->
					</div>
				</div>
			</div>

			<!-- linefix -->
			<!-- <div class="linefix-page1"></div> -->

			<!-- subscribe newsletter -->
			<!-- <div class="main-subscribe-newsletter">
			<h2>Subscribe For Newsletter</h2>

			<form action="https://html.univertheme.com/unievent/action.php" class="frm-sub">
				<div class="input-sub">
					<input type="text" placeholder="Your email address">

					<button class="btn-sub">Subscribe</button>
				</div>
			
			</form>
		</div> -->

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
			</div>
			
		</div> -->
		</div>
	</div>

@endsection

