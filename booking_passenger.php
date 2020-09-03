<?php
    include('libs/dbfunctions.php');
    $dbobject       = new dbobject();
    $id             = $_GET['id'];
    $sess           = $_GET['sess'];
    $sess_time           = $_GET['t'];
    $sql            = "SELECT * FROM app_selected_itinerary WHERE id = '$id' LIMIT 1";
    $result         = $dbobject->db_query($sql);
    $json_itinerary = $result[0]["itinerary"];
    $json_session   = $result[0]["session"];
?>
<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from tazkarty.itgeeks.info/booking-hotel-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Aug 2020 00:17:24 GMT -->
<?php require_once 'includes/header.php'; ?>

<body class="page-single bg-grey with-sidebar footer-dark">

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
		<?php require_once 'includes/nav.php'; ?>

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
									
									<ul class="breadcrumb">
										<li><a href="index.html"><i class="fa fa-home"></i></a></li>
										<li><a href="javascript:;">Flights</a></li>
										<li class="active" ><span id="from_text"></span>&nbsp; to &nbsp;<span id="to_text"></span></li>
									</ul><!-- .breadcrumb end -->
									
								</div><!-- .col-md-12 end -->
								<div class="col-md-12">
									
									<div class="page-single-content sidebar-left">
										
										<div class="row">
											<div class="col-lg-8 col-md-12 col-lg-push-4">
										
												<div class="content-main">
													<div class="block-content-2">
														<div class="block-title">
                                                            <h3><span class="colored"></span> Passenger Details</h3>
                                                            <small>All names must  exactly match passport(<small>for internationl flights</small>) or government issued photo identification.</small>
                                                        </div><!-- .block-title end -->
                                                        <div id="passenger_details">
                                                            <form onsubmit="return false" id="passenger_form">
															
                                                            </form><!-- #form-hotel-booking end -->
                                                        </div>
														
                                                            <div id="payment" style="display:none" class="">
                                                                <div class="row">
                                                                    <div class="col-sm-12"><b style="color:#000">Payment</b></div>
                                                                </div>
                                                                <div class="panel panel-primary">
                                                                    <div class="panel-heading">Card Information</div>
                                                                    <div class="panel-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-3"></div>
                                                                            <div class="col-sm-6">
                                                                                <form onsubmit="return false" id="card_form">
                                                                                    <div id="form_message" ></div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-12">
                                                                                            <div class="form-group">
                                                                                                <label for="card_no">Card Number</label>
                                                                                                <input type="text" pattern="[0-9]+" oninput="validity.valid||(value='');"  class="form-control" placeholder="8899665522147896"  id="card_no">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <div class="form-group">
                                                                                                <label for="card_no">Card Expiry</label>
                                                                                                <input type="text"  class="form-control" placeholder="12/21"  id="card_expiry">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <div class="form-group">
                                                                                            <label for="card_no">Card CVV</label>
                                                                                            <input type="text" class="form-control" maxlength="3" oninput="validity.valid||(value='');" pattern="[0-9]+" placeholder="658" id="card_cvv">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-12">
                                                                                            <div class="form-group">
                                                                                                <br>
                                                                                            <button onclick="capture_payment()" class="btn btn-success btn-block">PAY NOW</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="col-sm-3"></div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    </div>
                                                                </div>
													</div><!-- .block-content-2 end -->
												</div><!-- .content-main end -->
										
											</div><!-- .col-lg-8 end -->
											<div class="col-lg-4 col-md-12 col-lg-pull-8">
										
												<div class="sidebar style-2">
													<ul class="list-box-sidebar">
														<li>
															<div class="hotel-title">
																<h2>Trip Summary</h2>
																<!-- <span class="location">Marylebone, London</span> -->
																
                                                            </div><!-- .hotel-title end -->
                                                            <br>
                                                            <div id="breakdown"></div>
														</li>
														
                                                    </ul><!-- .list-box-sidebar end -->
                                                    
													<ul class="list-box-sidebar">
														<li>
															<div class="booking-help">
																<h3 class="box-title">Need Help Booking</h3>
																<p>Call our customer services team on the number below to speak to ..</p>
																<span class="phone-number"><i class="fas fa-phone-alt"></i>1- 555 - 555 - 555</span>
															</div><!-- .booking-help end -->
														</li>
													</ul><!-- .list-box-sidebar end -->
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
		<?php require_once 'includes/footer.php'; ?>

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
    

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script> 
    <script src="js/jquery.blockUI.js"></script>
    <script src="js/parsely.js"></script>
    <script src="js/sweet_alerts.js"></script>
    <script>
        
        var itinerary        = <?php echo $json_itinerary; ?>;
        var price_break_down = itinerary[0]["priceBreakdown"];
        var recommendationID = itinerary[0]["recommendationID"];
        var combinationID    = itinerary[0]["combinationID"];
        var sess             = "<?php echo $sess; ?>";
        var sess_time             = "<?php echo $sess_time; ?>";
        $("#breakdown").html(priceDetails(itinerary));
        var no_of_pass = 1;
        let form = "";

