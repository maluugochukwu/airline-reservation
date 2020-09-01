<?php require_once 'includes/header.php'; ?>
<body class="homepage">

	<!-- Website Loading
	============================================= -->
	<div id="full-container">
		<?php require_once 'includes/nav.php'; ?>

		<!-- Banner
		============================================= -->
		<section id="banner">
			<div class="banner-parallax" data-banner-height="550">
				<img src="images/banner.jpg" alt="">
				<div class="overlay-colored color-bg-white opacity-40"></div><!-- .overlay-colored end -->
				<div class="slide-content">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="banner-center-box">
									<h1 class="font-heading-secondary">
										<strong>Travel</strong> 
										<br>
										With <strong>G126</strong>
									</h1>
									<div class="banner-reservation-tabs">
										<ul class="br-tabs">
											<li class="active"><a href="javascript:directions('1')" >Round Trip</a></li>
											<li><span class="one_way" onclick="directions('0')" >One Way</span></li>
											<li><a href="javascript:void(0)">Multiple Destinations</a></li>
										</ul><!-- .br-tabs end -->
										<ul class="br-tabs-content" style="background-color: rgba(57,154,244,.8); height:95px !important">
											<li class="active">
												<form onsubmit="return false" class="form-banner-reservation form-inline style-2 form-h-50">
													<div class="form-group" style="width:60%; ">
														<input type="text" id="from"  name="from" class="departure_arrival form-control" placeholder="From where?" data-selectedorigin="">
														<i id="former" style=" z-index:9999999999999999999999999"></i>
													</div><!-- .form-group end -->
													<div class="form-group"  style="width:60%; z-index:1">
														<input type="text"  id="to" name="to" class="departure_arrival form-control" placeholder="To where?" data-selecteddestination="">
													</div><!-- .form-group end -->
													<div class="form-group" id="twoway_div" >
														<input type="text" name="brTimeStart" class="form-control" id="departure" placeholder="">
														<i class="far fa-calendar"></i>
													</div><!-- .form-group end -->
													<div class="form-group" id="oneway_div" style="display:none"  >
														<input type="text" name="brTimeStart" class="one_way_departure form-control"  placeholder="">
														<i class="far fa-calendar"></i>
													</div><!-- .form-group end -->
													<div class="form-group" style="width:50%">
														<input type="text" name="brPassengerNumber" class="form-control show-dropdown-passengers"
															placeholder="Passengers">
														<i class="fas fa-user"></i>
														<ul class="list-dropdown-passengers">
															<li>
																<ul class="list-persons-count">
																	<li>
																		<span>Adults:</span>
																		<div class="counter-add-item">
																			<a class="decrease-btns" onclick="decrease_adult()" href="javascript:;">-</a>
																			<input type="text" readonly id="adult_count" value="1">
																			<a class="increase-btns" onclick="increase_adult()" href="javascript:;">+</a>
																		</div><!-- .counter-add-item end -->
																	</li>
																	<li>
																		<span>Childs:</span>
																		<div class="counter-add-item">
																			<a class="decrease-btns" onclick="decrease_child()" href="javascript:;">-</a>
																			<input type="text" readonly id="child_count" value="0">
																			<a class="increase-btns" onclick="increase_child()" href="javascript:;">+</a>
																		</div><!-- .counter-add-item end -->
																	</li>
																</ul><!-- .list-persons-count end -->
															</li>
															<li>
																<ul class="list-select-grade">
																	<li>
																		<label class="radio-container radio-default">
																			<input type="radio" value="Economy" checked="checked"  name="radio">
																			<span class="checkmark"></span>
																			Economy Class
																		</label>
																	</li>
																	<li>
																		<label class="radio-container radio-default">
																			<input type="radio" value="Business"  name="radio">
																			<span class="checkmark"></span>
																			Business Class
																		</label>
																	</li>
																	<li>
																		<label class="radio-container radio-default">
																			<input type="radio" value="First"  name="radio">
																			<span class="checkmark"></span>
																			First Class
																		</label>
																	</li>
																</ul><!-- .list-select-grade end -->
															</li>
															<li>
															</li>
															<li>
																<a class="btn-reservation-passengers btn x-small colorful hover-dark"
																	href="javascript:;" onclick="preview()">Done</a>
															</li>
														</ul><!-- .list-dropdown-passengers end -->
													</div><!-- .form-group end -->
													<div class="form-group">
														<button type="button" id="send" class="form-control icon"><i class="fas fa-search"></i></button>
													</div><!-- .form-group end -->
													 
												</form><!-- .form-banner-reservation end -->
												<input type="hidden" value="0" id="direction">
												<input type="hidden" value="1" id="form_adult">
												<input type="hidden" value="0" id="form_children" />
												<input type="hidden" value="0" id="form_infant" />
												<input type="hidden" value="0" id="form_cabin" />
											</li>
											<li>
												
											</li>
											<li>
												<div class="multiple-destinations">
													
													
												</div><!-- .multiple-destinations end -->
											</li>
										</ul><!-- .br-tabs-content end -->
									</div><!-- .banner-reservation-tabs end -->
								</div><!-- .banner-center-box end -->
				
							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->
				</div><!-- .slide-content end -->
			</div><!-- .banner-parallax end -->

		</section><!-- #banner end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div id="content-wrap">

				<!-- === Section About 1 =========== -->
				<div id="section-about-1" class="section-flat">

					<div class="section-content">

						<div class="container">
							<div class="row">
								<div class="col-md-6">

									<div class="section-title">
										<h2><strong>About</strong> G126</h2>
									</div><!-- .section-title end -->

								</div><!-- .col-md-6 end -->
								<div class="clearfix"></div>
								<div class="col-md-6">

									<div class="row">
										<div class="col-md-6">

											<div class="box-info box-about-1">
												<div class="box-content">
													<h4>
														<i class="far fa-heart"></i>
														Sed Magni
													</h4>
													<p>
													
														Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. architecto beatae vitae dicta.
													</p>
												</div><!-- .box-content end -->
											</div><!-- .box-info box-about-1 end -->

										</div><!-- .col-md-6 end -->
										<div class="col-md-6">
										
											<div class="box-info box-about-1 mt-md-40">
												<div class="box-content">
													<h4>
														<i class="far fa-compass"></i>
														Veritatis et Quasi
													</h4>
													<p>
														Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
														architecto beatae vitae dicta.
													</p>
												</div><!-- .box-content end -->
											</div><!-- .box-info box-about-1 end -->
										
										</div><!-- .col-md-6 end -->
										<div class="col-md-6">
										
											<div class="box-info box-about-1 mt-40">
												<div class="box-content">
													<h4>
														<i class="far fa-flag"></i>
														Doloremque
													</h4>
													<p>
														Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
														architecto beatae vitae dicta.
													</p>
												</div><!-- .box-content end -->
											</div><!-- .box-info box-about-1 end -->
										
										</div><!-- .col-md-6 end -->
										<div class="col-md-6">
										
											<div class="box-info box-about-1 mt-40">
												<div class="box-content">
													<h4>
														<i class="far fa-bell"></i>
														Sunt in Culpa
													</h4>
													<p>
														Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
														architecto beatae vitae dicta.
													</p>
												</div><!-- .box-content end -->
											</div><!-- .box-info box-about-1 end -->
										
										</div><!-- .col-md-6 end -->
									</div><!-- .row end -->
									
								</div><!-- .col-md-6 end -->
								<div class="col-md-6">
									
									<div class="video-preview mt-md-60">
										<a class="img-bg lightbox-iframe" href="https://vimeo.com/45830194">
											<div class="overlay-colored color-bg-dark opacity-50"></div><!-- .overlay-colored end -->
											<img src="images/files/bg-video-preview/img-1.jpg" alt="">
										</a><!-- .img-bg end -->
										<a class="btn-video lightbox-iframe" href="https://vimeo.com/45830194">
											<i class="fa fa-play"></i>
										</a><!-- .btn-video end -->
									</div><!-- .video-preview end -->
									
								</div><!-- .col-md-6 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .section-flat end -->

				<!-- === Section Top Destinations =========== -->
				<div id="section-top-destintations" class="section-flat">

					<div class="section-content">

						<div class="container">
							<div class="row">
								<div class="col-md-6">

									<div class="section-title">
										<h2><strong>Top</strong> Destinations</h2>
									</div><!-- .section-title end -->

								</div><!-- .col-md-6 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->
						<div class="container">
							<div class="row">
								<div class="col-md-12">
						
									<div class="slider-top-destinations">
										<ul class="slick-slider">
											<li>
												<div class="box-preview box-area-destination">
													<div class="box-img img-bg">
														<a href="javascript:;"><img src="images/files/box-area-destination/img-2.jpg" alt=""></a>
														<div class="overlay">
															<div class="overlay-inner">
															</div><!-- .overlay-inner end -->
														</div><!-- .overlay end -->
													</div><!-- .box-img end -->
													<div class="box-content">
														<i class="fas fa-map-marker-alt"></i>
														<div class="title">
															<h5><a href="javascript:;">South America</a></h5>
															<h6>3 Tours</h6>
														</div><!-- .title end -->
													</div><!-- .box-content end -->
												</div><!-- .box-preview end -->
											</li>
											<li>
												<div class="box-preview box-area-destination">
													<div class="box-img img-bg">
														<a href="javascript:;"><img src="images/files/box-area-destination/img-3.jpg" alt=""></a>
														<div class="overlay">
															<div class="overlay-inner">
															</div><!-- .overlay-inner end -->
														</div><!-- .overlay end -->
													</div><!-- .box-img end -->
													<div class="box-content">
														<i class="fas fa-map-marker-alt"></i>
														<div class="title">
															<h5><a href="javascript:;">Europe</a></h5>
															<h6>7 Tours</h6>
														</div><!-- .title end -->
													</div><!-- .box-content end -->
												</div><!-- .box-preview end -->
											</li>
											<li>
												<div class="box-preview box-area-destination">
													<div class="box-img img-bg">
														<a href="javascript:;"><img src="images/files/box-area-destination/img-5.jpg" alt=""></a>
														<div class="overlay">
															<div class="overlay-inner">
															</div><!-- .overlay-inner end -->
														</div><!-- .overlay end -->
													</div><!-- .box-img end -->
													<div class="box-content">
														<i class="fas fa-map-marker-alt"></i>
														<div class="title">
															<h5><a href="javascript:;">Aisa</a></h5>
															<h6>2 Tours</h6>
														</div><!-- .title end -->
													</div><!-- .box-content end -->
												</div><!-- .box-preview end -->
											</li>
											<li>
												<div class="box-preview box-area-destination">
													<div class="box-img img-bg">
														<a href="javascript:;"><img src="images/files/box-area-destination/img-6.jpg" alt=""></a>
														<div class="overlay">
															<div class="overlay-inner">
															</div><!-- .overlay-inner end -->
														</div><!-- .overlay end -->
													</div><!-- .box-img end -->
													<div class="box-content">
														<i class="fas fa-map-marker-alt"></i>
														<div class="title">
															<h5><a href="javascript:;">Africa</a></h5>
															<h6>5 Tours</h6>
														</div><!-- .title end -->
													</div><!-- .box-content end -->
												</div><!-- .box-preview end -->
											</li>
											<li>
												<div class="box-preview box-area-destination">
													<div class="box-img img-bg">
														<a href="javascript:;"><img src="images/files/box-area-destination/img-4.jpg" alt=""></a>
														<div class="overlay">
															<div class="overlay-inner">
															</div><!-- .overlay-inner end -->
														</div><!-- .overlay end -->
													</div><!-- .box-img end -->
													<div class="box-content">
														<i class="fas fa-map-marker-alt"></i>
														<div class="title">
															<h5><a href="javascript:;">Australia</a></h5>
															<h6>6 Tours</h6>
														</div><!-- .title end -->
													</div><!-- .box-content end -->
												</div><!-- .box-preview end -->
											</li>
											<li>
												<div class="box-preview box-area-destination">
													<div class="box-img img-bg">
														<a href="javascript:;"><img src="images/files/box-area-destination/img-2.jpg" alt=""></a>
														<div class="overlay">
															<div class="overlay-inner">
															</div><!-- .overlay-inner end -->
														</div><!-- .overlay end -->
													</div><!-- .box-img end -->
													<div class="box-content">
														<i class="fas fa-map-marker-alt"></i>
														<div class="title">
															<h5><a href="javascript:;">South America</a></h5>
															<h6>3 Tours</h6>
														</div><!-- .title end -->
													</div><!-- .box-content end -->
												</div><!-- .box-preview end -->
											</li>
											<li>
												<div class="box-preview box-area-destination">
													<div class="box-img img-bg">
														<a href="javascript:;"><img src="images/files/box-area-destination/img-3.jpg" alt=""></a>
														<div class="overlay">
															<div class="overlay-inner">
															</div><!-- .overlay-inner end -->
														</div><!-- .overlay end -->
													</div><!-- .box-img end -->
													<div class="box-content">
														<i class="fas fa-map-marker-alt"></i>
														<div class="title">
															<h5><a href="javascript:;">Europe</a></h5>
															<h6>7 Tours</h6>
														</div><!-- .title end -->
													</div><!-- .box-content end -->
												</div><!-- .box-preview end -->
											</li>
										</ul><!-- .slick-slider end -->
										<div class="slick-arrows"></div><!-- .slick-arrows end -->
									</div><!-- .slider-top-destinations end -->
						
								</div><!-- .col-md-12 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .section-flat end -->

				<!-- === Section Popular Packages =========== -->
				<div id="section-popular-packages" class="section-parallax">
				
					<img src="images/files/parallax-bg/img-8.jpg" alt="">
					<div class="overlay-colored color-bg-white opacity-60"></div><!-- .overlay-colored end -->
					<div class="section-content">
				
						<div class="container">
							<div class="row">
								<div class="col-md-6">
				
									<div class="section-title">
										<h2><strong>Popular</strong> Tour Packages</h2>
									</div><!-- .section-title end -->
				
								</div><!-- .col-md-6 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->
						<div class="container">
							<div class="row">
								<div class="col-md-12">
				
									<div class="tabs-popular-packages">
											<input checked id="one" name="tabs" type="radio">
											<label for="one">Standard Rooms</label>
											<input id="two" name="tabs" type="radio" value="Two">
											<label for="two">Triple Rooms</label>
											<input id="three" name="tabs" type="radio">
											<label for="three">Deluxe Room</label>
											<div class="tabs-content">
												<div class="panel">
													<div class="slider-popular-packages">
														<ul class="slick-slider">
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-2.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$65/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Deluxe Double Bed</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>4</li>
																			<li><i class="far fa-user"></i>2</li>
																			<li><i class="fas fa-users"></i>3</li>
																			<li><i class="fas fa-ruler-combined"></i>87m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-3.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$120/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Twin with an extra bed</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>3</li>
																			<li><i class="fas fa-shower"></i>2</li>
																			<li><i class="fas fa-ruler-combined"></i>87m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-5.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$35/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Romantic Room</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>4</li>
																			<li><i class="fas fa-shower"></i>1</li>
																			<li><i class="fas fa-ruler-combined"></i>48m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-6.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$80/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Doloremque laudantium</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>4</li>
																			<li><i class="fas fa-utensils"></i>2</li>
																			<li><i class="fas fa-users"></i>3</li>
																			<li><i class="fas fa-ruler-combined"></i>48m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-7.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$45/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Architecto beatae vitae dicta</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>1</li>
																			<li><i class="fas fa-utensils"></i>3</li>
																			<li><i class="fas fa-users"></i>1</li>
																			<li><i class="fas fa-ruler-combined"></i>87m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
														</ul><!-- .slick-slider end -->
														<div class="slick-arrows"></div><!-- .slick-arrows end -->
													</div><!-- .slider-popular-packages end -->
												</div><!-- .panel end -->
												<div class="panel">
													<div class="slider-popular-packages">
														<ul class="slick-slider">
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-2.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$65/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Deluxe Double Bed</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>4</li>
																			<li><i class="far fa-user"></i>2</li>
																			<li><i class="fas fa-users"></i>3</li>
																			<li><i class="fas fa-ruler-combined"></i>87m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-3.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$120/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Twin with an extra bed</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>3</li>
																			<li><i class="fas fa-shower"></i>2</li>
																			<li><i class="fas fa-ruler-combined"></i>87m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-5.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$35/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Romantic Room</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>4</li>
																			<li><i class="fas fa-shower"></i>1</li>
																			<li><i class="fas fa-ruler-combined"></i>48m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-6.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$80/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Doloremque laudantium</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>4</li>
																			<li><i class="fas fa-utensils"></i>2</li>
																			<li><i class="fas fa-users"></i>3</li>
																			<li><i class="fas fa-ruler-combined"></i>48m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-7.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$45/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Architecto beatae vitae dicta</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>1</li>
																			<li><i class="fas fa-utensils"></i>3</li>
																			<li><i class="fas fa-users"></i>1</li>
																			<li><i class="fas fa-ruler-combined"></i>87m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
														</ul><!-- .slick-slider end -->
														<div class="slick-arrows"></div><!-- .slick-arrows end -->
													</div><!-- .slider-popular-packages end -->
												</div><!-- .panel end -->
												<div class="panel">
													<div class="slider-popular-packages">
														<ul class="slick-slider">
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-2.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$65/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Deluxe Double Bed</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>4</li>
																			<li><i class="far fa-user"></i>2</li>
																			<li><i class="fas fa-users"></i>3</li>
																			<li><i class="fas fa-ruler-combined"></i>87m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-3.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$120/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Twin with an extra bed</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>3</li>
																			<li><i class="fas fa-shower"></i>2</li>
																			<li><i class="fas fa-ruler-combined"></i>87m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-5.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$35/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Romantic Room</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>4</li>
																			<li><i class="fas fa-shower"></i>1</li>
																			<li><i class="fas fa-ruler-combined"></i>48m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-6.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$80/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Doloremque laudantium</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>4</li>
																			<li><i class="fas fa-utensils"></i>2</li>
																			<li><i class="fas fa-users"></i>3</li>
																			<li><i class="fas fa-ruler-combined"></i>48m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
															<li>
																<div class="box-preview box-tour-package">
																	<div class="box-img img-bg">
																		<a href="javascript:;"><img src="images/files/box-tour-package/img-7.jpg" alt=""></a>
																		<div class="overlay">
																			<div class="overlay-inner">
																			</div><!-- .overlay-inner end -->
																		</div><!-- .overlay end -->
																		<span class="night-price">$45/Night</span>
																	</div><!-- .box-img end -->
																	<div class="box-content">
																		<h4><a href="javascript:;">Architecto beatae vitae dicta</a></h4>
																		<p>
																			Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																		</p>
																		<ul class="list-meta">
																			<li><i class="fas fa-bed"></i>1</li>
																			<li><i class="fas fa-utensils"></i>3</li>
																			<li><i class="fas fa-users"></i>1</li>
																			<li><i class="fas fa-ruler-combined"></i>87m²</li>
																		</ul><!-- .list-meta end -->
																	</div><!-- .box-content end -->
																</div><!-- .box-preview end -->
															</li>
														</ul><!-- .slick-slider end -->
														<div class="slick-arrows"></div><!-- .slick-arrows end -->
													</div><!-- .slider-popular-packages end -->
												</div><!-- .panel end -->
											</div><!-- .tabs-content end -->
									</div><!-- .tabs-popular-packages end -->
									<a class="btn large colorful hover-dark mt-50 center-horizontal" href="javascript:;">View More</a>

								</div><!-- .col-md-12 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->
				
					</div><!-- .section-content end -->
				
				</div><!-- .section-parallax end -->

				

				<!-- === Section Services 1 =========== -->
				<div id="section-services-1" class="section-flat">
				
					<div class="section-content">
				
						<div class="container">
							<div class="row">
								<div class="col-md-4">

									<div class="box-info box-service-1">
										<div class="box-icon">
											<i class="fas fa-wifi"></i>
										</div><!-- .box-icon end -->
										<div class="box-content">
											<h4><a href="javascript:;">Enjoy Free Wi-Fi</a></h4>
											<p>
												Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. architecto beatae vitae dicta.
											</p>
										</div><!-- .box-content end -->
									</div><!-- .box-info box-service-1 end -->

								</div><!-- .col-md-4 end -->
								<div class="col-md-4">
								
									<div class="box-info box-service-1 mt-md-50">
										<div class="box-icon">
											<i class="fas fa-concierge-bell"></i>
										</div><!-- .box-icon end -->
										<div class="box-content">
											<h4><a href="javascript:;">Concierge Service</a></h4>
											<p>
												Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
												architecto beatae vitae dicta.
											</p>
										</div><!-- .box-content end -->
									</div><!-- .box-info box-service-1 end -->
								
								</div><!-- .col-md-4 end -->
								<div class="col-md-4">
								
									<div class="box-info box-service-1 mt-md-50">
										<div class="box-icon">
											<i class="fas fa-swimming-pool"></i>
										</div><!-- .box-icon end -->
										<div class="box-content">
											<h4><a href="javascript:;">Pool Access</a></h4>
											<p>
												Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
												architecto beatae vitae dicta.
											</p>
										</div><!-- .box-content end -->
									</div><!-- .box-info box-service-1 end -->
								
								</div><!-- .col-md-4 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->
				
					</div><!-- .section-content end -->
				
				</div><!-- .section-flat end -->

				<!-- === Section Customers Review =========== -->
				<div id="section-customers-review" class="section-flat">
				
					<div class="section-content">
				
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
								
									<div class="section-title text-center">
										<h2><strong>Customers</strong> Review</h2>
									</div><!-- .section-title end -->
								
								</div><!-- .col-md-6 end -->
								<div class="col-md-12">

									<div class="slider-testimonials">
										<ul class="slick-slider">
											<li>
												<div class="testimonial-single-1">
													<div class="ts-content">
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div><!-- .rating end -->
														<p>
															Consectetur adipisicing elit, sed do eiusmo incididunt ut labore et dolore magna aliqua. Ut enim minim
															veniam, Lorem ipsum dolor sit amet, sed do eiusmo incididunt ut labore.
														</p>
														<i class="sign-quote fas fa-quote-left"></i>
													</div><!-- .ts-content end -->
													<div class="ts-person">
														<div class="ts-img">
															<img src="images/files/sliders/clients-testimonials/img-1.jpg" alt="">
														</div><!-- .ts-img end -->
														<div class="ts-name">
															<h5>John Doe</h5>
															<span>Customer</span>
														</div><!-- .ts-name end -->
													</div><!-- .ts-person end -->
												</div><!-- .testimonial-single-1 end -->
											</li>
											<li>
												<div class="testimonial-single-1">
													<div class="ts-content">
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div><!-- .rating end -->
														<p>
															Consectetur adipisicing elit, sed do eiusmo incididunt ut labore et dolore magna aliqua. Ut enim minim
															veniam, Lorem ipsum dolor sit amet, sed do eiusmo incididunt ut labore.
														</p>
														<i class="sign-quote fas fa-quote-left"></i>
													</div><!-- .ts-content end -->
													<div class="ts-person">
														<div class="ts-img">
															<img src="images/files/sliders/clients-testimonials/img-2.jpg" alt="">
														</div><!-- .ts-img end -->
														<div class="ts-name">
															<h5>Mark Eric</h5>
															<span>Customer</span>
														</div><!-- .ts-name end -->
													</div><!-- .ts-person end -->
												</div><!-- .testimonial-single-1 end -->
											</li>
											<li>
												<div class="testimonial-single-1">
													<div class="ts-content">
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div><!-- .rating end -->
														<p>
															Consectetur adipisicing elit, sed do eiusmo incididunt ut labore et dolore magna aliqua. Ut enim minim
															veniam, Lorem ipsum dolor sit amet, sed do eiusmo incididunt ut labore.
														</p>
														<i class="sign-quote fas fa-quote-left"></i>
													</div><!-- .ts-content end -->
													<div class="ts-person">
														<div class="ts-img">
															<img src="images/files/sliders/clients-testimonials/img-3.jpg" alt="">
														</div><!-- .ts-img end -->
														<div class="ts-name">
															<h5>Robert Lee</h5>
															<span>Customer</span>
														</div><!-- .ts-name end -->
													</div><!-- .ts-person end -->
												</div><!-- .testimonial-single-1 end -->
											</li>
											<li>
												<div class="testimonial-single-1">
													<div class="ts-content">
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div><!-- .rating end -->
														<p>
															Consectetur adipisicing elit, sed do eiusmo incididunt ut labore et dolore magna aliqua. Ut enim minim
															veniam, Lorem ipsum dolor sit amet, sed do eiusmo incididunt ut labore.
														</p>
														<i class="sign-quote fas fa-quote-left"></i>
													</div><!-- .ts-content end -->
													<div class="ts-person">
														<div class="ts-img">
															<img src="images/files/sliders/clients-testimonials/img-1.jpg" alt="">
														</div><!-- .ts-img end -->
														<div class="ts-name">
															<h5>John Doe</h5>
															<span>Customer</span>
														</div><!-- .ts-name end -->
													</div><!-- .ts-person end -->
												</div><!-- .testimonial-single-1 end -->
											</li>
											<li>
												<div class="testimonial-single-1">
													<div class="ts-content">
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div><!-- .rating end -->
														<p>
															Consectetur adipisicing elit, sed do eiusmo incididunt ut labore et dolore magna aliqua. Ut enim minim
															veniam, Lorem ipsum dolor sit amet, sed do eiusmo incididunt ut labore.
														</p>
														<i class="sign-quote fas fa-quote-left"></i>
													</div><!-- .ts-content end -->
													<div class="ts-person">
														<div class="ts-img">
															<img src="images/files/sliders/clients-testimonials/img-2.jpg" alt="">
														</div><!-- .ts-img end -->
														<div class="ts-name">
															<h5>Mark Eric</h5>
															<span>Customer</span>
														</div><!-- .ts-name end -->
													</div><!-- .ts-person end -->
												</div><!-- .testimonial-single-1 end -->
											</li>
										</ul><!-- .slick-slider end -->
									</div><!-- .slider-popular-packages end -->
									
								</div><!-- .col-md-12 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->
				
					</div><!-- .section-content end -->
				
				</div><!-- .section-flat end -->

				<!-- === Section News Events =========== -->
				<div id="section-news-events" class="section-flat">
				
					<div class="section-content">
				
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
				
									<div class="section-title text-center">
										<h2><strong>News</strong> Events</h2>
									</div><!-- .section-title end -->
				
								</div><!-- .col-md-6 end -->
								<div class="col-md-12">
				
									<ul class="list-boxes boxes-3 grid-masonry">
										<li>
											<div class="box-preview box-news-event">
												<div class="box-img img-bg">
													<a href="javascript:;"><img src="images/files/box-news-event/img-1.jpg" alt=""></a>
													<div class="overlay">
														<div class="overlay-inner">
															<a class="lightbox-img" href="images/files/box-news-event/img-1.jpg"><i class="fas fa-search"></i></a>
														</div><!-- .overlay-inner end -->
													</div><!-- .overlay end -->
												</div><!-- .box-img end -->
												<div class="box-content">
													<h4><a href="blog-single.html">Opening of the Restaurant</a></h4>
													<p>
														Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
													</p>
													<div class="meta-event">
														<span class="date">April 20, 2019</span>
														<a href="blog-single.html" class="btn-rm">Read More</a>
													</div><!-- .meta-event end -->
												</div><!-- .box-content end -->
											</div><!-- .box-preview end -->
										</li>
										<li>
											<div class="box-preview box-news-event box-newsletter">
												<div class="box-content">
													<h4><a href="blog-single.html">Newsletter</a></h4>
													<p>
														Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
													</p>
													<form class="form-newsletter-register form-inline form-h-50">
														<div class="form-group">
															<div class="box-field">
																<input type="text" name="email" class="form-control" placeholder="Enter Your Email Address">
																<button type="submit" class="form-control icon"><i class="fas fa-long-arrow-alt-up"></i></button>
															</div><!-- .box-field end -->
														</div><!-- .form-group end -->
													</form><!-- .form-newsletter-register end -->
												</div><!-- .box-content end -->
											</div><!-- .box-preview end -->
										</li>
										<li>
											<div class="box-preview box-news-event">
												<div class="box-img img-bg">
													<a href="javascript:;"><img src="images/files/box-news-event/img-9.jpg" alt=""></a>
													<div class="overlay">
														<div class="overlay-inner">
															<a class="lightbox-img" href="images/files/box-news-event/img-9.jpg"><i class="fas fa-search"></i></a>
														</div><!-- .overlay-inner end -->
													</div><!-- .overlay end -->
												</div><!-- .box-img end -->
												<div class="box-content">
													<h4><a href="blog-single.html">Hotel Loyalty Club</a></h4>
													<p>
														Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
													</p>
													<div class="meta-event">
														<span class="date">April 20, 2019</span>
														<a href="blog-single.html" class="btn-rm">Read More</a>
													</div><!-- .meta-event end -->
												</div><!-- .box-content end -->
											</div><!-- .box-preview end -->
										</li>
										<li>
											<div class="box-preview box-news-event">
												<div class="box-img img-bg">
													<a href="javascript:;"><img src="images/files/box-news-event/img-3.jpg" alt=""></a>
													<div class="overlay">
														<div class="overlay-inner">
															<a class="lightbox-img" href="images/files/box-news-event/img-3.jpg"><i class="fas fa-search"></i></a>
														</div><!-- .overlay-inner end -->
													</div><!-- .overlay end -->
												</div><!-- .box-img end -->
												<div class="box-content">
													<h4><a href="blog-single.html">Night of San Juan</a></h4>
													<p>
														Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
													</p>
													<div class="meta-event">
														<span class="date">April 20, 2019</span>
														<a href="blog-single.html" class="btn-rm">Read More</a>
													</div><!-- .meta-event end -->
												</div><!-- .box-content end -->
											</div><!-- .box-preview end -->
										</li>
										<li>
											<div class="box-preview box-news-event">
												<div class="box-content">
													<h4><a href="blog-single.html">Night of San Juan</a></h4>
													<p>
														Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
													</p>
													<div class="meta-event">
														<span class="date">April 20, 2019</span>
														<a href="blog-single.html" class="btn-rm">Read More</a>
													</div><!-- .meta-event end -->
												</div><!-- .box-content end -->
											</div><!-- .box-preview end -->
										</li>
										<li>
											<div class="box-preview box-news-event">
												<div class="box-img img-bg">
													<a href="javascript:;"><img src="images/files/box-news-event/img-8.jpg" alt=""></a>
													<div class="overlay">
														<div class="overlay-inner">
															<a class="lightbox-img" href="images/files/box-news-event/img-8.jpg"><i class="fas fa-search"></i></a>
														</div><!-- .overlay-inner end -->
													</div><!-- .overlay end -->
												</div><!-- .box-img end -->
											</div><!-- .box-preview end -->
										</li>
									</ul><!-- .list-boxes end -->
									
								</div><!-- .col-md-12 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
									
									<div class="slider-instagram-feed list-lightbox-gallery">
										<ul class="slick-slider">
											<li>
												<div class="instagram-img">
													<a href="images/files/instagram-feed/img-1.jpg" class="img-bg lightbox-gallery"><img src="images/files/instagram-feed/img-1.jpg" alt=""></a>
												</div><!-- .instagram-img end -->
											</li>
											<li>
												<div class="instagram-img">
													<a href="images/files/instagram-feed/img-2.jpg" class="img-bg lightbox-gallery"><img src="images/files/instagram-feed/img-2.jpg" alt=""></a>
												</div><!-- .instagram-img end -->
											</li>
											<li>
												<div class="instagram-img">
													<a href="images/files/instagram-feed/img-3.jpg" class="img-bg lightbox-gallery"><img src="images/files/instagram-feed/img-3.jpg" alt=""></a>
												</div><!-- .instagram-img end -->
											</li>
											<li>
												<div class="instagram-img">
													<a href="images/files/instagram-feed/img-4.jpg" class="img-bg lightbox-gallery"><img src="images/files/instagram-feed/img-4.jpg" alt=""></a>
												</div><!-- .instagram-img end -->
											</li>
											<li>
												<div class="instagram-img">
													<a href="images/files/instagram-feed/img-5.jpg" class="img-bg lightbox-gallery"><img src="images/files/instagram-feed/img-5.jpg" alt=""></a>
												</div><!-- .instagram-img end -->
											</li>
											<li>
												<div class="instagram-img">
													<a href="images/files/instagram-feed/img-6.jpg" class="img-bg lightbox-gallery"><img src="images/files/instagram-feed/img-6.jpg" alt=""></a>
												</div><!-- .instagram-img end -->
											</li>
											<li>
												<div class="instagram-img">
													<a href="images/files/instagram-feed/img-7.jpg" class="img-bg lightbox-gallery"><img src="images/files/instagram-feed/img-7.jpg" alt=""></a>
												</div><!-- .instagram-img end -->
											</li>
											<li>
												<div class="instagram-img">
													<a href="images/files/instagram-feed/img-8.jpg" class="img-bg lightbox-gallery"><img src="images/files/instagram-feed/img-8.jpg" alt=""></a>
												</div><!-- .instagram-img end -->
											</li>
											<li>
												<div class="instagram-img">
													<a href="images/files/instagram-feed/img-9.jpg" class="img-bg lightbox-gallery"><img src="images/files/instagram-feed/img-9.jpg" alt=""></a>
												</div><!-- .instagram-img end -->
											</li>
											<li>
												<div class="instagram-img">
													<a href="images/files/instagram-feed/img-10.jpg" class="img-bg lightbox-gallery"><img src="images/files/instagram-feed/img-10.jpg" alt=""></a>
												</div><!-- .instagram-img end -->
											</li>
										</ul><!-- .slick-slider end -->
									</div><!-- .slider-instagram-feed end -->
									
								</div><!-- .col-md-12 end -->
							</div><!-- .row end -->
						</div><!-- .container-fluid end -->
				
					</div><!-- .section-content end -->
				
				</div><!-- .section-flat end -->

			</div><!-- #content-wrap -->

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php require_once 'includes/footer.php'; ?>

		<div class="side-panel-menu">
			<a class="logo logo-side-panel" href="index-default.html">
				<img src="images/logo.jpeg" alt="">
				<h3><span class="colored">IT Geeks</span></h3>
				<span>Web Services</span>
			</a><!-- .logo end -->
			<div class="mobile-side-panel-menu">
				<ul id="menu-mobile" class="menu-mobile">

				</ul><!-- .mobile-menu-categories end -->
			</div><!-- .mobile-side-panel-menu end -->
			<div class="side-panel-close">
				<div class="hamburger hamburger--slider is-active">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div><!-- .side-panel-close end -->
		</div><!-- .side-panel-menu end -->

	</div><!-- #full-container end -->

	<a class="scroll-top-icon scroll-top" href="javascript:;"><i class="fa fa-angle-up"></i></a>
	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/jRespond.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/superfish.js"></script>
	<script src="scss/slick/slick.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scrollIt.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/countrySelect.min.js"></script>
	<script src='js/functions.js'></script>
	<script src="js/datepicker.min.js"></script>

    <!-- Include English language -->
    <script src="js/i18n/datepicker.en.js"></script>
    <script src="js/jquery.blockUI.js"></script>
    
    <link rel="stylesheet" href="css/jquery.auto-complete.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <script src="js/jquery.auto-complete.js"></script>
    <script src="js/daterangepicker.js"></script>
    <style>
    #fromer::after{
        content: "\f077";
      font-family: "Font Awesome 5 Free";
      padding: 0 8px;
      font-weight: 700;
      font-size: 14px;
      position: relative;
      top: 1px;
      color: #aaa;
      transform: rotate(90deg);
    }    
