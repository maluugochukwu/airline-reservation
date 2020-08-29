<?php
include('libs/dbfunctions.php');
$dbobject = new dbobject();

$decrypted_data = $dbobject->DecryptData("mykey",$_GET['ga']);
//echo $decrypted_data;
//$res = $_SESSION['flight'];
function getAirlineName($code)
{
    $dbobject = new dbobject();
    $sql = "SELECT airline_name FROM airline WHERE airline_code = '$code' LIMIT 1";
    $result = $dbobject->db_query($sql);
    
    return $result[0]["airline_name"];
}
function stopJunctions($arr,$stops)
{
    $jj = "";
    $l = 1;
    foreach($arr as $rr)
    {
        if($l == $stops)
        break;

        $jj = $jj.$rr["arrivalAirport"].",";
        $l++;
    }
    $res= substr($jj,0,-1);
    return $res;
}
?>
<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from tazkarty.itgeeks.info/search.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Aug 2020 00:17:08 GMT -->
<head>

	<!-- Meta
	============================================= -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="IT Geeks">
    <!-- description -->
    <meta name="description" content="">
    <!-- keywords -->
    <meta name="keywords" content="">

	<!-- Stylesheets
	============================================= -->
	<link href="css/css-assets.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- Favicon
	============================================= -->
	<link rel="shortcut icon" href="images/general-elements/favicon/favicon.png">
	<link rel="apple-touch-icon" href="images/general-elements/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/general-elements/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/general-elements/favicon/apple-touch-icon-114x114.png">

	<!-- Title
	============================================= -->
	<title>Tazkarty</title>

</head>

