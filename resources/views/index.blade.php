@section('title',$title)
@extends('layouts.master')

@section('content')
<div class="loadpage">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!-- slider home3 -->
	<div class="main3-slider">
		<div class="row">
			<div class="slider-main">
				<div class="col-xs-12">
					<img src="images/bnr.jpeg" alt="" class="img-them">
					<div class="row all-count">
						<div class="col-xs-12 col-sm-6 col-md-3 count-col">
							<div class="countup">
								<p>
									<span class="countup2" id="days"></span>
									<br> days</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 count-col">
							<div class="countup">
								<p>
									<span class="countup2" id="hour"></span>
									<br> hours</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 count-col">
							<div class="countup">
								<p>
									<span class="countup2" id="minutes"></span>
									<br> minutes</p>
							</div>

						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 count-col">
							<div class="countup">
								<p>
									<span class="countup2" id="second"></span>
									<br> seconds</p>
							</div>
						</div>
					</div>
					<div class="show-text">

					</div>
					<div class="banner-content">
						<img src="images/logo2.png" alt="" class="org-img">
						<p class="org-pr">
							presents
						</p>
						<div class="banner-title">
							<img src="images/hunar_2018_logo.png" alt="" class="img-hunar">
						</div>
						<div class="css-chips">
							Lucknow
						</div>
						<div class="css-chips">
							Allahabad
						</div>
						<div class="css-chips">
							Raebareli
						</div>
						<div class="css-chips">
							Kanpur
						</div>
						<div class="css-chips">
							Gorakhpur
						</div>
						<div class="css-chips">
							Varanasi
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<img src="images/banner-slide2.jpeg" alt="" class="img-them">
					<div class="slide2-content">
						<div class="slide2-title">
							<h1 class="text-uppercase">
								<span>h</span><span>u</span><span>n</span><span>a</span><span>r</span>
								2018
							</h1>
						</div>
						<div class="btns">
							<a href="/register1" class="btn btn-style">
								Register As Participant
							</a>
							<a href="/coming_soon" class="btn btn-style">
								Register As Coordinator
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- event information home3 -->
	<div class="main3-event-information">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7 information-text-fix">
					<div class="row">
						<div class="event-information-text">
							<h2>hunar 2k18</h2>

							<p>The auditions for our programme, Hunar will be held in six different cities of Uttar Pradesh including Lucknow, Allahabad,
								Kanpur, Gorakhpur, Rae Bareli and Varanasi. The event is a talent hunt show fundamentally categorised into three
								categories of Dancing, Singing and Modelling. These categories will be further divided into two compact groups, the
								Junior Group and the Senior Group. The age restrictions for the junior group are between 5yrs to 14yrs and for the
								senior group will be 15yrs to 30yrs. The participants will be expected to qualify three major levels to reach the
								finale, the auditions , the quarter final and the semi finals. Except the auditions, all the levels will be held
								in the state capital, Lucknow. The grand finale will be held in late summer. There will be a press conference before
								the grand finale. The students will engage in a life enriching experience during their vacations. Online registrations
								will begin in the starting of summer. We would like to invite you to be a part of this enamouring event .The aspirants
								will learn about the culture of our state, the beauty and significance of their talents and showcase their talents
								in this magnificent talent show.
							</p>

							<ul>
								<li>
									<i class="fa fa-calendar" aria-hidden="true"></i>

									<p>
										<span>start time</span>
										<br> April 24, 2018</p>
								</li>
								<li>
									<i class="fa fa-map-marker" aria-hidden="true"></i>

									<p>
										<span>address</span>
										<br>Lucknow, Allahabad, Kanpur, Varanasi, Gorakhpur</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-5 information-video-fix">
					<div class="row">
						<div id="vidwrap" onclick="play();" class="event-information-video">
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>

	<!-- gallery2 home3 -->
	<div class="main3-gallery-home3">
		<div class="container">
			<h2>Events</h2>
			<div class="row margin">
				<div class="col-xs-10 col-sm-6 col-md-4">
					<div class="box-gal">
						<div class="img-gal">
							<img src="images/song.jpeg" alt="">
						</div>

						<div class="text-box">
							<a href="#">Singing</a>
							<div class="reg-details">
								<a href="{{url('/event_singing')}}" class="btn text-uppercase">Participate</a>
								<p>Everyone loves listening to song, while there are others who enjoy singing. If you are one of the later ones who are good in singing and wants to make a career in singing, you are in good luck my friend. HUNAR 2018 is here in your city.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-10 col-sm-6 col-md-4">
					<div class="box-gal">
						<div class="img-gal">
							<img src="images/dance2.jpg" alt="">
						</div>

						<div class="text-box">
							<a href="#">Dance</a>
							<div class="reg-details">
								<a href="{{url('/event_details')}}" class="btn text-uppercase">Participate</a>
								<p>HUNAR 2018 features a format where dancers from a variety of styles enter open auditions held in major cities of Uttar Pradesh to showcase their unique style and talents..</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-10 col-sm-6 col-md-4">
					<div class="box-gal">
						<div class="img-gal">
							<img src="images/mdl.jpeg" alt="">
						</div>

						<div class="text-box">
							<a href="#">Modelling</a>
							<div class="reg-details">
								<a href="{{url('/event_modelling')}}" class="btn text-uppercase">Participate</a>
								<p>Modelling Audition and online Registration for HUNAR are now open officially for all young girls and guys to find the young talents to the fashion and glamour industry. It is a beauty pageant in Uttar Pradesh that is annually organised by the Ceremony House.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- ticket prices home3 -->
	<div class="main-pricing-table main2-ticket-prices main3-ticket-prices">
		<!-- <h2>chief guest</h2> -->
		<div class="col-xs-12 judge-head">
			<h2>Previous Year Judges</h2>
		</div>
		<div class="row rt1">
			<div class="slider1">
				<div>
					<div class="col-xs-12 col-sm-12 col-md-5 cl1">
						<img src="images/judges/p.jpg" alt="" class="img-chief">
						<div class="hidden-md hidden-lg pop-up1">
							<h2>Parul <br>Chauhan</h2>
							<p>
								Husbands ask repeated resolved but laughter debating. She end cordial visitor noisier fat subject general picture. Or if
								offering
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 hidden-sm hidden-xs">
						<div class="chief-detail">
							<h3>Parul Chauhan</h3>
							<p>
								Husbands ask repeated resolved but laughter debating. She end cordial visitor noisier fat subject general picture. Or if
								offering confined entrance no. Nay rapturous him see something residence. Highly talked do so vulgar. Her use behaved
								spirits and natural attempt say feeling. Exquisite mr incommode immediate he something ourselves it of. Law conduct
								yet chiefly beloved examine village proceed. On projection apartments unsatiable so if he entreaties appearance.
								Rose you wife how set lady half wish. Hard sing an in true felt. Welcomed stronger if steepest ecstatic an suitable
								finished of oh. Entered at excited at forming between so produce.
							</p>
						</div>
					</div>
				</div>
				<div>
					<div class="col-xs-12 col-sm-12 col-md-5 cl2">
						<img src="images/judges/s.jpg" alt="" class="img-chief">
						<div class="hidden-md hidden-lg pop-up2">
							<h2>Shraey <br>Khanna</h2>
							<p>
								Husbands ask repeated resolved but laughter debating. She end cordial visitor noisier fat subject general picture. Or if
								offering
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 hidden-sm hidden-xs">
						<div class="chief-detail">
							<h3>Shraey Khanna</h3>
							<p>
								Husbands ask repeated resolved but laughter debating. She end cordial visitor noisier fat subject general picture. Or if
								offering confined entrance no. Nay rapturous him see something residence. Highly talked do so vulgar. Her use behaved
								spirits and natural attempt say feeling. Exquisite mr incommode immediate he something ourselves it of. Law conduct
								yet chiefly beloved examine village proceed. On projection apartments unsatiable so if he entreaties appearance.
								Rose you wife how set lady half wish. Hard sing an in true felt. Welcomed stronger if steepest ecstatic an suitable
								finished of oh. Entered at excited at forming between so produce.
							</p>
						</div>
					</div>
				</div>
				<div>
					<div class="col-xs-12 col-sm-12 col-md-5 cl3">
						<img src="images/judges/r.jpg" alt="" class="img-chief">
						<div class="hidden-md hidden-lg pop-up3">
							<h2>Tanmay <br>Mukherjee</h2>
							<p>
								Husbands ask repeated resolved but laughter debating. She end cordial visitor noisier fat subject general picture. Or if
								offering
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 hidden-sm hidden-xs">
						<div class="chief-detail">
							<h3>Tanmay Mukherjee</h3>
							<p>
								Husbands ask repeated resolved but laughter debating. She end cordial visitor noisier fat subject general picture. Or if
								offering confined entrance no. Nay rapturous him see something residence. Highly talked do so vulgar. Her use behaved
								spirits and natural attempt say feeling. Exquisite mr incommode immediate he something ourselves it of. Law conduct
								yet chiefly beloved examine village proceed. On projection apartments unsatiable so if he entreaties appearance.
								Rose you wife how set lady half wish. Hard sing an in true felt. Welcomed stronger if steepest ecstatic an suitable
								finished of oh. Entered at excited at forming between so produce.
							</p>
						</div>
					</div>
				</div>
				<div>
					<div class="col-xs-12 col-sm-12 col-md-5 cl4">
						<img src="images/judges/h.jpg" alt="" class="img-chief">
						<div class="hidden-md hidden-lg pop-up4">
							<h2>Ankita <br>Kapoor</h2>
							<p>
								Husbands ask repeated resolved but laughter debating. She end cordial visitor noisier fat subject general picture. Or if
								offering
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 hidden-sm hidden-xs">
						<div class="chief-detail">
							<h3>Ankita Kapoor</h3>
							<p>
								Husbands ask repeated resolved but laughter debating. She end cordial visitor noisier fat subject general picture. Or if
								offering confined entrance no. Nay rapturous him see something residence. Highly talked do so vulgar. Her use behaved
								spirits and natural attempt say feeling. Exquisite mr incommode immediate he something ourselves it of. Law conduct
								yet chiefly beloved examine village proceed. On projection apartments unsatiable so if he entreaties appearance.
								Rose you wife how set lady half wish. Hard sing an in true felt. Welcomed stronger if steepest ecstatic an suitable
								finished of oh. Entered at excited at forming between so produce.
							</p>
						</div>
					</div>
				</div>
				<div>
					<div class="col-xs-12 col-sm-12 col-md-5 cl7">
						<img src="images/judges/c.jpg" alt="" class="img-chief">
						<div class="hidden-md hidden-lg pop-up7">
							<h2>Jay <br>Prashar</h2>
							<p>
								Husbands ask repeated resolved but laughter debating. She end cordial visitor noisier fat subject general picture. Or if
								offering
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 hidden-sm hidden-xs">
						<div class="chief-detail">
							<h3>Jay Prashar</h3>
							<p>
								Husbands ask repeated resolved but laughter debating. She end cordial visitor noisier fat subject general picture. Or if
								offering confined entrance no. Nay rapturous him see something residence. Highly talked do so vulgar. Her use behaved
								spirits and natural attempt say feeling. Exquisite mr incommode immediate he something ourselves it of. Law conduct
								yet chiefly beloved examine village proceed. On projection apartments unsatiable so if he entreaties appearance.
								Rose you wife how set lady half wish. Hard sing an in true felt. Welcomed stronger if steepest ecstatic an suitable
								finished of oh. Entered at excited at forming between so produce.
							</p>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<div class="main3-venue">
		<div class="container">
			<h2>Locations</h2>
			<div class="owl-carousel owl-theme" id="owl-location">
				<div class="item" ontouchStart="this.classList.toggle('hover')">
					<div class="flipper">
						<div class="front">
							<img src="images/rbl.jpg" alt="">
						</div>
						<div class="back">
							<p>
								Allahabad
								<br> Venue: XXXX
								<br> Audition Date: dd/mm/yyyy
								<br> Audition Time: h:m
								<br>
							</p>
						</div>
					</div>
				</div>
				<div class="item" ontouchStart="this.classList.toggle('hover')">
					<div class="flipper">
						<div class="front">
							<img src="images/lko.jpg" alt="">
						</div>
						<div class="back">
							<p>
								Place: XXXXX
								<br> Venue: XXXX
								<br> Audition Date: dd/mm/yyyy
								<br> Audition Time: h:m
								<br>
							</p>
						</div>
					</div>
				</div>
				<div class="item" ontouchStart="this.classList.toggle('hover')">
					<div class="flipper">
						<div class="front">
							<img src="images/alb.jpg" alt="">
						</div>
						<div class="back">
							<p>
								Place: XXXXX
								<br> Venue: XXXX
								<br> Audition Date: dd/mm/yyyy
								<br> Audition Time: h:m
								<br>
							</p>
						</div>
					</div>
				</div>
				<div class="item" ontouchStart="this.classList.toggle('hover')">
					<div class="flipper">
						<div class="front">
							<img src="images/vrs.jpg" alt="">
						</div>
						<div class="back">
							<p>
								Place: XXXXX
								<br> Venue: XXXX
								<br> Audition Date: dd/mm/yyyy
								<br> Audition Time: h:m
								<br>
							</p>
						</div>
					</div>
				</div>
				<div class="item" ontouchStart="this.classList.toggle('hover')">
					<div class="flipper">
						<div class="front">
							<img src="images/knp.jpg" alt="">
						</div>
						<div class="back">
							<p>
								Place: XXXXX
								<br> Venue: XXXX
								<br> Audition Date: dd/mm/yyyy
								<br> Audition Time: h:m
								<br>
							</p>
						</div>
					</div>
				</div>
				<div class="item" ontouchStart="this.classList.toggle('hover')">
					<div class="flipper">
						<div class="front">
							<img src="images/Grp.jpg">
						</div>
						<div class="back">
							<p>
								Place: XXXXX
								<br> Venue: XXXX
								<br> Audition Date: dd/mm/yyyy
								<br> Audition Time: h:m
								<br>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- testimonials home3 -->
	<div class="main3-testimonials">
		<div class="container">
			<h2>testimonials</h2>

			<div class="icon-tes">
				“
			</div>

			<div id="owl-testimonials2" class="owl-carousel owl-theme">
				<div class="item">
					<p>
						There's been a natural adaption of the platfomr with no training whatsoever participants immediately see the enefit to themselves, to their teams, and to the company as a whole. 
						<br>
						Great Show, Deserving Winners.
						<br>
					</p>

					<span>- &nbsp;Shrey Khanna&nbsp; -</span>
				</div>

				<div class="item">
					<p>
						Wow, I just updated my all social sites with a awesome experience in Raebareli, being the part of hunar is ultimate. Great talent from small city. Thanks for being so nice to me. High fives!
						<br>
					</p>

					<span>- &nbsp;Ankita Kapoor&nbsp; -</span>
				</div>

				<div class="item">
					<p>
						I just wanted to share a quick note &amp; let yoy know that you guys do a really good job. I'm glad I decided to attend your show with you. It's really great opportunity to come to Raebareli for such a great show. I enjoyed a lot this talent show which you people organised for small city.
						<br>

					</p>

					<span>- &nbsp;Parul Chauhan&nbsp; -</span>
				</div>
				<div class="item">
					<p>
						Outstanding work! These guys are awesome, manages wonderfully such a big event with a motive to encourage children &amp; youth for their talents recognition. Thanks for your invitation "Ceremony House". Love to be part of it.
						<br>

					</p>

					<span>- &nbsp;Tanmay Mukherjee&nbsp; -</span>
				</div>
				<div class="item">
					<p>
					Nice show, nice talents, nice arrangements. Thanks for being so humble lovely city "Raebareli". HUNAR justified it's name.
						<br>
					</p>
					<span>- &nbsp;Jay Prashar&nbsp; -</span>
				</div> 
				<div class="item">
					<p>
						I would like to admit that since I registered myself with Hunar as a participant I have improved my confidence level &amp; become a better performer as compared to before. I used all the caliber for this competition. And at last I WON in modelling category(senior).
						<br>

					</p>

					<span>- &nbsp;Priyanshi Srivastava&nbsp; -</span>
				</div>
				<div class="item">
					<p>
						The substance and knowledge learned from hunar have given me a chance to broaden my scope &amp; look at the bigger carrier. Personal development sessions, added more ammunition to the success of my professional career. THANKS HUNAR, I won in singing senior category.
						<br>

					</p>

					<span>- &nbsp;Arpit Yadav&nbsp; -</span>
				</div>
				<div class="item">
					<p>
					I have attended a number of competitions, talent shows &amp; training courses in the last few years &amp; none have compared to the breadth &amp; quality of the information provided in HUNAR. The competition was an incredible learning experience. Thanks HUNAR, I won in acting(senior).
						<br>

					</p>

					<span>- &nbsp;Ashanya Gupta&nbsp; -</span>
				</div>
				<div class="item">
					<p>
						As a result of participating in hunar my abilities to perform improve, confidence increased. Now I see it as a clear objective that is achievable.
						<br>
						Thanks HUNAR, I won in Dancing(Senior).
						<br>
					</p>

					<span>- &nbsp;Muskan Soni&nbsp; -</span>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	<!-- lastest post home3 -->
	<div class="main3-lastest-post">
		<div class="container control-fix">
			<div class="row">
				<h2>hunar 2k17</h2>

				<div id="owl-latest-post-tech-event" class="owl-carousel owl-theme">
					<div class="item">
						<div class="box-owl">
							<div class="img-box-owl">
								<a href="#">
									<img src="images/k17/1.jpg" alt="">
								</a>
							</div>

							<h3>
								<a href="#">The World Music Festival #2</a>
							</h3>

							<ul>
								<li>
									<a href="#">
										<i class="fa fa-folder-open" aria-hidden="true"></i> technology</a>
								</li>
								<li>
									<i class="fa fa-calendar" aria-hidden="true"></i> march 13,2017</li>
							</ul>

							<p>Pellentesque habitant morbi tristique senectu et netus et malesuada fames ac turpis egest. Vestibulu tortor quam,
								feugiat vitae, ultricies eget, tempor sit amet, ante.</p>

						</div>
					</div>

					<div class="item">
						<div class="box-owl">
							<div class="img-box-owl">
								<a href="#">
									<img src="images/k17/2.jpg" alt="">
								</a>
							</div>

							<h3>
								<a href="#">The World Music Festival #2</a>
							</h3>

							<ul>
								<li>
									<a href="#">
										<i class="fa fa-folder-open" aria-hidden="true"></i> technology</a>
								</li>
								<li>
									<i class="fa fa-calendar" aria-hidden="true"></i> march 13,2017</li>
							</ul>

							<p>Pellentesque habitant morbi tristique senectu et netus et malesuada fames ac turpis egest. Vestibulu tortor quam,
								feugiat vitae, ultricies eget, tempor sit amet, ante.</p>

						</div>
					</div>

					<div class="item">
						<div class="box-owl">
							<div class="img-box-owl">
								<a href="#">
									<img src="images/k17/4.jpg" alt="">
								</a>
							</div>

							<h3>
								<a href="#">The World Music Festival #2</a>
							</h3>

							<ul>
								<li>
									<a href="#">
										<i class="fa fa-folder-open" aria-hidden="true"></i> technology</a>
								</li>
								<li>
									<i class="fa fa-calendar" aria-hidden="true"></i> march 13,2017</li>
							</ul>

							<p>Pellentesque habitant morbi tristique senectu et netus et malesuada fames ac turpis egest. Vestibulu tortor quam,
								feugiat vitae, ultricies eget, tempor sit amet, ante.</p>

							<!-- <a href="#" class="btn-readmore">read more</a> -->

						</div>
					</div>
					<div class="item">
						<div class="box-owl">
							<div class="img-box-owl">
								<a href="#">
									<img src="images/k17/8.jpg" alt="">
								</a>
							</div>

							<h3>
								<a href="#">The World Music Festival #2</a>
							</h3>

							<ul>
								<li>
									<a href="#">
										<i class="fa fa-folder-open" aria-hidden="true"></i> technology</a>
								</li>
								<li>
									<i class="fa fa-calendar" aria-hidden="true"></i> march 13,2017</li>
							</ul>

							<p>Pellentesque habitant morbi tristique senectu et netus et malesuada fames ac turpis egest. Vestibulu tortor quam,
								feugiat vitae, ultricies eget, tempor sit amet, ante.</p>

							<!-- <a href="#" class="btn-readmore">read more</a> -->

						</div>
					</div>
					<div class="item">
						<div class="box-owl">
							<div class="img-box-owl">
								<a href="#">
									<img src="images/k17/5.jpg" alt="">
								</a>
							</div>

							<h3>
								<a href="#">The World Music Festival #2</a>
							</h3>

							<ul>
								<li>
									<a href="#">
										<i class="fa fa-folder-open" aria-hidden="true"></i> technology</a>
								</li>
								<li>
									<i class="fa fa-calendar" aria-hidden="true"></i> march 13,2017</li>
							</ul>

							<p>Pellentesque habitant morbi tristique senectu et netus et malesuada fames ac turpis egest. Vestibulu tortor quam,
								feugiat vitae, ultricies eget, tempor sit amet, ante.</p>

							<!-- <a href="#" class="btn-readmore">read more</a> -->

						</div>
					</div>
				</div>

				<div class="control-lastest-post">
					<div class="control-lastest-post-prev">
						<i class="fa fa-chevron-left" aria-hidden="true"></i>
					</div>
					<div class="control-lastest-post-next">
						<i class="fa fa-chevron-right" aria-hidden="true"></i>
					</div>
				</div>
			</div>

		</div>

	</div>
	@endsection



	