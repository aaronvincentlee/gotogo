<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<html lang=en xml:lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8" />
    <title>GoToGo | Home</title> 
    <link rel = "stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel = "stylesheet" href="fontawesome/font-awesome-4.5.0/css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel = "stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="slider/Glide.js-master/dist/css/glide.core.css">
    <link rel="stylesheet" href="slider/Glide.js-master/dist/css/glide.theme.css">
    <script src="angular-1.5.3/angular.js"></script>
    <script src="angular-1.5.3/angular-animate.js"></script>                                    
</head>
    
<body>
    <!--Start Main Menu-->
    <?php include 'includes/navigation.html';?>
    <!--End Main Menu-->
    <!--Start Slider-->
    <div id="Glide" class="glide">
<!--
        <div class="glide__arrows">
            <button class="glide__arrow prev" data-glide-dir="<">prev</button>
            <button class="glide__arrow next" data-glide-dir=">">next</button>
        </div>
-->
        <div class="glide__wrapper">
            <ul class="glide__track">
                <li class="glide__slide "><img src="images/Slider/1.jpg"></li>
                <li class="glide__slide "><img src="images/Slider/2.jpg"></li>
                <li class="glide__slide "><img src="images/Slider/3.jpg"></li>
            </ul>
        </div>
    <div class="glide__bullets"></div>
    <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<div class="container-fluid" style="border-radius: 3px; background: #fff; padding-top: 1em;padding-bottom:1em"> 
					<div class="row">
						<div class="col-md-12">
							<h3><strong>Find Hotels</strong></h3>
							<h5>more than 180,000 hotels worldwide</h5>
						</div>   
					</div>
					<div class="row">
						<div class="col-md-12">
						      <div class="form-group">
						      		<div class="input-group">
						      			<input id="ember468" placeholder="Destination , City or Hotels" type="text" class="form-control ember-view ember-text-field">
						      			<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
						      		</div>   
		                      </div>   
						</div>
					</div>            
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Arrival Date</label>
								<div class="input-group">
                        	 		<input id="arrival" placeholder="Arrival Date" type="text" class="col-md-12 form-control  ember-view ember-text-field hasDatepicker">
                        	 		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        	 	</div>
	                     	</div>   
						</div>   
						<div class="col-md-4">     
							<div class="form-group fa-icon-position">
								<label>Departure Date</label>
								<div class="input-group">
		                 			<input id="departure" placeholder="Departure Date" type="text" class="col-md-12 form-control  ember-view ember-text-field hasDatepicker">
		                 			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
		                 		</div>   
                 		  </div>       
						</div> 
						<div class="col-md-4">
							  <button type="button" class="btn btn-info btn-block btn-lg" style="margin-top: 0.5em; "><strong>Search</strong></button> 
					  	</div>
					</div>      
					<div class="row" style="padding-top:1em;padding-bottom:1em">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-2">
									<i class="fa fa-check" style="font-size: 4rem; color: #FFFFFF;text-align: center;border-radius: 100%;background: #8BC34A;width: 60px;line-height: 60px;height: 60px;"></i> 
								</div>
								<div class="col-md-10">
									<h3 class="remove-margin">NO HIDDEN CHARGES OR EXTRA FEES!</h3>
									<span>The rates you see on the website is final. The price is already inclusive of taxes and no service fee is required.</span>
								</div>   
							</div>     
						</div>
						<div class="col-md-6">
							<div class="row"> 
								<div class="col-md-2">
									<i class="fa fa-check-square-o" style="font-size: 6rem; color: #FF9800;"></i> 
								</div>
								<div class="col-md-10">
									<h3 class="remove-margin">DIRECT CONFIRMED BOOKING TO THE HOTEL</h3>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</span>
								</div>
							</div>
						</div>        
					</div>   
				</div>
			</div>
    </div>
    <div class="slidetext" id="slidetext">GoTo <b>Baguio</b></div>
    <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 slidedate">
        <div class="container-fluid" style="border-radius: 3px; background: #fff; padding-top: 1em;padding-bottom:1em"> 
            <div class="row">
                <div class="col-md-12">
                    <h3><strong>Find Hotels</strong></h3>
                    <h5>more than 180,000 hotels worldwide</h5>
                </div>   
            </div>
            <div class="row">
                <div class="col-md-12">
                      <div class="form-group">
                            <div class="input-group">
                                <input id="ember468" placeholder="Destination , City or Hotels" type="text" class="form-control ember-view ember-text-field">
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            </div>   
                      </div>   
                </div>
            </div>            
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Arrival Date</label>
                        <div class="input-group">
                            <input id="arrival" placeholder="Arrival Date" type="text" class="col-md-12 form-control  ember-view ember-text-field hasDatepicker">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>   
                </div>   
                <div class="col-md-4">     
                    <div class="form-group fa-icon-position">
                        <label>Departure Date</label>
                        <div class="input-group">
                            <input id="departure" placeholder="Departure Date" type="text" class="col-md-12 form-control  ember-view ember-text-field hasDatepicker">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>   
                  </div>       
                </div> 
                <div class="col-md-4">
                      <button type="button" class="btn btn-info btn-block btn-lg" style="margin-top: 0.5em; "><strong>Search</strong></button> 
                </div>
            </div>      
            <div class="row" style="padding-top:1em;padding-bottom:1em">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa fa-check" style="font-size: 4rem; color: #FFFFFF;text-align: center;border-radius: 100%;background: #8BC34A;width: 60px;line-height: 60px;height: 60px;"></i> 
                        </div>
                        <div class="col-md-10">
                            <h3 class="remove-margin">NO HIDDEN CHARGES OR EXTRA FEES!</h3>
                            <span>The rates you see on the website is final. The price is already inclusive of taxes and no service fee is required.</span>
                        </div>   
                    </div>     
                </div>
                <div class="col-md-6">
                    <div class="row"> 
                        <div class="col-md-2">
                            <i class="fa fa-check-square-o" style="font-size: 6rem; color: #FF9800;"></i> 
                        </div>
                        <div class="col-md-10">
                            <h3 class="remove-margin">DIRECT CONFIRMED BOOKING TO THE HOTEL</h3>
                            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</span>
                        </div>
                    </div>
                </div>        
            </div>   
        </div>
    </div>
    <!--End Slider-->
    <!--Start Content-->
    <div class="container-fluid padding-zero content" style="background-color:#F5F5F5;">
        <div class="container col-md-9 center-block" id="topDestination" style="float:none;padding-top:5em;padding-bottom:5em">
        <h2>Top Deals</h2>
            <div class="row">
                <div class="col-md-4 margin-top-top">
                    <div class="thumb-destination"><img src="images/Body/mercury.jpg"></div>
                    <h4>Get deals</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                    <button type="button" class="btn btn-primary">Learn More&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></button>
                </div>
                <div class="col-md-4 margin-top-top">
                    <div class="thumb-destination"><img src="images/Body/venus.jpg"></div>
                    <h4>Get deals</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                    <button type="button" class="btn btn-primary">Learn More&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></button>
                </div>
                <div class="col-md-4 margin-top-top"> 
                    <div class="thumb-destination"><img src="images/Body/earth.jpg"></div>
                    <h4>Get deals</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                    <button type="button" class="btn btn-primary">Learn More&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></button>
                </div>
                <div class="col-md-4 margin-top-medium">
                    <div class="thumb-destination"><img src="images/Body/mars.jpg"></div>
                    <h4>Get deals</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                    <button type="button" class="btn btn-primary">Learn More&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></button>
                </div>
                <div class="col-md-4 margin-top-medium">
                    <div class="thumb-destination"><img src="images/Body/jupiter.jpg"></div>
                    <h4>Get deals</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                    <button type="button" class="btn btn-primary">Learn More&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></button>
                </div>
                <div class="col-md-4 margin-top-medium">
                    <div class="thumb-destination"><img src="images/Body/saturn.jpg"></div>
                    <h4>Get deals</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                    <button type="button" class="btn btn-primary">Learn More&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <!--End content-->
        <!--Start Footer White-->
        <div class="container-fluid" style="background:#fff;padding-bottom: 5em;padding-top: 5em;">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="text-primary">Top Countries</h4>
                        <ul class="margin-top-small footer-links">
                            <li>Philippine Hotels</li>
                            <li>Malaysian Hotels</li>
                            <li>Indonesian Hotels</li> 
                            <li>Cambodia Hotels</li>
                            <li>Vietnam Hotels</li>
                            <li>Singapore Hotels</li>
                        </ul>
                    </div>        
                    <div class="col-md-5">
                        <h4 class="text-primary">Top Domestic Hotels</h4>
                        <ul class="margin-top-small footer-links">
                                <li>Barreto Hotels&nbsp; |</li>
                                <li>Baguio Hotels&nbsp; |</li>
                                <li>Pangasinan Hotels&nbsp; |</li> 
                                <li>Davao Hotels&nbsp; |</li>
                                <li>Baler Hotels&nbsp; |</li>
                                <li>Bohol Hotels&nbsp; |</li>
                                <li>Palawan Hotels&nbsp; |</li>
                                <li>Ilocos Hotels&nbsp; |</li>
                                <li>Makati Hotels&nbsp; |</li>
                                <li>Quezon City Hotels&nbsp; |</li>
                                <li>Subic Bay Freeport Zone Hotels&nbsp; |</li>
                                <li>Puerto Galera Hotels&nbsp; |</li>
                                <li>Olongapo Hotels</li>
                                <li>Angeles Hotels&nbsp; |</li>
                                <li>Paranaque Hotels&nbsp; |</li>
                                <li>Cebu Hotels&nbsp; |</li>
                                <li>Zambales Hotels&nbsp; |</li>
                            </ul>
                    </div>   
                    <div class="col-md-4" style="background: #FFFFFF; padding-bottom: 1em; border: 1px solid #FF9800;"> 
                    <h5 class="text-primary">Signup to recieve our best deals</h5>
                        <p class="margin-top-small">Get access to sales,price alert and promo code</p>
                        <button type="button" class="btn btn-lg btn-primary margin-top-small">Sign me up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer White-->
    <!--Start Footer Black-->
    <div class="container-fluid" style="background:#1c1c1c">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="margin-top-small footer-links footer-links-white">
                            <li>Privacy Policy</li>
                            <li>Terms and Conditions</li>
                            <li>About Us</li>
                            <li>Terms and Use</li>
                            <li>Contact Us</li>
                            <li>Sitemap</li>
                        </ul>	
                    </div>   
                    <div class="col-md-4">  
                        <div class="margin-top-small" style="color:white"><strong>©2015 OnlineTravel Gotogo | All right reserved</strong></div> 
                    </div>
                </div>   
            </div>
        </div>
    </div> 
    </div>
    <!--End Footer Black-->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="slider/Glide.js-master/dist/glide.js"></script>
    <script>
        //Start Slider Slide
        $("#Glide").glide({
        autoplay: 4000,
        arrows: 'body',
        navigation: 'body',
        arrowRightText: '&rarr;',
        arrowLeftText: '&larr;'
        });
        //End Slider Slide
        //Start Display each array object
        function slidetexton() {
            var place = ['Baler','Coron','Manila','Palawan','Baguio'];
            var i=0;
            setInterval(function(){
                document.getElementById('slidetext').innerHTML = "GoTo" + " " + place[i++].bold();
                    if (i == place.length){
                        i = 0;   
                    } 
            },4000);
        }
        window.onload = slidetexton;
        //End Display each array object
        //Start Navbar Change Color Transparent
        $(document).ready(function(){       
            var scroll_start = 0;
            var startchange = $('#Glide');
            var offset = startchange.offset();
            if (startchange.length){
                $(document).scroll(function() { 
                    scroll_start = $(this).scrollTop();
                        if(scroll_start > offset.top) {
                            $(".header").css({ "background-color": "transparent","box-shadow":"none"});
                            $(".header .main-nav .nav .mainmenu .menuchoice").css({"color": "#fff"});
                            $(".header .main-nav .nav .mainmenulast a").css({"background-color": "transparent"})
                            $(".header .main-nav .nav .mainmenu .menuchoice").hover(function(){
                                $(this).css("color","#ec6952");
                                },function(){
                                    $(this).css("color","");
                            });
                            $(".header .main-nav .nav .mainmenulast a").hover(function(){
                                $(this).css("background-color","#ec6952");
                                },function(){
                                    $(this).css("background-color","");
                            });
                        }
                });
            }
        });
        //End Navbar Change Color Transparent
        //Start Navbar Change Color White
        $(document).ready(function(){       
            var scroll_start = 0;
            var startchange = $('#slidetext');
            var offset = startchange.offset();
            if (startchange.length){
                $(document).scroll(function() { 
                    scroll_start = $(this).scrollTop();
                        if(scroll_start > offset.top) {
                        $(".header").css({ "background-color": "#fff","box-shadow": "0 0 4px rgba(0, 0, 0, 0.5)"});
                        $(".header .main-nav .nav .mainmenu .menuchoice").css({"color": "#000"});
                        $(".header .main-nav .nav .mainmenulast a").css({"background-color": "#ec6952"})
                        $(".header .main-nav .nav .mainmenu .menuchoice").hover(function(){
                                $(this).css("color","#ec6952");
                                },function(){
                                    $(this).css("color","#000");
                        });
                        $(".header .main-nav .nav .mainmenulast a").hover(function(){
                            $(this).css("background-color","#ec6952");
                            },function(){
                                $(this).css("background-color","#ec6952");
                        });
                    }
                });
            }
        });             
        //End Navbar Change Color White
    </script>
</body>
</html>