<body class="page-single with-sidebar page-search footer-dark">

	<!-- Website Loading
	============================================= -->
	<div id="website-loading">
		<a class="logo logo-loader" href="index-default.html">
			<img src="images/files/logo-header.png" alt="">
			<h3><span class="colored">IT Geeks</span></h3>
			<span>Web Services</span>
		</a><!-- .logo end -->
		<div class="loader">
			<div class="la-ball-pulse la-2x">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div><!-- .loader end -->
	</div><!-- .website-loading end -->

	<!-- Document Full Container
	============================================= -->
	<div id="full-container">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-bar-1" class="header-bar">

				<div class="header-bar-wrap">

					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="hb-content">
									<div class="position-left">
										<ul class="list-info">
											<li>
												<ul class="social-icons x4 grey hover-white icon-only">
													<li><a class="si-youtube" href="javascript:;"><i class="fa fa-youtube"></i><i class="fa fa-youtube"></i></a></li>
													<li><a class="si-twitter" href="javascript:;"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
													</li>
													<li><a class="si-facebook" href="javascript:;"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>
													<li><a class="si-instagramorange" href="javascript:;"><i class="fa fa-instagram"></i><i
																class="fa fa-instagram"></i></a></li>
												</ul><!-- .social-icons end -->
											</li>
											<li>
												<a href="javascript:;">info@itgeeks.info</a>
											</li>
										</ul><!-- .list-info end -->
									</div><!-- .position-left end -->
									<div class="position-right">
										<ul class="list-info">
											<li>00201553968753</li>
											<li><a class="popup-btn-login" href="javascript:;">Login</a></li>
											<li><a class="popup-btn-register" href="javascript:;">Sign Up</a></li>
										</ul><!-- .list-info end -->
									</div><!-- .position-right end -->
								</div><!-- .hb-content end -->

							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .header-bar-wrap -->

			</div><!-- #header-bar-1 end -->

			<div id="header-bar-2" class="header-bar sticky">

				<div class="header-bar-wrap">

					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="hb-content">
									<a class="logo logo-header" href="index-default.html">
										<img src="images/files/logo-header.png" data-logo-alt="images/files/logo-header-alt.png" alt="">
										<h3><span class="colored">IT Geeks</span></h3>
										<span>Web Services</span>
									</a><!-- .logo end -->
									<ul id="menu-main" class="menu-main">
										<li><a href="javascript:;" class="current">Home</a></li>
										<li><a href="javascript:;">Flights</a></li>
										<li><a href="javascript:;">Hotels</a></li>
										<li><a href="javascript:;">Car Rental</a></li>
										<li><a href="javascript:;">Guides</a></li>
										<li>
											<a href="javascript:;">Pages</a>
											<ul class="sub-menu">
												<li><a href="search.html">Search</a></li>
												<li><a href="login.html">Login</a></li>
												<li><a href="register.html">Register</a></li>
												<li><a href="blog-single.html">Blog Single</a></li>
												<li><a href="destination-single.html">Destination Single</a></li>
												<li><a href="booking-hotel-single.html">Booking Hotel Reservation</a></li>
												<li><a href="booking-hotel-payment.html">Booking Hotel Payment</a></li>
												<li><a href="booking-hotel-confirmation.html">Booking Hotel Confirmation</a></li>
												<li><a href="profile-hotel-availability.html">Profile Hotel Availability</a></li>
											</ul><!-- .sub-menu end -->
										</li>
									</ul><!-- #menu-main end -->
									<div class="menu-mobile-btn">
										<div class="hamburger hamburger--slider">
											<span class="hamburger-box">
												<span class="hamburger-inner"></span>
											</span>
										</div>
									</div><!-- .menu-mobile-btn end -->
									<a class="btn-header popup-btn-language-choice btn medium colorful hover-dark ml-30 ml-sm-20 move-top" href="javascript:;">EGP / AR</a>
								</div><!-- .hb-content end -->

							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .header-bar-wrap -->

			</div><!-- #header-bar-2 end -->

		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div id="content-wrap">

				<!-- === Section Flat =========== -->
				<div class="section-flat">

					<div class="section-content">

						<div class="container">
							<div class="row">
								<div class="col-md-12">
									
									<div class="banner-reservation-tabs">
										<ul class="br-tabs">
											<li class="active"><a href="javascript:;">Round Trip</a></li>
											<li><a href="javascript:;">One Way</a></li>
											<li><a href="javascript:;">Multiple Destinations</a></li>
										</ul><!-- .br-tabs end -->
										<ul class="br-tabs-content">
											<li class="active">
												<form class="form-banner-reservation form-inline style-2 form-h-50">
													<div class="form-group">
														<input type="text" name="brPlaceStart" class="form-control" placeholder="From">
														<i class="fas fa-plane"></i>
													</div><!-- .form-group end -->
													<div class="form-group">
														<input type="text" name="brPlaceEnd" class="form-control" placeholder="To">
														<i class="fas fa-plane"></i>
													</div><!-- .form-group end -->
													<div class="form-group">
														<input type="text" name="brTimeStart" class="form-control" id="datepicker-time-start"
															placeholder="2019/09/30">
														<i class="far fa-calendar"></i>
													</div><!-- .form-group end -->
													<div class="form-group">
														<input type="text" name="brTimeEnd" class="form-control" id="datepicker-time-end"
															placeholder="2019/09/30">
														<i class="far fa-calendar"></i>
													</div><!-- .form-group end -->
													<div class="form-group">
														<input type="text" name="brPassengerNumber" class="form-control show-dropdown-passengers"
															placeholder="Passengers">
														<i class="fas fa-user"></i>
														<ul class="list-dropdown-passengers">
															<li>
																<ul class="list-persons-count">
																	<li>
																		<span>Adults:</span>
																		<div class="counter-add-item">
																			<a class="decrease-btn" href="javascript:;">-</a>
																			<input type="text" value="1">
																			<a class="increase-btn" href="javascript:;">+</a>
																		</div><!-- .counter-add-item end -->
																	</li>
																	<li>
																		<span>Childs:</span>
																		<div class="counter-add-item">
																			<a class="decrease-btn" href="javascript:;">-</a>
																			<input type="text" value="0">
																			<a class="increase-btn" href="javascript:;">+</a>
																		</div><!-- .counter-add-item end -->
																	</li>
																</ul><!-- .list-persons-count end -->
															</li>
															<li>
																<ul class="list-select-grade">
																	<li>
																		<label class="radio-container radio-default">
																			<input type="radio" checked="checked" name="radio">
																			<span class="checkmark"></span>
																			Economy Class
																		</label>
																	</li>
																	<li>
																		<label class="radio-container radio-default">
																			<input type="radio" checked="checked" name="radio">
																			<span class="checkmark"></span>
																			Business Class
																		</label>
																	</li>
																	<li>
																		<label class="radio-container radio-default">
																			<input type="radio" checked="checked" name="radio">
																			<span class="checkmark"></span>
																			First Class
																		</label>
																	</li>
																</ul><!-- .list-select-grade end -->
															</li>
															<li>
																<ul class="list-reservation-options">
																	<li>
																		<label class="label-container checkbox-default">
																			<span>
																				Nonstop
																			</span>
																			<input type="checkbox">
																			<span class="checkmark"></span>
																		</label>
																	</li>
																	<li>
																		<label class="label-container checkbox-default">
																			<span>
																				Refundable
																			</span>
																			<input type="checkbox">
																			<span class="checkmark"></span>
																		</label>
																	</li>
																</ul><!-- .list-reservation-options end -->
															</li>
															<li>
																<a class="btn-reservation-passengers btn x-small colorful hover-dark"
																	href="javascript:;">Done</a>
															</li>
														</ul><!-- .list-dropdown-passengers end -->
													</div><!-- .form-group end -->
													<div class="form-group">
														<button type="submit" class="form-control icon"><i class="fas fa-search"></i></button>
													</div><!-- .form-group end -->
												</form><!-- .form-banner-reservation end -->
											</li>
											<li>
												<form class="form-banner-reservation form-inline style-2 form-h-50">
													<div class="form-group">
														<input type="text" name="brPlaceStart" class="form-control" placeholder="From">
														<i class="fas fa-plane"></i>
													</div><!-- .form-group end -->
													<div class="form-group">
														<input type="text" name="brPlaceEnd" class="form-control" placeholder="To">
														<i class="fas fa-plane"></i>
													</div><!-- .form-group end -->
													<div class="form-group">
														<input type="text" name="brTimeStart" class="form-control datepicker-2-time-start"
															placeholder="2019/09/30">
														<i class="far fa-calendar"></i>
													</div><!-- .form-group end -->
													<div class="form-group">
														<input type="text" name="brPassengerNumber" class="form-control show-dropdown-passengers"
															placeholder="Passengers">
														<i class="fas fa-user"></i>
														<ul class="list-dropdown-passengers">
															<li>
																<ul class="list-persons-count">
																	<li>
																		<span>Adults:</span>
																		<div class="counter-add-item">
																			<a class="decrease-btn" href="javascript:;">-</a>
																			<input type="text" value="1">
																			<a class="increase-btn" href="javascript:;">+</a>
																		</div><!-- .counter-add-item end -->
																	</li>
																	<li>
																		<span>Childs:</span>
																		<div class="counter-add-item">
																			<a class="decrease-btn" href="javascript:;">-</a>
																			<input type="text" value="0">
																			<a class="increase-btn" href="javascript:;">+</a>
																		</div><!-- .counter-add-item end -->
																	</li>
																</ul><!-- .list-persons-count end -->
															</li>
															<li>
																<ul class="list-select-grade">
																	<li>
																		<label class="radio-container radio-default">
																			<input type="radio" checked="checked" name="radio">
																			<span class="checkmark"></span>
																			Economy Class
																		</label>
																	</li>
																	<li>
																		<label class="radio-container radio-default">
																			<input type="radio" checked="checked" name="radio">
																			<span class="checkmark"></span>
																			Business Class
																		</label>
																	</li>
																	<li>
																		<label class="radio-container radio-default">
																			<input type="radio" checked="checked" name="radio">
																			<span class="checkmark"></span>
																			First Class
																		</label>
																	</li>
																</ul><!-- .list-select-grade end -->
															</li>
															<li>
																<ul class="list-reservation-options">
																	<li>
																		<label class="label-container checkbox-default">
																			<span>
																				Nonstop
																			</span>
																			<input type="checkbox">
																			<span class="checkmark"></span>
																		</label>
																	</li>
																	<li>
																		<label class="label-container checkbox-default">
																			<span>
																				Refundable
																			</span>
																			<input type="checkbox">
																			<span class="checkmark"></span>
																		</label>
																	</li>
																</ul><!-- .list-reservation-options end -->
															</li>
															<li>
																<a class="btn-reservation-passengers btn x-small colorful hover-dark"
																	href="javascript:;">Done</a>
															</li>
														</ul><!-- .list-dropdown-passengers end -->
													</div><!-- .form-group end -->
													<div class="form-group">
														<button type="submit" class="form-control icon"><i class="fas fa-search"></i></button>
													</div><!-- .form-group end -->
												</form><!-- .form-banner-reservation end -->
											</li>
											<li>
												<div class="multiple-destinations">
													<form class="form-banner-reservation form-inline style-2 form-h-50">
														<div class="form-group">
															<div class="fields-row fields-4">
																<div class="box-field">
																	<input type="text" name="brPlaceStart" class="form-control" placeholder="From">
																	<i class="fas fa-plane rotate-90-pos"></i>
																</div><!-- .box-field end -->
																<div class="box-field">
																	<input type="text" name="brPlaceEnd" class="form-control" placeholder="To">
																	<i class="fas fa-plane rotate-90-neg"></i>
																</div><!-- .box-field end -->
																<div class="box-field">
																	<input type="text" name="brTimeStart" class="form-control datepicker-2-time-start"
																		placeholder="2019/09/30">
																	<i class="far fa-calendar"></i>
																</div><!-- .box-field end -->
																<div class="box-field">
																	<input type="text" name="brPassengerNumber"
																		class="form-control show-dropdown-passengers" placeholder="Passengers">
																	<i class="fas fa-user"></i>
																	<ul class="list-dropdown-passengers">
																		<li>
																			<ul class="list-persons-count">
																				<li>
																					<span>Adults:</span>
																					<div class="counter-add-item">
																						<a class="decrease-btn" href="javascript:;">-</a>
																						<input type="text" value="1">
																						<a class="increase-btn" href="javascript:;">+</a>
																					</div><!-- .counter-add-item end -->
																				</li>
																				<li>
																					<span>Childs:</span>
																					<div class="counter-add-item">
																						<a class="decrease-btn" href="javascript:;">-</a>
																						<input type="text" value="0">
																						<a class="increase-btn" href="javascript:;">+</a>
																					</div><!-- .counter-add-item end -->
																				</li>
																			</ul><!-- .list-persons-count end -->
																		</li>
																		<li>
																			<ul class="list-select-grade">
																				<li>
																					<label class="radio-container radio-default">
																						<input type="radio" checked="checked" name="radio">
																						<span class="checkmark"></span>
																						Economy Class
																					</label>
																				</li>
																				<li>
																					<label class="radio-container radio-default">
																						<input type="radio" checked="checked" name="radio">
																						<span class="checkmark"></span>
																						Business Class
																					</label>
																				</li>
																				<li>
																					<label class="radio-container radio-default">
																						<input type="radio" checked="checked" name="radio">
																						<span class="checkmark"></span>
																						First Class
																					</label>
																				</li>
																			</ul><!-- .list-select-grade end -->
																		</li>
																		<li>
																			<ul class="list-reservation-options">
																				<li>
																					<label class="label-container checkbox-default">
																						<span>
																							Nonstop
																						</span>
																						<input type="checkbox">
																						<span class="checkmark"></span>
																					</label>
																				</li>
																				<li>
																					<label class="label-container checkbox-default">
																						<span>
																							Refundable
																						</span>
																						<input type="checkbox">
																						<span class="checkmark"></span>
																					</label>
																				</li>
																			</ul><!-- .list-reservation-options end -->
																		</li>
																		<li>
																			<a class="btn-reservation-passengers btn x-small colorful hover-dark"
																				href="javascript:;">Done</a>
																		</li>
																	</ul><!-- .list-dropdown-passengers end -->
																</div><!-- .box-field end -->
															</div><!-- .fields-row end -->
														</div><!-- .form-group end -->
														<div class="form-group">
															<button type="submit" class="form-control icon"><i class="fas fa-search"></i></button>
														</div><!-- .form-group end -->
													</form><!-- .form-banner-reservation end -->
													<a class="btn-multiple-destinations btn x-small colorful hover-dark" href="javascript:;">
														<i class="fas fa-plus"></i>
														Add Another Flight
													</a>
												</div><!-- .multiple-destinations end -->
											</li>
										</ul><!-- .br-tabs-content end -->
									</div><!-- .banner-reservation-tabs end -->

								</div><!-- .col-md-12 end -->
								<div class="col-md-12">
									
									<ul class="breadcrumb">
										<li><a href="index.html"><i class="fa fa-home"></i></a></li>
										<li><a href="javascript:;">Flights</a></li>
										<li class="active">Cairo to Sharm El Sheik Flights</li>
									</ul><!-- .breadcrumb end -->
									<div class="box-banner">
										<a href="javascript:;" class="mb-50"><img src="images/files/box-banner/img-1.jpg" alt=""></a>
									</div><!-- .box-banner end -->
									
								</div><!-- .col-md-12 end -->
								<div class="col-md-12">
									
									<div class="page-single-content sidebar-left">
										
										<div class="row">
											<div class="col-lg-8 col-md-12 col-lg-push-4">
										
												<div class="content-main" >
													<div class="block-content-2">
														<div class="trip-sorter">
															<span>Sort By:</span>
															<ul class="list-trip-sorter">
																<li>
																	<div class="list-sorter-single">
																		<select class="options-select2">
																			<option selected disabled hidden>Departure</option>
																			<option>Option 1</option>
																			<option>Option 2</option>
																			<option>Option 3</option>
																			<option>Option 4</option>
																			<option>Option 5</option>
																		</select>
																		<i class="fa fa-sort"></i>
																	</div><!-- .list-sorter-single end -->
																</li>
																<li>
																	<div class="list-sorter-single">
																		<select class="options-select2">
																			<option selected disabled hidden>Arrival</option>
																			<option>Option 1</option>
																			<option>Option 2</option>
																			<option>Option 3</option>
																			<option>Option 4</option>
																			<option>Option 5</option>
																		</select>
																		<i class="fa fa-sort"></i>
																	</div><!-- .list-sorter-single end -->
																</li>
																<li>
																	<div class="list-sorter-single">
																		<select class="options-select2">
																			<option selected disabled hidden>Duration</option>
																			<option>Option 1</option>
																			<option>Option 2</option>
																			<option>Option 3</option>
																			<option>Option 4</option>
																			<option>Option 5</option>
																		</select>
																		<i class="fa fa-sort"></i>
																	</div><!-- .list-sorter-single end -->
																</li>
																<li>
																	<div class="list-sorter-single">
																		<select class="options-select2">
																			<option selected disabled hidden>Price</option>
																			<option>Option 1</option>
																			<option>Option 2</option>
																			<option>Option 3</option>
																			<option>Option 4</option>
																			<option>Option 5</option>
																		</select>
																		<i class="fa fa-sort"></i>
																	</div><!-- .list-sorter-single end -->
																</li>
															</ul><!-- .list-stip-sorter end -->
														</div><!-- .trip-sorter end -->
													</div><!-- .block-content-2 end -->
													<div id="flight_segment">
                                                        
                                                    </div>
												</div><!-- .content-main end -->
										
											</div><!-- .col-lg-8 end -->
											<div class="col-lg-4 col-md-12 col-lg-pull-8">
										
												<div class="sidebar style-1">
													<div class="box-widget">
														<h5 class="box-title">Price Range</h5>
														<div class="box-content">
															<div class="slider-dragable-range slider-range-price">
																<input type="text" class="price">
																<div class="slider-range" data-slider-min-value="0" data-slider-max-value="99" data-range-start-value="20" data-range-end-value="55" data-slider-value-sign="EGP "></div>
															</div><!-- .slider-dragable-price end -->															
														</div><!-- .box-content end -->
													</div><!-- .box-widget end -->
													<div class="box-widget">
														<h5 class="box-title">Stops</h5>
														<div class="box-content">
															<ul class="check-boxes-custom list-checkboxes">
																<li>
																	<label class="label-container checkbox-default">All
																		<input type="checkbox">
																		<span class="checkmark"></span>
																	</label>
																</li>
																<li>
																	<label class="label-container checkbox-default">Non Stop
																		<input type="checkbox">
																		<span class="checkmark"></span>
																	</label>
																</li>
																<li>
																	<label class="label-container checkbox-default">1 Stop
																		<input type="checkbox">
																		<span class="checkmark"></span>
																	</label>
																</li>
																<li>
																	<label class="label-container checkbox-default">2 Stops
																		<input type="checkbox">
																		<span class="checkmark"></span>
																	</label>
																</li>
															</ul><!-- .check-boxes-custom end -->
														</div><!-- .box-content end -->
													</div><!-- .box-widget end -->
													<div class="box-widget">
														<h5 class="box-title">AirLine</h5>
														<div class="box-content">
															<ul class="check-boxes-custom list-checkboxes">
																<li>
																	<label class="label-container checkbox-default">All
																		<input type="checkbox">
																		<span class="checkmark"></span>
																	</label>
																</li>
																<li>
																	<label class="label-container checkbox-default">Egypt Air
																		<input type="checkbox">
																		<span class="checkmark"></span>
																	</label>
																</li>
															</ul><!-- .check-boxes-custom end -->
														</div><!-- .box-content end -->
													</div><!-- .box-widget end -->
													<div class="box-widget">
														<h5 class="box-title">Airport</h5>
														<div class="box-content">
															<ul class="check-boxes-custom list-checkboxes">
																<li>
																	<label class="label-container checkbox-default">All
																		<input type="checkbox">
																		<span class="checkmark"></span>
																	</label>
																</li>
															</ul><!-- .check-boxes-custom end -->
														</div><!-- .box-content end -->
													</div><!-- .box-widget end -->
													<div class="box-widget">
														<h5 class="box-title">Departure</h5>
														<div class="box-content">
															<div class="slider-dragable-range slider-range-price">
																<input type="text" class="price">
																<div class="slider-range" data-slider-min-value="0" data-slider-max-value="99" data-range-start-value="0"
																	data-range-end-value="60" data-slider-value-sign="EGP "></div>
															</div><!-- .slider-dragable-range end -->
														</div><!-- .box-content end -->
													</div><!-- .box-widget end -->
													<div class="box-widget">
														<h5 class="box-title">Return</h5>
														<div class="box-content">
															<div class="slider-dragable-range slider-range-price">
																<input type="text" class="price">
																<div class="slider-range" data-slider-min-value="0" data-slider-max-value="99" data-range-start-value="5"
																	data-range-end-value="40" data-slider-value-sign="EGP "></div>
															</div><!-- .slider-dragable-price end -->
														</div><!-- .box-content end -->
													</div><!-- .box-widget end -->
													<div class="box-widget">
														<h5 class="box-title">Duration</h5>
														<div class="box-content">
															<div class="slider-dragable-range slider-range-time">
																<div class="time">
																	<span class="slider-time-1">8:00 AM</span> - <span class="slider-time-2">3:00 PM</span>
																</div><!-- .time end -->
																<div class="sliders_step1">
																	<div class="slider-range" data-time-start-minutes="480" data-time-end-minutes="900"></div>
																</div>
															</div><!-- .slider-range-time end -->
														</div><!-- .box-content end -->
													</div><!-- .box-widget end -->
												</div><!-- .sidebar end -->
										
											</div><!-- .col-lg-4 end -->
										</div><!-- .row end -->

									</div><!-- .page-single-content end -->
									
								</div><!-- .col-md-12 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .section-flat end -->

			</div><!-- #content-wrap -->

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer">

			<div id="footer-bar-1" class="footer-bar text-white">

				<div class="footer-bar-wrap">

					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="fb-row">

									<div class="row">
										<div class="col-md-3">

											<img class="mb-30 logo-footer" src="images/files/logo-header-alt.png" alt="">
											<p>
												Consectetur adipisicing elit, sed do eiusmo incididunt ut labore et dolore magna aliqua. Ut enim minim
												veniam, Lorem ipsum dolor sit amet, sed do eiusmo incididunt.
											</p>

										</div><!-- .col-md-3 end -->
										<div class="col-md-3 mt-md-50">
											<h4>
												Gallery
											</h4>
											<ul class="list-gallery-thumbs">
												<li><a href="javascript:;" class="img-bg"><img src="images/files/instagram-feed/img-1.jpg" alt=""></a></li>
												<li><a href="javascript:;" class="img-bg"><img src="images/files/instagram-feed/img-2.jpg" alt=""></a></li>
												<li><a href="javascript:;" class="img-bg"><img src="images/files/instagram-feed/img-3.jpg" alt=""></a></li>
												<li><a href="javascript:;" class="img-bg"><img src="images/files/instagram-feed/img-4.jpg" alt=""></a></li>
												<li><a href="javascript:;" class="img-bg"><img src="images/files/instagram-feed/img-5.jpg" alt=""></a></li>
												<li><a href="javascript:;" class="img-bg"><img src="images/files/instagram-feed/img-6.jpg" alt=""></a></li>
											</ul><!-- .list-gallery-thumbs -->
										</div><!-- .col-md-3 end -->
										<div class="col-md-3 mt-md-50">
											<h4>
												Contact Us
											</h4>
											<ul class="list-contact-info">
												<li>
													<i class="fas fa-envelope"></i>
													<div class="info-content">
														<span>info@itgeeks.info</span>
													</div><!-- .info-content end -->
												</li>
												<li>
													<i class="fas fa-phone-alt"></i>
													<div class="info-content">
														<span>00201553968753</span>
													</div><!-- .info-content end -->
												</li>
												<li>
													<i class="fas fa-map-marker-alt"></i>
													<div class="info-content">
														<span>Mansoura, Suez Canal Street, Green Plaza Tower, Entrance 2, third floor</span>
													</div><!-- .info-content end -->
												</li>
											</ul><!-- .list-contact-info end -->
										</div><!-- .col-md-3 end -->
										<div class="col-md-3 mt-md-50">
											
											<h4>
												Stay In Touch
											</h4>
											<form class="form-newsletter-register form-inline form-h-50">
												<div class="form-group">
													<div class="box-field">
														<input type="text" name="email" class="form-control" placeholder="Enter Your Email Address">
														<button type="submit" class="form-control icon"><i class="fas fa-long-arrow-alt-up"></i></button>
													</div><!-- .box-field end -->
												</div><!-- .form-group end -->
												<span class="form-note">Enter your email address for promotions, news and updates.</span>
											</form><!-- .form-newsletter-register end -->
											<ul class="social-icons x5 white hover-colorful icon-only mt-10">
												<li><a class="si-youtube" href="javascript:;"><i class="fa fa-youtube"></i><i class="fa fa-facebook"></i></a></li>
												<li><a class="si-twitter" href="javascript:;"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
												</li>
												<li><a class="si-facebook" href="javascript:;"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i></a></li>
												<li><a class="si-instagramorange" href="javascript:;"><i class="fa fa-instagram"></i><i
															class="fa fa-instagram"></i></a></li>
											</ul><!-- .social-icons end -->

										</div><!-- .col-md-3 end -->
									</div><!-- .row end -->

								</div><!-- .fb-row end -->

							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .footer-bar-wrap -->

			</div><!-- #footer-bar-1 end -->

			<div id="footer-bar-2" class="footer-bar text-white">

				<div class="footer-bar-wrap">

					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="fb-row">
									<div class="copyrights-message">
										<span>All right reserved to</span> <a href="http://itgeeks.info/" target="_blank">itGeeks</a> <span>©2020</span>
									</div><!-- .copyrights-message end -->

								</div><!-- .fb-row end -->

							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .footer-bar-wrap -->

			</div><!-- #footer-bar-2 end -->

		</footer><!-- #footer end -->

		<div class="side-panel-menu">
			<a class="logo logo-side-panel" href="index-default.html">
				<img src="images/files/logo-header-alt.png" alt="">
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

	<div class="popup-preview popup-preview-2 popup-preview-register">
		<div class="popup-bg"></div>
	
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
	
					<div class="popup-content">
						<div class="block-content">
							<div class="popup-close hamburger hamburger--slider is-active">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</div><!-- .popup-close -->
							<div class="block-title">
								<h3>Join Tazkarty for Free</h3>
								<h5>Access various of online classes in design, business, and more!</h5>
							</div><!-- .block-title end -->
							<div class="content">
								<div class="left">
									<form id="form-register" class="rounded">
										<div class="form-content">
											<div class="form-group">
												<label for="registerFullname">Full Name</label>
												<input type="text" name="jaName" id="registerFullname" class="form-control" placeholder="">
											</div><!-- .form-group end -->
											<div class="form-group">
												<label for="registerEmail">Email Address</label>
												<input type="text" name="registerEmail" id="registerEmail" class="form-control" placeholder="">
											</div><!-- .form-group end -->
											<div class="form-group">
												<div class="box-field">
													<label for="registerPassword">Password</label>
													<input type="password" name="registerPassword" id="registerPassword" class="form-control" placeholder="">
												</div><!-- .box-field end -->
												<div class="box-field">
													<label for="registerPasswordConfirm">Confirm Password</label>
													<input type="password" name="registerPasswordConfirm" id="registerPasswordConfirm" class="form-control" placeholder="">
												</div><!-- .box-field end -->
											</div><!-- .form-group end -->
											<div class="form-group">
												<input type="submit" class="form-control rounded" value="SignUp">
												<label class="label-container checkbox-default">
													<span>By clicking this, you are agree to to our <a href="javascript:;">terms of use</a> and <a href="javascript:;">privacy policy</a> including the use of cookies.</span>
													<input type="checkbox">
													<span class="checkmark"></span>
												</label>
											</div><!-- .form-group end -->
										</div><!-- .form-content end -->
									</form><!-- #form-register end -->									
								</div><!-- .left end -->
								<div class="right">
									<h5>Or Sign up With Your Socials</h5>
									<ul class="list-btns-social rounded">
										<li>
											<a class="btn-social bs-google-plus" href="javascript:;">
												<i class="fab fa-google-plus-g"></i>
												<span>google</span>
											</a>
										</li>
										<li>
											<a class="btn-social bs-facebook" href="javascript:;">
												<i class="fab fa-facebook-square"></i>
												<span>facebook</span>
											</a>
										</li>
										<li>
											<a class="btn-social bs-twitter" href="javascript:;">
												<i class="fab fa-twitter"></i>
												<span>twitter</span>
											</a>
										</li>
									</ul><!-- .list-btns-social end -->
								</div><!-- .right end -->
							</div><!-- .content end -->
						</div><!-- .block-content end -->
					</div><!-- .popup-content end -->
	
				</div><!-- .col-md-8 end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div><!-- .popup-preview -->

	<div class="popup-preview popup-preview-2 popup-preview-login">
		<div class="popup-bg"></div>
	
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
	
					<div class="popup-content">
						<div class="block-content">
							<div class="block-title">
								<h3>Welcome Back to Tazkarty</h3>
								<h5>Sign in to your account to continue using Tazkarty</h5>
							</div><!-- .block-title end -->
							<div class="content">
								<div class="left">
									<form id="form-login" class="rounded">
										<div class="form-content">
											<div class="form-group">
												<label for="loginUserEmail">Email Adress / Username</label>
												<input type="text" name="jaName" id="loginUserEmail" class="form-control"
													placeholder="">
											</div><!-- .form-group end -->
											<div class="form-group">
												<label for="loginPassword">Password</label>
												<input type="password" name="loginPassword" id="loginPassword"
													class="form-control" placeholder="">
											</div><!-- .form-group end -->
											<div class="form-group">
												<input type="submit" class="form-control rounded" value="Login">
												<label class="label-container checkbox-default">
													<span>Remember Me</span>
													<input type="checkbox">
													<span class="checkmark"></span>
												</label>
												<a href="javascript:;">Forgot Password?</a>
											</div><!-- .form-group end -->
										</div><!-- .form-content end -->
									</form><!-- #form-login end -->
								</div><!-- .left end -->
								<div class="right">
									<h5>Or Sign up With Your Socials</h5>
									<ul class="list-btns-social rounded">
										<li>
											<a class="btn-social bs-google-plus" href="javascript:;">
												<i class="fab fa-google-plus-g"></i>
												<span>google</span>
											</a>
										</li>
										<li>
											<a class="btn-social bs-facebook" href="javascript:;">
												<i class="fab fa-facebook-square"></i>
												<span>facebook</span>
											</a>
										</li>
										<li>
											<a class="btn-social bs-twitter" href="javascript:;">
												<i class="fab fa-twitter"></i>
												<span>twitter</span>
											</a>
										</li>
									</ul><!-- .list-btns-social end -->
								</div><!-- .right end -->
								<div class="foot-msg">
									<span class="msg">Not a member yet? <a href="javascript:;">Sign up</a> for free</span>
									<div class="popup-close hamburger hamburger--slider is-active">
										<span class="hamburger-box">
											<span class="hamburger-inner"></span>
										</span>
									</div><!-- .popup-close -->
								</div><!-- .foot-msg end -->
							</div><!-- .content end -->
						</div><!-- .block-content end -->
					</div><!-- .popup-content end -->
	
				</div><!-- .col-md-8 end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div><!-- .popup-preview -->

	<div class="popup-preview popup-preview-2 popup-language-choice">
		<div class="popup-bg"></div>
	
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
	
					<div class="popup-content">
						<div class="block-content">
							<div class="content">
								<h5>Choose Language</h5>
								<form class="form-language-choice form-inline style-2">
									<div class="form-group">
										<div class="list-select-options">
											<input type="text" id="select-language" readonly>
											<input type="hidden" id="select-language_code">
											<i class="fa fa-sort"></i>
										</div><!-- .list-select-options end -->
									</div><!-- .form-group end -->
									<div class="form-group">
										<div class="list-select-options">
											<select class="options-select2">
												<option selected>Egyptian Pound (EGP)</option>
												<option>Saudi Real (SAR)</option>
											</select>
											<i class="fa fa-sort"></i>
										</div><!-- .list-select-options end -->
									</div><!-- .form-group end -->
									<div class="form-group">
										<button type="submit" class="form-control">Save</button>
									</div><!-- .form-group end -->
								</form><!-- .form-language-choice end -->
								<div class="popup-close hamburger hamburger--slider is-active">
									<span class="hamburger-box">
										<span class="hamburger-inner"></span>
									</span>
								</div><!-- .popup-close -->
							</div><!-- .content end -->
						</div><!-- .block-content end -->
					</div><!-- .popup-content end -->
	
				</div><!-- .col-md-8 end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div><!-- .popup-preview -->

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
    <script src="js/sweet_alerts.js"></script>
    <script src="js/jquery.blockUI.js"></script>
