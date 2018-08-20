


	<footer id="footer">
		<div class="container">
			<div class="logo-footer">
				<img src="images/hunar_logo.png" alt="">
			</div>
			<div class="image-gall col-sm-12 col-sm-offset-1">
				<div class="main2-gallery main3-gallery">
					<div class="row">
						<div class="col-md-8 rowfix">
							<div class="row" id="lightgallery">
								<div class="col-md-3 col-xs-6" data-src="images/gallery/1.jpg">
									<div class="row">
										<div class="img-gallery">
											<a href="#">
												<img src="images/gallery/1.jpg" alt="">
												<span class="overlay1"></span>
												<span class="overlay2">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-xs-6" data-src="images/gallery/2.jpg">
									<div class="row">
										<div class="img-gallery">
											<a href="#">
												<img src="images/gallery/2.jpg" alt="">
												<span class="overlay1"></span>
												<span class="overlay2">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-xs-6" data-src="images/gallery/3.jpg">
									<div class="row">
										<div class="img-gallery">
											<a href="#">
												<img src="images/gallery/3.jpg" alt="">
												<span class="overlay1"></span>
												<span class="overlay2">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-xs-6" data-src="images/gallery/4.jpg">
									<div class="row">
										<div class="img-gallery">
											<a href="#">
												<img src="images/gallery/4.jpg" alt="">
												<span class="overlay1"></span>
												<span class="overlay2">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-xs-6" data-src="images/gallery/5.jpg">
									<div class="row">
										<div class="img-gallery">
											<a href="#">
												<img src="images/gallery/5.jpg" alt="">
												<span class="overlay1"></span>
												<span class="overlay2">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-xs-6" data-src="images/gallery/6.jpg">
									<div class="row">
										<div class="img-gallery">
											<a href="#">
												<img src="images/gallery/6.jpg" alt="">
												<span class="overlay1"></span>
												<span class="overlay2">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-xs-6" data-src="images/gallery/7.jpg">
									<div class="row">
										<div class="img-gallery">
											<a href="#">
												<img src="images/gallery/7.jpg" alt="">
												<span class="overlay1"></span>
												<span class="overlay2">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-xs-6" data-src="images/gallery/8.jpg">
									<div class="row">
										<div class="img-gallery">
											<a href="#">
												<img src="images/gallery/8.jpg" alt="">
												<span class="overlay1"></span>
												<span class="overlay2">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<a href="/gallery" class="btn-view-image">
								<i class="fa fa-picture-o" aria-hidden="true"></i> view all images</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="icon-fo">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>

					<ul>
						<li>Phone</li>
						<li>095988 82640</li>
					</ul>

				</div>
				<div class="col-md-6">
					<div class="icon-fo">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>

					<ul>
						<li>Address</li>
						<li>NEAR NISSAN MOTORS, LUCKNOW ROAD RAEBARELI – 229001</li>
					</ul>
				</div>
				<div class="col-md-3">
					<div class="icon-fo">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>

					<ul>
						<li>Email</li>
						<li>
							<a href="mailto:ceremonyhouse@outlook.com">hunar2K18@gmail.com</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="social-footer">
				<ul>
					<li>
						<a href="https://www.facebook.com/CeremoneyHouse/" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
				
					<li>
						<a href="https://www.youtube.com/channel/UCfJOiEFWtUreeUvztpQuYHg" target="_blank">
							<i class="fa fa-youtube-play" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/Bbg2qohH4wn/" target="_blank">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
					</li>
				
				</ul>
			</div>

			<div class="copyright">
				<p>© Copyright 2017. All rights reserved. Presented By
					<span>Ceremony House</span>
				</p>
			</div>
		</div>
	</footer>

	<div id="to-top">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</div>

	<script>$(document).ready(function(){
  //group add limit
  var maxGroup = 3;
  
  //add more fields group
  $(".addMore").click(function(){
      if($('body').find('.fieldGroup').length < maxGroup){
          var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
          $('body').find('.fieldGroup:last').after(fieldHTML);
      }else{
          alert('Maximum '+maxGroup+' groups are allowed.');
      }
  });
  
  //remove fields group
  $("body").on("click",".remove",function(){ 
      $(this).parents(".fieldGroup").remove();
  });
});</script>


	<script type="text/javascript" src="js/y-video.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/picturefill.min.js"></script>
	<script type="text/javascript" src="js/lightgallery.min.js"></script>
	<script type="text/javascript" src="js/lg-thumbnail.min.js"></script>
	<script type="text/javascript" src="js/lg-autoplay.min.js"></script>
	<script type="text/javascript" src="js/lg-fullscreen.min.js"></script>
	<script type="text/javascript" src="js/lg-hash.min.js"></script>
	<script type="text/javascript" src="js/lg-pager.min.js"></script>
	<script type="text/javascript" src="js/lg-share.min.js"></script>

	<script type="text/javascript" src="js/lg-video.min.js"></script>
	<script type="text/javascript" src="js/lg-zoom.min.js"></script>

	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/parallax.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/count-down.js"></script>
</body>

<!-- Mirrored from html.univertheme.com/unievent/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Apr 2018 13:29:41 GMT -->

</html>