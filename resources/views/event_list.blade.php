
@extends('layouts.master')

@section('content')
<!-- banner pages -->
<div class="page-heading">
		<!-- <h1 class="entry-title"></h1>

		<ul class="entry-breadcrumb">
			<li>
				<a href="#"></a>
			</li>
			<li>/</li>
			<li>
				<a href="#"></a>
			</li>
		</ul> -->
		<img src="./images/events_show.jpg" class="img-reponsive" alt="">
	</div>

<div id="main">
	<div class="entry-content">
		<!-- list event1 extend lastest event -->
		<div class="main-lastest-event entry-list-event1">
			<div class="container">
				<div class="wraper">
					<!-- <div class="iso-menu">
						<ul>
							<li class="active" data-filter="*">ALL</li>
							<li data-filter=".technology">technology</li>
							<li data-filter=".business">business</li>
							<li data-filter=".music">music</li>
							<li data-filter=".fashion">fashion</li>
							<li data-filter=".sport">sport</li>
							<li data-filter=".education">education</li>
							<li data-filter=".travel">travel</li>
						</ul>

						<div class="sl-up">
							<select name="upcoming" id="upcoming">
								<option>Upcoming</option>	
								<option>Happening</option>	
								<option>Expired</option>
							</select>
							<i class="fa fa-chevron-down" aria-hidden="true"></i>
						</div>
					</div> -->

					<select class="select-filter">
			            <option class="data-filter" value="*">all</option>

			            <option class="data-filter" value=".technology">technology</option>

			            <option class="data-filter" value=".business">business</option>

			            <option class="data-filter" value=".music">music</option>

			            <option class="data-filter" value=".fashion">fashion</option>

			            <option class="data-filter" value=".sport">sport</option>

			            <option class="data-filter" value=".education">education</option>

			            <option class="data-filter" value=".travel">travel</option>

			        </select>

			        <div class="clearfix"></div>

					<div class="iso-main">
						<div class="row">
							<div class="item technology col-xs-12 col-sm-12 col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<div class="img">
												<a href="{{url('/event_details')}}"><img src="images/dnce.jpg" alt="list event"></a>
											</div>
										</div>
										
									</div>
									<div class="col-md-8 fix-col2">
										<div class="row">
											<div class="txt-item">
												<h3><a href="{{url('/event_details')}}">dance</a></h3>
												<ul>
													<li><i class="fa fa-calendar" aria-hidden="true"></i> XXXXXXXX</li>
													<li><i class="fa fa-map-marker" aria-hidden="true"></i> XXXXXXXXX</li>
													<!-- <li><i class="fa fa-folder-open" aria-hidden="true"></i> Business</li>
													<li><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</li> -->
												</ul>
												<p>HUNAR 2018 features a format where dancers from a variety of styles enter open auditions held in major cities of Uttar Pradesh to showcase their unique style and talents. Professional and amateur dancers from all age groups showcase their talent in a series of rounds starting from the auditions and are assessed by a panel of judges. The judges decide who gets to stay and who is eliminated.</p>
												<div class="btn-list-event1">
													<a href="{{url('/event_details')}}"><i class="fa fa-file-text-o" aria-hidden="true"></i> Event info</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>

							<div class="item business col-xs-12 col-sm-12 col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<div class="img">
												<a href="{{url('/event_singing')}}"><img src="images/list-event1/2.jpg" alt="list event"></a>
											</div>
										</div>
										
									</div>
									<div class="col-md-8 fix-col2">
										<div class="row">
											<div class="txt-item">
												<h3><a href="{{url('/event_singing')}}">singing</a></h3>
												<ul>
													<li><i class="fa fa-calendar" aria-hidden="true"></i> XXXXXXXX</li>
													<li><i class="fa fa-map-marker" aria-hidden="true"></i> XXXXXXX</li>
													<!-- <li><i class="fa fa-folder-open" aria-hidden="true"></i> </li>
													<li><i class="fa fa-clock-o" aria-hidden="true"></i> </li> -->
												</ul>
												<p>Everyone loves listening to song, while there are others who enjoy singing. If you are one of the later ones who are good in singing and wants to make a career in singing, you are in good luck my friend. HUNAR 2018 is here in your city. .</p>
												<div class="btn-list-event1">
													<a href="{{url('/event_singing')}}"><i class="fa fa-file-text-o" aria-hidden="true"></i> Event info</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>

							<div class="item music col-xs-12 col-sm-12 col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<div class="img">
												<a href="{{url('/event_modelling')}}"><img src="images/modelling_short1.jpg" alt="list event"></a>
											</div>
										</div>
										
									</div>
									<div class="col-md-8 fix-col2">
										<div class="row">
											<div class="txt-item">
												<h3><a href="{{url('/event_modelling')}}">modelling</a></h3>
												<ul>
													<li><i class="fa fa-calendar" aria-hidden="true"></i> XXXXXXXXX</li>
													<li><i class="fa fa-map-marker" aria-hidden="true"></i> XXXXXXXXXX</li>
													<!-- <li><i class="fa fa-folder-open" aria-hidden="true"></i> Business</li>
													<li><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</li> -->
												</ul>
												<p>Modelling Audition and online Registration for HUNAR are now open officially for all young girls and guys to find the young talents to the fashion and glamour industry. It is a beauty pageant in Uttar Pradesh that is annually organised by the Ceremony House.</p>
												<div class="btn-list-event1">
													<a href="{{url('/event_modelling')}}"><i class="fa fa-file-text-o" aria-hidden="true"></i> Event info</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>

							<!-- <div class="item fashion col-xs-12 col-sm-12 col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<div class="img">
												<a href="#"><img src="images/list-event1/4.jpg" alt="list event"></a>
											</div>
										</div>
										
									</div>
									<div class="col-md-8 fix-col2">
										<div class="row">
											<div class="txt-item">
												<h3><a href="#">Global Financial Conference</a></h3>
												<ul>
													<li><i class="fa fa-calendar" aria-hidden="true"></i> October 12, 2017</li>
													<li><i class="fa fa-map-marker" aria-hidden="true"></i> New York, USA</li>
													<li><i class="fa fa-folder-open" aria-hidden="true"></i> Business</li>
													<li><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</li>
												</ul>
												<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vesti tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
												<div class="btn-list-event1">
													<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> information</a>
													<a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i> buy ticket</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>

							<div class="item sport col-xs-12 col-sm-12 col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<div class="img">
												<a href="#"><img src="images/list-event1/5.jpg" alt="list event"></a>
											</div>
										</div>
										
									</div>
									<div class="col-md-8 fix-col2">
										<div class="row">
											<div class="txt-item">
												<h3><a href="#">Global Financial Conference</a></h3>
												<ul>
													<li><i class="fa fa-calendar" aria-hidden="true"></i> October 12, 2017</li>
													<li><i class="fa fa-map-marker" aria-hidden="true"></i> New York, USA</li>
													<li><i class="fa fa-folder-open" aria-hidden="true"></i> Business</li>
													<li><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</li>
												</ul>
												<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vesti tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
												<div class="btn-list-event1">
													<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> information</a>
													<a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i> buy ticket</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>

							<div class="item education col-xs-12 col-sm-12 col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<div class="img">
												<a href="#"><img src="images/list-event1/6.jpg" alt="list event"></a>
											</div>
										</div>
										
									</div>
									<div class="col-md-8 fix-col2">
										<div class="row">
											<div class="txt-item">
												<h3><a href="#">Global Financial Conference</a></h3>
												<ul>
													<li><i class="fa fa-calendar" aria-hidden="true"></i> October 12, 2017</li>
													<li><i class="fa fa-map-marker" aria-hidden="true"></i> New York, USA</li>
													<li><i class="fa fa-folder-open" aria-hidden="true"></i> Business</li>
													<li><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</li>
												</ul>
												<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vesti tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
												<div class="btn-list-event1">
													<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> information</a>
													<a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i> buy ticket</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div> -->
										
						</div>
					</div>

				</div>

				<!-- pagination -->
				<!-- <div class="entry-pagination">
					<ul class="pagination">
				 		<li><a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
				 		<li class="active"><a href="#">1</a></li>
				 		<li><a href="#">2</a></li>
				 		<li><a href="#">3</a></li>
				 		<li><a href="#">4</a></li>
				 		<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
				 	</ul> 	
				</div> -->
			</div>
			
		</div>

	</div>
</div>
@endsection