</style>
    <script>
        var airports = '';
		var legs = "1";
		var cabin_selected = "Economy";
		var departure,returning;

        $.post("airports.json",{op:""},function(res){
            airports = res;
    //        console.log(airports);
        },'json')
        var day = new Date();
        // console.log(day); 

        var nextDay = new Date(day);
        nextDay.setDate(day.getDate() + 3);
        // console.log(nextDay); 
        
        var dd = $('#departure').datepicker({
            language: 'en',
            dateFormat:"M d, yyyy",
            position: "top left",
            toggleSelected: false,
            range:true,
            onSelect:function(formattedDate, date, inst)
            {
				departure = new Date(date[0]).toLocaleString('en-US',{timeZone:'Europe/Paris'});
				departure = new Date(departure).toISOString();
				returning = (date.length == 2)?new Date(date[1]).toLocaleString('en-US',{timeZone:'Europe/Paris'}):"";
				returning = (date.length == 2)?new Date(returning).toISOString():"";
				// console.log(new Date(date[0]).toISOString())

				console.log("departure is",departure);
				console.log(departure,returning);
            },
            multipleDates: true,
            multipleDatesSeparator:" - ",
            minDate: new Date() // Now can select only dates, which goes after today
        }).data('datepicker');
		dd.selectDate([day,nextDay]);
		

		var dd2 = $('.one_way_departure').datepicker({
            language: 'en',
            dateFormat:"M d, yyyy",
            position: "top left",
            toggleSelected: false,
            onSelect:function(formattedDate, date, inst)
            {
				departure = new Date(date).toLocaleString('en-US',{timeZone:'Europe/Paris'});
				departure = new Date(departure).toISOString();
				// returning = (date.length == 2)?new Date(date[1]).toISOString():"";
				// console.log(new Date(date[0]).toISOString())
				console.log(departure,returning);
            },
            minDate: new Date() // Now can select only dates, which goes after today
        }).data('datepicker');
        dd2.selectDate([day]);


        

       $(document).ready(function(){
        $('#to').autoComplete({
            minChars: 2,
            source: function(term, suggest){
                term            = term.toLowerCase();
                var choices     = airports;
                var suggestions = [];
                for (i=0; i < choices.length; i++ )
                {
                    if(term.length < 4)
                    {
                        if( (choices[i][1]).toLowerCase().indexOf(term.toLowerCase()) == 0 )
                        {
                            suggestions.push(choices[i]);
                        }
                    }
                    else
                    {
                        if((choices[i][3]).toLowerCase().indexOf(term.toLowerCase()) == 0)
                        {
                            suggestions.push(choices[i]);
                        }
                        else if((choices[i][0]).toLowerCase().indexOf(term.toLowerCase()) == 0)
                        {
                            suggestions.push(choices[i]);
                        }
                    }
                }
                suggest(suggestions);
            },
            renderItem: function (item, search){
//                console.log(item)
                search = search.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
                var re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
                return '<div class="autocomplete-suggestion" data-langname="'+item[0]+'" data-lang="'+item[1]+'" data-val="'+search+'"> '+item[0].replace(re, "<b>$1</b>")+' Airport ('+item[1]+')</div>';
            },
            onSelect: function(e, term, item){
                console.log(e);
                $("#to").val(item.data('langname')+' Airport');
                $("#to").attr("data-selecteddestination",item.data('lang'));
//                $('#from').focus();
            }
        });
           $('#from').autoComplete({
                minChars: 2,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = airports;
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                    {
                        if(term.length < 4)
                        {
                            if((choices[i][1]).toLowerCase().indexOf(term) == 0)
                            {
                                suggestions.push(choices[i]);
                            } 
                        }else{
                            if((choices[i][3]).toLowerCase().indexOf(term) == 0){
                                suggestions.push(choices[i]);
                            }else if((choices[i][0]).toLowerCase().indexOf(term) == 0){
                                suggestions.push(choices[i]);
                            }
                        } 
                         

                    }
                    suggest(suggestions);
                },
                renderItem: function (item, search){
                    search = search.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
                    var re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
                    return '<div class="autocomplete-suggestion" data-langname="'+item[0]+'" data-lang="'+item[1]+'" data-val="'+search+'"> '+item[0].replace(re, "<b>$1</b>")+' Airport ('+item[1]+')</div>';
                },
                onSelect: function(e, term, item){
                    $('#from').val(item.data('langname')+' Airport');
                    $('#from').attr("data-selectedorigin",item.data('lang'));
                    $('#to').focus();
                }
            });
           
           
           });
        function increase_adult()
        {
//            alert($("#adult_count").val());
            $("#adult_count").val(parseInt($("#adult_count").val()) + parseInt(1));
        }
        function decrease_adult()
        {
            if($("#adult_count").val() != 1)
            {
                $("#adult_count").val(parseInt($("#adult_count").val()) - 1);
            }
        }
        function increase_child()
        {
            $("#child_count").val(parseInt($("#child_count").val()) + 1);
        }
        function decrease_child()
        {
            if($("#child_count").val() != 0)
            {
                $("#child_count").val($("#child_count").val() - 1);
            }
        }
        
         $("#send").click( function()
            {
//                    el = $("#flightForm");
//                    $(el).parsley().validate();
                    var resp = true;//$(el).parsley().isValid();
                    if(resp)
                    {
                       $.blockUI({message:"<h5>Checking for flight availability</h5>"})
                        
                        var a_origin      = $("#from").attr("data-selectedorigin")
                        var a_destination = $("#to").attr("data-selecteddestination")
                        var pass = [];
                        for(let x = 0; x<$("#adult_count").val(); x++)
                            {
                                pass.push('ADT')
                            }
                        for(let x = 0; x<$("#child_count").val(); x++)
                            {
                                pass.push('CHD')
                            }
                        console.log(pass);
//                        for(let x = 0; x<$("#form_infant").val(); x++)
//                            {
//                                pass.push('INF')
//                            }
                        $.post("utilities.php",{op:"Flight.packageData",direction:legs,departure:departure,return:returning,origin:a_origin,destination:a_destination,passengers:pass,cabin:cabin_selected},function(res){
                           $.unblockUI();
								console.log(res);
                            if(res.response_code == 0)
                            {
                                window.location = "search.php?ga="+res.response_message;
                            }
                            else
                            {
                                alert(res.response_message);
                            }
                        },'json')
                    }

            })
        function directions(dd)
        {
            legs = dd;
        }
        function updateTraveller()
        {
            $('#form_adult').val($('#adult').val())
            $('#form_children').val($('#children').val())
            $('#form_infant').val($('#infant').val())
            var total = parseInt($('#adult').val())+parseInt($('#children').val())+parseInt($('#infant').val());
            $('#singleElement').val(total+" passenger(s)");
        }
        function preview()
        {
            var classa = $('input[name="radio"]');
//            console.log(classa);
            classa.each(function(ee,yy){
                if($(this).is(":checked"))
                    {
                        cabin_selected = $(this).val();
                        console.log($(this).val());
                    }
            })
            
        }
    </script>
</body>

<!-- Mirrored from tazkarty.itgeeks.info/index-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Aug 2020 00:15:35 GMT -->
</html>