//        var willie = JSON.parse(sessionStorage.getItem("sessionObj"));

        if(sess != null)
            {
                var cookie_inteval = setInterval(()=>{
                if(Math.round(new Date().getTime() / 1000) >sess_time && sess != "")
                {

                    $.post("utilities.php",{op:"Flight.signOut",session:sess},function(reo){
                        sessionStorage.removeItem("sessionObj");
                    });
                    $.blockUI({message:'<h5>Your session has expired!</h5><div style="padding:10px"><button onclick="relocate_web()" class="btn btn-danger">Cancel</button></div>'});
                    clearInterval(cookie_inteval);
                }
                },2000)
            }
            else
            {
                $.blockUI({message:'<h5>Your session has expired!</h5><div style="padding:10px"><button onclick="relocate_web()" class="btn btn-danger">Cancel</button></div>'});
                clearInterval(cookie_inteval);
            }
    
        
        $.post("utilities.php",{op:"Flight.loadCountries"},function(data){
            let cnt = "";
            data.forEach((item)=>{
                cnt = cnt + `<option value="${item.code}">${item.name}</option>`;
            })
//            console.log(cnt);
            $(".countries").html(cnt);
        },'json');
        price_break_down.forEach((item)=>{
            if(item.passengerCode == "ADT")
               {
                    form = form +loadAdultForm(item);
               }
            if(item.passengerCode == "CHD")
               {
                    form = form +loadChildForm(item);
               }
            if(item.passengerCode == "INF")
               {
                    form = form +loadInfantForm(item);
               }
            
        })
        
        function relocate_web()
        {
            window.location = "index.php";
        }
        console.log(price_break_down);