</body>

<!-- Mirrored from tazkarty.itgeeks.info/search.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Aug 2020 00:17:10 GMT -->
</html>
<script>
        var json_data     =  <?php echo $decrypted_data; ?>;
        var megaData      = "";
        var filtered_megaData      = "";
        var pricesArr     = [];
        var uniqueAirline = [];
        var session = "";
        var minPrice = "";
        var maxPrice = "";
        
         let my_range = $("#example_id").data("ionRangeSlider");
         var airportArr = "";
         var cityArr = "";
         var airlineArr = "";
        
        
        
        if(localStorage.getItem('airports') == null)
        {
//            $.post("utilities.php",{op:"Flight.getAllAirports"},function(res){
//                 localStorage.setItem("airports",JSON.stringify(res));
//                 airportArr = res;
//             },'json')
            $.post("airports.json",{},function(res){
                 localStorage.setItem("airports",JSON.stringify(res));
                 airportArr = res;
             },'json')
        }else{
            airportArr = JSON.parse(localStorage.getItem('airports'));
        }
        
        if(localStorage.getItem('cities') == null)
        {
            $.post("cities.json",{},function(res){
                 localStorage.setItem("cities",JSON.stringify(res));
                 cityArr = res;
             },'json')
        }else{
            cityArr = JSON.parse(localStorage.getItem('cities'));
        }
       
        if(localStorage.getItem('airlines') == null)
        {
            $.post("airlines.json",{},function(res){
                 localStorage.setItem("airlines",JSON.stringify(res));
                 airlineArr = res;
             },'json')
        }else{
            airlineArr = JSON.parse(localStorage.getItem('airlines'));
        }
           

        function relocate_web()
        {
            window.location = "index.php";
        }
        function getCookie(cname) {
          var name = cname + "=";
          var decodedCookie = decodeURIComponent(document.cookie);
          var ca = decodedCookie.split(';');
          for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
              c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
            }
          }
          return "";
        }
        function doFilter(data)
        {
            $.blockUI({message:'Filtering Search result...'});
            airlineFilter(data).then(function(filter){
                return stopFilter(filter); 
            }).then(function(filter2){
                priceFilter(filter2).then(function(filter3){
                    $.unblockUI();
                    if(filter3.length < 1)
                       {
                            $("#flight_segment").html("<h3>No flight matched your search filter. Try again</h3>");
                       }else{
                           $("#flight_segment").html(uidisplay(filter3))
                       }

                })
            }).catch(function(rr){

            })
        }
        
        function get_airport(code,part)
         {
             let b = "";
//             console.log(airportArr)
             let q = airportArr.filter((it)=>{
                 return it[1] == code;
             });
//             console.log(q)
             if(part == "name")
                 {
                     return q[0][0];
                 }
             else if(part == "country")
                 {
                     return q[0][2];
                 }
             else if(part == "city")
                 {
                     return q[0][3];
                 }
         }
         function get_city(code,id)
         {
             // check first if the cookie that stores cities is available
             var dsp = "";
             
              $.post("utilities.php",{op:"Flight.getACity",codes:code},function(res){ 
                dsp = res;
                  
            }).done((ee)=>{
                  $("#"+id).text(ee);
              }).always(()=>{
                 
             });             
         }
        
            // 3. Update range slider content (this will change handles positions)
            