//        if(price_break_down[1] != undefined)
//            {
//                form = form + loadChildForm(price_break_down[1]);
//            }
//        if(price_break_down[2] != undefined)
//            {
//                form = form + loadInfantForm(price_break_down[2]);
//            }
        form = form + `<input type="hidden" name="op" value="Flight.bookFlight"  /><button id="sendForm" class="btn btn-block btn-success">Save Passenger Details</button>`;
        $("#passenger_form").html(form);
        
        let trans_id = "";
        $("#sendForm").click(function(){
            let vf = $("#passenger_form").parsley({ excluded: "input[type=date]" });
            vf.validate();
			if($("#passenger_form").parsley().isValid())
			{
                $.blockUI({message:'<h5>Processing information...</h5><small>Please don\'t refresh</small> '});
                var form_data = $("#passenger_form").serialize();
                $.post("utilities.php?rec="+recommendationID+"&com="+combinationID+"&session="+sess,form_data,function(res){
                    $.unblockUI();
                    if(res.response_code == 0)
                        {
                            trans_id = res.data.trans_id;
                            sessionStorage.removeItem("sessionObj");
                            $("#passenger_details").hide();
                            $("#payment").show();
                            // alert(res.response_message);
                        }else{
                            alert(res.response_message);
                        }
                    console.log(res);
                },'json')
            }
            
        })
        function capture_payment()
        {
            let card_no        = $("#card_no").val();
            let card_expiry    = $("#card_expiry").val();
            let card_cvv       = $("#card_cvv").val();
            let card_noReg     = /^([0-9]){16}$/;
            let card_expiryReg = /^[0-9]{2}(\/){1}([0-9]){2}$/;
            let card_cvvReg    = /^[0-9]{3}$/;
            let message        = "Payment is successful";
            $("#form_message").text("");
            $("#form_message").removeClass("alert-danger");
            $("#form_message").removeClass("alert-success");
            $("#form_message").removeClass("alert");
            
            
            if(!card_cvv.match(card_cvvReg))
                {
                    message = "card cvv is invalid ";
                }
            if(!card_expiry.match(card_expiryReg))
               {
                    message = "card expiry is invalid ";
               }
            if(!card_no.match(card_noReg))
               {
                   message = "card number is invalid ";
               }
            
            
            
            if(message == "Payment is successful")
                {
                    $.blockUI({message:"Processing payment"});
                    $.post("utilities.php",{op:"Flight.makePayment",payment_id:trans_id},function(res){
                        $.unblockUI();
                        if(res.responseCode == 0)
                            {
                                $("#form_message").text(message);
                                $("#form_message").addClass("alert alert-success");
                                swal({"icon":"success","text":message}).then((jiu)=>{
                                    window.location = "transaction_receipt.php?ref_id="+res.transaction_id;
                                });
                            }else{
                                swal({"icon":"error","text":res.responseMessage}).then((jiu)=>{
                                   
                                });
                            }
                    },"json")
                }else{
                    $("#form_message").text(message);
                    $("#form_message").addClass("alert alert-danger");
                }
            return false;
        }
        function loadAdultForm(pricebreakdown)
        {
            var frt = "";
            var contact = "";
            let adult_birth_date = "<?php echo (date("Y") - 12)."-".date("m-d"); ?>";
            for(var x = 0; x < pricebreakdown["passengerQuantity"]; x++)
                {
                    var primaryContact = "";
                    contact = (x == 0)?"<small>(primary contact)</small>":"";
                    if(x == 0)
                        {
                            primaryContact = `<div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Email</label>
                                        <input type="email" name="form[adult][${x}][email]" required class="form-controls">
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                            <label for="">Address/City</label>
                                            <input type="text" name="form[adult][${x}][address]" required class="form-controls">
                                       </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Country</label>
                                        <select name="form[adult][${x}][country]" required class="form-controls countries" ></select>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                            <label for="">Phone Number</label>
                                            <input type="number" name="form[adult][${x}][phone_number]" required class="form-controls">
                                       </div>
                                    </div>
                              </div>`;
                        }
                    frt = frt+`<div style="padding:10px 0; border-bottom:1px solid #eee">
                              <h6 style="border-bottom:1px dashed #ccc">
                              <span style="color:#000">Traveller ${no_of_pass}:</span> Adult ${contact}
                              </h6>
                              <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Prefix</label>
                                        <select name="form[adult][${x}][prefix]" id="" class="form-controls">
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                            <label for="">Gender</label>
                                            <select name="form[adult][${x}][gender]" id="" class="form-controls">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                       </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Surname</label>
                                        <input type="text" name="form[adult][${x}][surname]" required class="form-controls">
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                            <label for="">First Name</label>
                                            <input type="text" name="form[adult][${x}][first_name]" required class="form-controls">
                                       </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Middle Name</label>
                                        <input type="text" name="form[adult][${x}][middle_name]" class="form-controls">
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                            <label for="">Date of Birth</label>
                                            <input type="date" name="form[adult][${x}][dob]"  max="${adult_birth_date}" class="form-controls">
                                       </div>
                                    </div>
                              </div>
                                ${(x == 0)?primaryContact:""}
                          </div>`;
                    no_of_pass++;
                    
                }
            return frt;
        }
        function loadChildForm(pricebreakdown)
        {
            var frt = "";
            let dob_max = "<?php echo (date("Y") - 11)."-".date("m-d"); ?>";
            let dob_min = "<?php echo (date("Y") - 2)."-".date("m-d"); ?>";
            for(var x = 0; x < pricebreakdown["passengerQuantity"]; x++)
                {
                    frt = frt+`<div style="padding:10px 0; border-bottom:1px solid #eee">
                              <h6 style="border-bottom:1px dashed #ccc">
                              <span style="color:#000">Traveller ${no_of_pass}:</span> Child (2-11) years
                              </h6>
                              <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Prefix</label>
                                        <select name="form[child][${x}][prefix]"  class="form-controls">
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                            <label for="">Gender</label>
                                            <select name="form[child][${x}][gender]"  class="form-controls">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                       </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Surname</label>
                                        <input type="text" name="form[child][${x}][surname]" required class="form-controls">
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                            <label for="">First Name</label>
                                            <input type="text" name="form[child][${x}][first_name]" required class="form-controls">
                                       </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Middle Name</label>
                                        <input type="text" name="form[child][${x}][middle_name]" class="form-controls">
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                            <label for="">Date of Birth</label>
                                            <input type="date" name="form[child][${x}][dob]" required max="${dob_min}" min="${dob_max}" class="form-controls">
                                       </div>
                                    </div>
                              </div>
                          </div>`;
                    no_of_pass++;
                }
            return frt;
        }
        function loadInfantForm(pricebreakdown)
        {
            var frt = "";
            let dob_max = "<?php echo (date("Y") - 1)."-".date("m-d"); ?>";
            let dob_min = "<?php echo (date("Y") - 0)."-".date("m-d"); ?>";
            for(var x = 0; x < pricebreakdown["passengerQuantity"]; x++)
                {
                    frt = frt+`<div style="padding:10px 0; border-bottom:1px solid #eee">
                              <h6 style="border-bottom:1px dashed #ccc">
                              <span style="color:#000">Traveller ${no_of_pass}:</span> Infant (0-2) years
                              </h6>
                              <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Prefix</label>
                                        <select name="form[infant][${x}][prefix]"  class="form-controls">
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                            <label for="">Gender</label>
                                            <select name="form[infant][${x}][gender]"  class="form-controls">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                       </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Surname</label>
                                        <input type="text" name="form[infant][${x}][surname]" required class="form-controls">
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                            <label for="">First Name</label>
                                            <input type="text" name="form[infant][${x}][first_name]" required class="form-controls">
                                       </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Middle Name</label>
                                        <input type="text" name="form[infant][${x}][middle_name]" class="form-controls">
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                            <label for="">Date of Birth</label>
                                            <input type="date" name="form[infant][${x}][dob]" required max="${dob_min}" min="${dob_max}" class="form-controls">
                                       </div>
                                    </div>
                              </div>
                          </div>`;
                    no_of_pass++;
                }
            return frt;
        }
        function priceDetails(arr)
        {
            console.log(arr);
            var iti    = arr[0]["priceBreakdown"];
            let frt    = "";
            let jj     = arr[0]["route"]["outBound"];
            let lopLength = jj.length;
            let arrivalair = jj[lopLength-1]["arrivalAirport"];
            let total = `<h4>Total: NGN ${(parseInt(arr[0]["price"]["totalFare"])).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</h4>`;
//            alert(lopLength)
            getCity(jj[0]["departureAirport"],"id1");
            getCity(jj[0]["departureAirport"],"from_text");
            getCity(arrivalair,"id2")
            getCity(arrivalair,"to_text")
            let hd = `<div style="margin-bottom:4px">
                                 <h6 style="margin-bottom:5px; color:#000"><span id="id1"></span> to <span id="id2"></span> - ${(arr[0]["route"]["inBound"] != undefined) ? "Round Trip":"One Way Trip"}</h6>
                                 
                             </div>`;
            for(var x = 0; x < iti.length; x++)
            {
                frt = frt + `<div>
                                 <div class="row" style="border-top:1px dashed #000;border-bottom:1px dashed #000; color:#000; margin-bottom:5px">
                                     <div class="col-sm-6">${iti[x]['passengerCode']} (x${iti[x]['passengerQuantity']})</div>
                                     <div class="col-sm-6" align="right">NGN ${iti[x]['totalFare']}</div>
                                 </div>
                                 <div class="row" >
                                     <div class="col-sm-6" style="height:auto; line-height:1.1rem">
                                        <small >Base Fare</small> 
                                     </div>
                                     <div class="col-sm-6" style="line-height:1.1rem"><small>${iti[x]['baseFare']}</small></div>
                                 </div>
                                 <div class="row" >
                                     <div class="col-sm-6" style="height:auto; line-height:1.1rem">
                                        <small >Tax</small> 
                                     </div>
                                     <div class="col-sm-6" style="line-height:1.1rem"><small>${iti[x]['tax']}</small></div>
                                 </div>

                         </div>`;
            }
            return hd+frt+total;
        }
        function getCity(coder,id)
        {
            $.post("utilities.php",{op:"Flight.getCities",code:coder},function(res)
            {
                $("#"+id).html(res);
            })
        }
    </script>
</body>

<!-- Mirrored from tazkarty.itgeeks.info/booking-hotel-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Aug 2020 00:17:24 GMT -->
</html>