//        json_data = JSON.stringify(json_data);
        
         
//        console.log(allAirport);
        function refreshSession(tn)
        {
            $.unblockUI();
            if(tn == "yes")
            {
                location.reload();
            }else
            {
                window.location = "index.php";
            }
        }
        function manageSession()
        {
            var hasSessionStorage = ("sessionStorage" in window && window.sessionStorage);
            
            if(hasSessionStorage)
               {
                   var sessionObj = JSON.parse(sessionStorage.getItem("sessionObj"));
                   console.log(sessionObj);
//                   console.log(sessionObj.session);
                   if(sessionObj  != null)
                   {
                       var currentDate  = new Date();//.setMinutes(new Date().getMinutes() + 30);
                       var sessionTime  = sessionObj.expires;
                       if((currentDate.getTime() / 1000) > sessionTime)
                          {
                                sessionStorage.removeItem("sessionObj");
                                return undefined;
                          }
                        else
                          {
                              
                                return sessionObj.session;
                          }
                   }else
                   {
                       return undefined;
                   }
               }
            else
           {
               swal({
                   'icon':'warning',
                   'text':'Your Browser is outdated, kindly upgrade your browser to the latest version'
               }).then((val)=>{
                   window.location = "index.php";
               })
           }
        }
        
        if(manageSession() == undefined)
            {
                doFlightSearch("");
            }else{
                doFlightSearch(manageSession());
            }
        
        
        
        function doFlightSearch(session_param)
        {
            
            $.blockUI({message:'<h5>Loading your trip...</h5><small>Please don\'t refresh</small> '});
                $.post("utilities.php?sess="+ session_param,json_data,function(res,status,xhr)
               {
                    $.unblockUI();

                    if(res.response_code == 0)
                        {
                            var cookie_inteval = setInterval(()=>{
                                if(Math.round(new Date().getTime() / 1000) > res.expire_time && res.session != "")
                                {

                                    $.post("utilities.php",{op:"Flight.signOut",session:res.session},function(reo){
                                        sessionStorage.removeItem("sessionObj");
                                    });
                                    $.blockUI({message:'<h5>Your session has expired!</h5><div style="padding:10px"><button style="margin-right:15px" onclick="refreshSession(\'yes\')" class="btn btn-success">Refresh Session</button><button onclick="relocate_web()" class="btn btn-danger">Quit</button></div>'});
                                    clearInterval(cookie_inteval);
                                }
                            },2000)


                            megaData          = res.result;
                            filtered_megaData = res.result;

                            session = res.session;
                            var fdser = {"session":res.session,"expires":res.expire_time};
                            sessionStorage.setItem("sessionObj",JSON.stringify(fdser));

                                if(res.result == null || res.result == "")
                                {
                                    swal({
                                       'icon':'error',
                                       'text':'We encountered a problem fetching flight search.\n Check your internet connection and try again later '
                                   }).then((val)=>{
                                       window.location = "index.php";
                                   })
                                }
                                else if(megaData.length > 0)
                                {
                                   $("#flight_segment").html(uidisplay(megaData))
                                    list = uniqueAirline.filter(function (x, i, a) {
                                            return a.indexOf(x) == i; 
                                        });
                                    var airlist ="";
                                    var sd = 0;
                                    list.forEach((item)=>{
                                        var ddss = getAirline(item,"kew"+sd)
                                       airlist = airlist+`<div><label for="${sd}"><input type="checkbox" onclick="javascript:doFilter(megaData)" value="${item}" class="airline_class" id="${sd}"  /><span id="kew${sd}">${ddss}</span> </label></div>`; 
                                        sd++;
                                    })
                                    $("#filterDiv").html(airlist)

                                    $("#example_id").ionRangeSlider({
                                    type:'double',
                                    onStart:function(data)
                                    {
                                        console.log(data);
                                        minPrice = Math.min(... pricesArr);
                                        maxPrice = Math.max(... pricesArr);
                                    },
                                    min:Math.min(... pricesArr),
                                    max:Math.max(... pricesArr),
                                    onFinish:function(ee){
                                        minPrice = ee.from;
                                        maxPrice = ee.to;
                                        doFilter(megaData)
                                        }
                                    }); 
                                }else{
                                    $.post("utilities.php",{op:"Flight.signOut",session:res.session},function(reo){
                                        sessionStorage.removeItem("sessionObj");
                                    });
                                    swal({
                                       'icon':'error',
                                       'text':'There is no flight available..\n Try again later '
                                   }).then((val)=>{
                                       window.location = "index.php";
                                   })
                                }

                        }
                        else if(res.response_code == 615)
                        {
                            swal({
                                   'icon':'warning',
                                    'title':'We encountered a problem',
                                   'text':res.message+'\n Click OK to try again',
                                    'buttons': true,
                               }).then((val)=>{
                                if(val)
                                    {
                                       location.reload(); 
                                    }else{
                                        window.location = "index.php";
                                    }

                               })
                        }
                        else
                        {
                            $.unblockUI();
                            swal({
                                   'icon':'warning',
                                    'title':'We encountered a problem',
                                   'text':res.message+'\n Click OK to try again',
                                    'buttons': true,
                               }).then((val)=>{
                                if(val)
                                    {
                                       location.reload(); 
                                    }else{
                                        window.location = "index.php";
                                    }

                               })
        //                    $("#flight_segment").html("<h4>"+res.message+"</h4>");
                        }


                },'json').fail(function() {
                    swal({
                           'icon':'error',
                           'text':'Could not connect to global airline system. \n Try again later '
                       }).then((val)=>{
                           window.location = "index.php";
                       })
                  }).always(function(rr){
                    $.unblockUI();
                  })
        
        }
        
        
        
        let stopFilter = function(data)
        {
            return new Promise(function(resolve,reject){
                var idArr = [];
            $(".stop_filter").each(function() 
            {
                if($(this).is(":checked"))
                {
                    idArr.push($(this).val());
                }
              
            });
            
            if(idArr.length >= 1)
                {
                    var keep = [];
                    idArr.forEach((singl)=>{
                        var dd =  data.filter((item)=>{
                            if(singl != 1 && singl != 2)
                            {
                                if(item['route']['outBound'].length > 2)
                                    {
                                        keep.push(item);
                                        return true;
                                    }
                            }
                            else
                            {
                                if(item['route']['outBound'].length == singl)
                                {
                                    keep.push(item);
                                    return true;
                                }
                            }
                        });
                    });
                    filtered_megaData = keep;
                    resolve(filtered_megaData)
                    console.log(filtered_megaData,"from stop filter")
                }else{
                   filtered_megaData = data;
                   resolve(filtered_megaData)
                }
                
            })
        }
        
        function priceFilter(data)
        {
            return new Promise(function(resolve,reject){
                let jj = data.filter((item)=>{
                console.log("oya na")
                return (item['price']['totalFare'] >= minPrice) && (item['price']['totalFare'] <= maxPrice);
                // return (item['price']['totalFare'] >= minPrice);
                });
            
            console.log(jj," from pricefilter")
            filtered_megaData = jj;
             resolve(filtered_megaData);
            })
            
        }
        function departureTimeFilter(data,minTime,maxTime)
        {
            var  keep = data.filter((item)=>{
                var a = item['route']['outBound'][0]['departureDate'];
                var s = a.split('T');
                var deptTime =  s[1].substr(0,2);
                return ((deptTime >= minTime) || (deptTime <= maxTime));
            })
            return keep;
        }
        function details(el)
        {
//            $(el).find(".flight-details").toggle();
            $(el).parent().next().toggle();
        }
        let airlineFilter = function(data)
        {
            return new Promise(function(resolve,reject){
                var idArr = [];
                $(".airline_class").each(function() 
                {
                    if($(this).is(":checked"))
                    {
                        idArr.push($(this).val());
                    }
                });
                console.log("ids "+idArr)
                if(idArr.length >= 1)
                    {
                        var keep = [];
                        idArr.forEach((singl)=>{
                            var dd =  data.filter((item)=>{
                                if(singl == item['route']['outBound'][0]["operatingAirline"])
                                {
                                    keep.push(item);
                                    return true;
                                }
                                else if(item['route']['inBound'].length >= 1)
                                {
                                    if(singl == item['route']['inBound'][0]["operatingAirline"])
                                    {
                                        keep.push(item);
                                        return true;
                                    }
                                }
                            });
                        });
                        filtered_megaData = keep;
                        console.log(filtered_megaData,"from airline filter")
                        resolve(filtered_megaData);
                    }else{
                        filtered_megaData = data;
                        resolve(filtered_megaData);
                    }
            })
        }
        
    </script>
     <script>
                    function uidisplay(result)
                    {
                        var ui = "";
                        var outbound_id = "k0";
                        var inbound_id = "d0";
                        var trackCount = 0;
                        result.forEach((item)=>{
                            var price = item['price']['totalFare'];
                            pricesArr.push(price);
                            price = (parseInt(price)).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                            ui = ui+`<div >
                                        <div class="block-content-2 unique" style="width:auto !important; margin:10px 0 0 15px" >
                                            <div class="box-result">
                                                <ul class="list-search-result" onclick="javascript:details(this)" style="cursor:pointer;">
                                                    ${outbound_ui(item['route']['outBound'],0,outbound_id)}
                                                    ${(item['route']['inBound'].length > 0)?outbound_ui(item['route']['inBound'],1,inbound_id):''}
                                                </ul>


                                                <div class="result-price" style="border-left:1px dashed #ccc">
                                                    <div class="price">NGN ${price}</div>
                                                    <button class="btn small colorful-transparent hover-colorful" onclick="senddata(${item['recommendationID']},${item['combinationID']})" >Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-details" style="display:none; padding:10px; background:#acc7fa; margin-bottom:20px ">
                                            
                                            ${flightDetailsUi(item['route']['outBound'],0,outbound_id)}
                                            ${(item['route']['inBound'].length > 0)?flightDetailsUi(item['route']['inBound'],1,inbound_id):''}
                                        </div>
                                    </div>`;
                            trackCount++
                            outbound_id = "k"+trackCount;
                            inbound_id  = "d"+trackCount;
                        })
                        return ui;
                    }
                    function noOfStops(outbound)
                    {
                         var stops = outbound.length;
                         var junctions = stopJunctions(outbound,stops);
                         return (stops == 1)?"Direct": ""+(stops-1)+" Stop ("+junctions+")";
                    }
                    function stopJunctions(arr,stops)
                    {
                        var jj = "";
                        var l = 1;
                        for(var x=0; x<arr.length; x++)
                        {
                            if(l == stops) 
                            {
                                break;
                            }
//                            console.log("here",get_airport(arr[x]["arrivalAirport"],"name"))
                            var erikk = get_airport(arr[x]["arrivalAirport"],"city");
                            jj = jj+erikk+",";
                            l++;
                        }
//                        console.log(jj);
                        res= jj.substring(0,jj.length -1);
                        return res;
                    }
         function setDate(raw)
         {
//             console.log(raw)
             var d = new Date(raw);
             var expl = d.toString().split(" ")
             var date = `${expl[0]} ${expl[1]} ${expl[2]}`;
             return date;
         }
         function flightDetailsUi(outbound,direction,sup_count)
         {
//             var cc = 0;
                var last = outbound.length - 1;
                var depAir = "xx"+sup_count;
                var arrAir = "xs"+sup_count;
                var b_ui = `<div class="container" style="background:#fff; padding:5px 25px 5px 25px"><h5 style="border-bottom:1px dashed #eee"><span class="icon-plane"></span> ${(direction==0)?'Departure':'Return'}: <span style="color:red;font-size:14px" id="${depAir}">${get_city(outbound[0]["departureAirport"],depAir)}</span> - <span style="color:red;font-size:14px" id="${arrAir}">${get_city(outbound[last]["arrivalAirport"],arrAir)}</span></h5>`;
                for(var x=0; x<outbound.length; x++)
                {
                    var duration = outbound[x]["elapsedTime"]; 
                    var hour = duration.substr(0,2);
                    var min = duration.substr(2);
                    var airline_name = "";
                    var id = sup_count;
//                    getAirline(outbound[x]['operatingAirline'],id);
                    var  deptAirNameId = "dpa"+sup_count;
                    var  arrAirNameId = "arra"+sup_count;
//                    getAirportName(outbound[x]["departureAirport"],deptAirNameId);
//                    getCities(outbound[x]["arrivalAirport"],arrAirNameId);
                    if((outbound.length-1) != x)
                    {
                        var ddfe = `<div><span style="color:red; font-size:16px">STOP ${x+1}. </span></div>`;
                    }else{
                        var ddfe = "";
                    }
                    b_ui = b_ui+`${ddfe}<div class="row"><div class="col-sm-3">
                                         ${setDate(outbound[x]["departureDate"])} 
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="https://wakanow-images.azureedge.net/Images/flight-logos/${outbound[x]['operatingAirline']}.gif" width="52" height="52" alt="">
                                        <div><small>${getAirline(outbound[x]['operatingAirline'],'')}</small></div>
                                    </div>
                                    <div class="col-sm-5">
                                            <div>${timedep(outbound[x]["departureDate"])} - ${timedep(outbound[x]["arrivalDate"])}</div>
                                            <div><span >${get_airport(outbound[x]["departureAirport"],"name")}</span> <small>(${outbound[x]["departureAirport"]})</small> - <span>${get_airport(outbound[x]["arrivalAirport"],"name")}</span> <small>(${outbound[x]["arrivalAirport"]})</small></div>
                                            <div>Flight No: ${outbound[x]['flightNumber']} </div>
                                    </div>
                                    <div class="col-sm-2">${hour}h ${min}m</div></div>
                                    `;
                    if((outbound.length-1) != x)
                       {
                            b_ui = b_ui+`<div style="background:#fff; border-bottom:1px dashed #000; margin-bottom:17px">Change plane at ${get_airport(outbound[x]['arrivalAirport'],"name")} (${outbound[x]['arrivalAirport']}) <span style="color:red">Layover</span> at ${get_airport(outbound[x]['arrivalAirport'],"city")}</div>`;
                       }
              
            }
            return b_ui+`</div>`;
         }
                    function timedep(date)
                     {
                          var s = date.split('T');
                         return s[1].substr(0,5);
                     }
                      function outbound_ui(outbound,direction,sup_count)
                        {
                            var cc = 0;
                            var b_ui = '';
                            for(var x=0; x<outbound.length; x++)
                            {
                                if(cc == 1) 
                                {
                                    break;
                                }
                                var duration     = outbound[x]["elapsedTime"]; 
                                var hour         = duration.substr(0,2);
                                var min          = duration.substr(2);
                                var indx         = outbound.length - 1;
                                var airline_name = "";
                                var id           = "zx"+sup_count;
//                                getAirline(outbound[x]['operatingAirline'],id)
                                uniqueAirline.push(outbound[x]['operatingAirline'])
                                b_ui = b_ui+`<li>
                                                <ul class="result-single">
                                                    <li>
                                                        <img src="https://wakanow-images.azureedge.net/Images/flight-logos/${outbound[x]['operatingAirline']}.gif" width="52" height="52" alt="">
                                                        <h6  id="${id}">${getAirline(outbound[x]['operatingAirline'],id)}</h6>
                                                    </li>
                                                    <li>
                                                        ${outbound[x]["departureAirport"]}
                                                        <span class="date">
                                                            ${timedep(outbound[x]["departureDate"])}
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="shape-distance"></span>
                                                    </li>
                                                    <li>
                                                        ${outbound[indx]["arrivalAirport"]}
                                                        <span class="date">
                                                            ${timedep(outbound[x]["arrivalDate"])}
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="duration">${hour}h ${min}m</span>
                                                        | ${noOfStops(outbound)}
                                                    </li>
                                                </ul>
                                            </li>`;
                                // b_ui = b_ui+`<div class="row outbound" >
                                //           <div class="col-sm-2">
                                //               <img src="https://wakanow-images.azureedge.net/Images/flight-logos/${outbound[x]['operatingAirline']}.gif" width="52" height="52" alt="">
                                //           </div>
                                //           <div class="col-sm-3">
                                //              <div>
                                //                 ${timedep(outbound[x]["departureDate"])} - ${timedep(outbound[x]["arrivalDate"])}
                                //              </div>
                                //              <h6  id="${id}">${getAirline(outbound[x]['operatingAirline'],id)}</h6>
                                //           </div>
                                //           <div class="col-sm-3">
                                //             ${noOfStops(outbound)}
                                //                <div>
                                //                    <span class="icon-chevron-${(direction == 0)?'right':'left'}"></span>
                                //                    <span class="icon-chevron-${(direction == 0)?'right':'left'}"></span>
                                //                </div>
                                //           </div>
                                //           <div class="col-sm-3">
                                //               ${hour}h ${min}m
                                //               <div>
                                //                   ${outbound[x]["departureAirport"]} - ${outbound[indx]["arrivalAirport"]}
                                //               </div>
                                //           </div>
                                //       </div>`;
                            cc++;
                        }
                        return b_ui;
                    }
          function getAirline(codes,id)
         {
//              $("#kew0").html("help");
             var ppiy = "";
             airlineArr.forEach((item)=>{
//                console.log(item[0]+" "+codes,item[1])
                if(item[0] == codes)
                    {
                        ppiy = item[1];
//                        console.log(item[1],id)
//                        $("#kew0").html(item[1]);
                    }
            })
             return ppiy;
//             var dd = "";
//             dd = await $.post("utilities.php",{op:"Flight.getAirlineName",code:codes},function(res){ 
//             $("#"+id).html(res);
//                 console.log(res+","+codes+" id="+id)
//             })
         }
         
             function senddata(recommendation,combination)
             {
                 $.blockUI({message:"Redirecting, Please wait......"})
                 let bookingData = megaData.filter((item)=>{
                     return item.recommendationID == recommendation && item.combinationID == combination
                 });
                 
                 $.post("utilities.php",{"op":"Flight.selectedSegment","book":bookingData,"cookie":session},function(res){
                     $.unblockUI();
                     if(res.response_code == 0)
                     {
                         window.location = "booking_passenger.php?id="+res.id+"&sess="+session+"&t="+res.sess_time;
                     }
                     else
                     {
                         alert(res.response_message)
                     }
                     console.log(res);
                 },'json')
             }
         
         

             function openCity(evt, cityName) {
                // Declare all variables
                // var i, tabcontent, tablinks;

                // // Get all elements with class="tabcontent" and hide them
                // tabcontent = document.getElementsByClassName("tabcontent");
                // for (i = 0; i < tabcontent.length; i++) {
                //     tabcontent[i].style.display = "none";
                // }

                // Get all elements with class="tablinks" and remove the class "active"
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                // Show the current tab, and add an "active" class to the link that opened the tab
                if(cityName == "return")
                {
                    document.getElementById("return_div").style.display = "block";
                    evt.currentTarget.className += " active";
                    $(".tabcontent h6").text("Return");
                    $("#direction").val(1)
                }else{
                    document.getElementById("return_div").style.display = "none";
                    evt.currentTarget.className += " active";
                    $(".tabcontent h6").text("One way");
                    $("#direction").val(0);
                }
                
            }
        </script>
