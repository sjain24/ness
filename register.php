<?php 
    // source code of form
    require 'functions.php';
	define('DB_NAME_1','ness');
 	define('DB_USER_1', 'root');
 	define('DB_PASSWORD_1', '');
 	define('DB_HOST_1', 'localhost');
 	$response['success'] = 'no';
    $phone_error = '';
    $email_error = '';
 	$connect_users= mysqli_connect(DB_HOST_1, DB_USER_1, DB_PASSWORD_1);
	if(!$connect_users){
		die('could not connect:'.mysql_error());
	}else{
		//echo 'MySQL connection successful///';
	};
	
	$select_db_users= mysqli_select_db($connect_users, DB_NAME_1);
 	if(!$select_db_users){
 		die('can not use '.DB_NAME_1.':'.mysql_error());
 	};
    if(isset($_POST['submit'])){
//id	alcher_id	team_name	member_count	members_name	colleges_name	streams_name	year_of_study	email	home_address	local_address
		$team_name= test_input($_POST['team_name']);
		$team_head_name= test_input($_POST['team_head_name']);
		
		$head_contact_number = test_input($_POST['head_contact_number']);
		$head_college_name = test_input($_POST['head_college_name']);
		$head_stream_study = test_input($_POST['head_stream_study']);
		$email= test_input($_POST['EMAIL']);
		$phone= test_input($_POST['head_contact_number']);
		$member_count = test_input($_POST['member_count']);
		$head_yos = test_input($_POST['head_yos']); // year of study
		$home_address = test_input($_POST['home_address']);
		$local_address = test_input($_POST['local_address']);
		$i = 1;
		$xbyunxb = test_input($_POST['xbyunxb']);
		$xbyunxb1 = test_input($_POST['xbyunxb1']);
		$xbyunxb2 = test_input($_POST['xbyunxb2']);
		$xbyunxb3 = test_input($_POST['xbyunxb3']);
		$xbyunxb4 = test_input($_POST['xbyunxb4']);
		
		$hcn = $head_contact_number;
		$thn = $team_head_name;
		$hcna = $head_college_name;
		
		$hss = $head_stream_study;
	    $yos = 	$head_yos;
	
		
	    //error reporting
		$head_contact_number_error = $email_error=  $team_name_error = $head_contact_number_error= $head_college_name_error= $team_head_name_error= $head_yos_error= $phone_error=$head_stream_study_error=$local_address_error=$home_address_error= $signup_error= "";
		$error_status= 0;
        
		
		if(empty($email)){
			$email_error= "Please enter a valid Email ID";
			$error_status= 1;
		}
		if(empty($phone)){
			$phone_error= "Please enter a valid Phone No";
			$error_status= 1;
		}
		if(empty($head_college_name)){
			$head_college_name_error= "College Name is required. In case not, contact us.";
			$error_status= 1;
		}
		if(empty($team_head_name)){
			$team_head_name_error= "Please enter your Team Head Name";
			$error_status= 1;
		}
		if(empty($team_name)){
			$team_name_error= "Please enter your Team Name";
			$error_status= 1;
		}
		if(sizeof($head_yos)==0){
			$head_yos_error= "Year of study of team head is required.";
			$error_status= 1;
			
		}
		if(empty($home_address)){
			$home_address_error= "Home address is required";
			$error_status= 1;
			
		}
		if(empty($local_address)){
			$local_address_error= "Local address is required. In case of same, write SAME.";
			$error_status= 1;
			
		}
		if(empty($head_stream_study)){
			$head_stream_study_error= "Stream of study is required.";
			$error_status= 1;
		}
        
		if($error_status==0){

			if(!preg_match("/^[".$name_pattern."]*$/",$team_head_name)){

				$team_head_name_error = "Only letters and white spaces";
				$error_status= 1;
			}

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

				$email_error = "Invalid email format";
				$error_status= 1;
			}

			if(strlen($phone)!=10){

				$phone_error= "Must have 10 digits";
				$error_status= 1;
			}

			if(!preg_match("/^[".$phone_pattern."]*$/",$phone)){

				$phone_error = "Only digits from 0 to 9 allowed";
				$error_status= 1;
			}

			if(!preg_match("/^[".$team_name_pattern."]*$/",$team_name)){

				$team_name_error = "Only letters and digits";
				$error_status= 1;
			}

			$team_head_name .= ','.$xbyunxb;
    	    $head_contact_number .= ','.$xbyunxb1;
    	    
    	    $head_college_name .= ','.$xbyunxb2;
    	    $head_stream_study .= ','.$xbyunxb3;
    	    $head_yos .= ','.$xbyunxb4;

			if($error_status==0){
		            $email_status = 0;
     		    $phone_status = 0;
    			$email_query_user= mysqli_query($connect_users,
					"SELECT * FROM ness WHERE email='$email' "
					);
				if($email_query_user && $email_query_user->num_rows!=0){
					$email_status=1;
					$email_error= "Email ID already registered";
				}
				$phone_query_user= mysqli_query($connect_users,
					"SELECT * FROM ness WHERE phone='$phone'"
					);
				if($phone_query_user && $phone_query_user->num_rows!=0){
					$phone_status=1;
					$phone_error= "Phone No already registered";
				}
    		    if ($email_status == 0 && $phone_status == 0){
    			$insert_temp= mysqli_query($connect_users,
                    "INSERT INTO ness VALUES ('','NESS-FULL-id','$team_name','$member_count','$team_head_name','$head_college_name','$head_stream_study','$head_yos','$email','$home_address','$local_address','$head_contact_number')");
                            $response['success'] = 'yes';
    						// Full texts	

						
						$user_id= mysqli_insert_id($connect_users);
						$fullname_trim= str_replace(" ", "", $team_name);
						$fullname_trim= str_replace("'", "", $fullname_trim);
						$fullname_trim= substr($fullname_trim, 0, 3);
						$fullname_trim= strtoupper($fullname_trim);
						$alcher_id= "NESS-".$fullname_trim."-".$user_id;
						if($insert_temp){

						$to= $email;
						
						$subject= "North East Social Summit | Alcheringa, IIT Guwahati";

						$email_welcome= "<p>Hi ".$team_name."!</p>";
						
						$email_body = "<p>Thank you for your registration at North East Social Summit, Alcheringa, IIT Guwahati.</p>";
						$email_body .= "<p>Your generated ALCHER ID is ".$alcher_id.".</p>";
						$email_body .= "<p>Please note that Case Study Solution upload deadline is Jan 5.</p>";
						$email_body .= "<p>Refer guidelines section of www.alcheringa.in/ness for detailed guidelines on solution upload.</p>";
						$email_body .= "<br>";
						$email_body .= "<p>For any queries : </p>";
						$email_body .= "<p>Contact: Sonu Yadav | 9435490926/ 7906903159</p>";
						$email_body .= "<p>sonu@alcheringa.in</p>";


						$email_thankyou= "<p>-</p>";
						$email_thankyou.= "<p>Thank You</p>";
						$email_thankyou.= "<p>Team Alcheringa</p>";
						
						
						send_mail($to, $subject, $email_welcome, $email_body, $email_thankyou);

						$message = "Hi ".$team_name."!";
                        
                        
                        
						$message .= "\n\nThank you for registering at North East Social Summit, Alcheringa, IIT Guwahati.";
						$message .= "\nYour generated ALCHER ID is ".$alcher_id.".";
						$message .= "\nFor more details, check your mail.";
						
						

						$message .= "\n\n-";
						$message .= "\nThank You";
						$message .= "\nTeam Alcheringa";
                        
						send_sms($phone, $message);

						

					}
					else{
						$signup_error= "Account could not be created. Please try again later.";
					}
		}		    
			    
			}
		}
 		

		
		
		
		

		
	}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>The Town HTML CSS Template</title>
    <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <!--
	The Town
	https://templatemo.com/tm-525-the-town
	-->
  </head>
  <body>    
    <!-- Hero section -->
    <section id="hero" class="text-white tm-font-big tm-parallax">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">              
        <div class="container">   
          <div class="tm-next">
              <a href="#hero" class="navbar-brand">The Town</a>
          </div>             
            
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#introduction">Introduction</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#work">Our Work</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#contact">Contact Us</a>
              </li>                    
            </ul>
          </div>        
        </div>
      </nav>
      
      <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner">
            <h2 class="tm-hero-title">The Town</h2>
            <p class="tm-hero-subtitle">
              Parallax Bootstrap Theme
              <br />by TemplateMo
            </p>
        </div>        
      </div>

      <div class="tm-next tm-intro-next">
        <a href="#introduction" class="text-center tm-down-arrow-link">
          <i class="fas fa-3x fa-caret-down tm-down-arrow"></i>
        </a>
      </div>      
    </section>

    <section id="introduction" class="tm-section-pad-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="img/the-town-01.jpg" alt="Image" class="img-fluid tm-intro-img" />
          </div>
          <div class="col-lg-6">
            <div class="tm-intro-text-container">
                <h2 class="tm-text-primary mb-4 tm-section-title">Introduction</h2>
                <p class="mb-4 tm-intro-text">
                  The Town is <strong>simple CSS template</strong> built on Bootstrap v4.1.3 
                  and this is a little parallax layout that you can use for your websites.
              </p>
                <p class="mb-5 tm-intro-text">
                  Please tell your friends about our site 
                  <a rel="nofollow" href="https://templatemo.com">templatemo</a>. Thank you.
                  Curabitur dapibus tristique enim a imperdiet. Etiam
              tristique sem sed condimentum posuere. </p>
                <div class="tm-next">
                  <a href="#work" class="tm-intro-text tm-btn-primary">Read More</a>
                </div>
            </div>
          </div>
        </div>

        <div class="row tm-section-pad-top">
          <div class="col-lg-4">
            <i class="fas fa-4x fa-bus text-center tm-icon"></i>
            <h4 class="text-center tm-text-primary mb-4">Curabitur at elit eu risus</h4>
            <p>
              Sed ultrices sit amet mi eu malesuada. Cras ultricies gravida
              nisi, ac pellentesque nunc tincidunt quis. Aenean at ornare lacus.
              Duis imperdiet lacus justo.
            </p>
          </div>
        
        <div class="col-lg-4 mt-5 mt-lg-0">
          <i class="fas fa-4x fa-bicycle text-center tm-icon"></i>
          <h4 class="text-center tm-text-primary mb-4">Nunc sed metus vel nisi</h4>
          <p>
            Praesent ut finibus leo. Duis et tempus ipsum, id pretium nunc.
            Vivamus imperdiet sem quis orci pharetra convallis. Nunc a tempus
            nisi, sed fringilla purus. In hac habitasse platea.
          </p>
        </div>
        <div class="col-lg-4 mt-5 mt-lg-0">
          <i class="fas fa-4x fa-city text-center tm-icon"></i>
          <h4 class="text-center tm-text-primary mb-4">Fusce sed nisi sagittis</h4>
          <p>
            Donec vestibulum libero nisl. Curabitur ac orci ac lorem blandit
            volutpat. Sed ac sodales nibh, ut porttitor elit. Sed id dui mi.
            Vestibulum ante ipsum primis in faucibus.
          </p>
        </div>
      </div>
    </section>
    <section id="work" class="tm-section-pad-top">
      <div class="container tm-container-gallery">
        <div class="row">
          <div class="text-center col-12">
              <h2 class="tm-text-primary tm-section-title mb-4">Our Work</h2>
              <p class="mx-auto tm-work-description">
                "Curabitur ac orci ac lorem blandit volutpat. Sed ac sodales nibh, ut
                porttitor elit. Sed id dui mi. Vestibulum ante ipsum primis in faucibus
                orci luctus et ultrices posuere cubilia."
              </p>
          </div>            
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mx-auto tm-gallery-container">
                    <div class="grid tm-gallery">
                      <a href="img/gallery-img-01.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-01.jpg" alt="Image" class="img-fluid">
                          <figcaption>
                            <h2><i>Dreamy <span>Honey</span> Now</i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-02.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-02.jpg" alt="Image" class="img-fluid">
                          <figcaption>
                            <h2><i>Second <span>Honey</span> Now</i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-03.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-03.jpg" alt="Image" class="img-fluid">
                          <figcaption>
                            <h2><i>Third <span>Honey</span> Now</i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-04.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-04.jpg" alt="Image" class="img-fluid">
                          <figcaption>
                            <h2><i>Dreamy <span>Honey</span> Now</i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-05.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-05.jpg" alt="Image" class="img-fluid">
                          <figcaption>
                            <h2><i>Fifth <span>Honey</span> Now</i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-06.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-06.jpg" alt="Image" class="img-fluid">
                          <figcaption>
                            <h2><i>Sixth <span>Honey</span> Now</i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-01.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-01.jpg" alt="Image" class="img-fluid">
                          <figcaption>
                            <h2><i>Dreamy <span>Honey</span> Now</i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-02.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-02.jpg" alt="Image" class="img-fluid">
                          <figcaption>
                            <h2><i>Eighth <span>Honey</span> Now</i></h2>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                </div>                
            </div>        
          </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">
      <div class="container tm-container-contact">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4 tm-section-title">Contact Us</h2>
                <div class="mb-5 tm-underline">
                  <div class="tm-underline-inner"></div>
                </div>
                <p class="mb-5">
                  Nullam tincidunt, lacus a suscipit luctus, elit turpis tincidunt dui,
                  non tempus sem turpis vitae lorem. Maecenas eget odio in sapien ultrices
                  viverra vitae vel leo. Curabitur at elit eu risus pharetra pellentesque
                  at at velit.
                </p>
            </div>
            
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
              <a href="tel:0100200340" class="tm-contact-item-link">
                  <i class="fas fa-3x fa-phone mr-4"></i>
                  <span class="mb-0">010-020-0340</span>
              </a>              
            </div>
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
              <a href="mailto:info@company.co" class="tm-contact-item-link">
                  <i class="fas fa-3x fa-envelope mr-4"></i>
                  <span class="mb-0">info@company.co</span>
              </a>              
            </div>
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
              <a href="https://www.google.com/maps" class="tm-contact-item-link">
                  <i class="fas fa-3x fa-map-marker-alt mr-4"></i>
                  <span class="mb-0">Location on Maps</span>
              </a>              
            </div>
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
              <form action="" method="get">
                <input name="email" type="email" placeholder="Subscribe your email" class="tm-input" required />
                <button type="submit" class="btn tm-btn-submit">Submit</button>
              </form>
            </div>
        </div>
      </div>
      <footer class="text-center small tm-footer">
          <p class="mb-0">
            Copyright &copy; 2019 Company Name 
            
            - Design: <a rel="nofollow" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
          </p>
        </footer>
    </section>
    <script src="js/jquery-1.9.1.min.js"></script>     
    <script src="slick/slick.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>     
    <script src="js/bootstrap.min.js"></script> 
    <script>

      function getOffSet(){
        var _offset = 450;
        var windowHeight = window.innerHeight;

        if(windowHeight > 500) {
          _offset = 400;
        } 
        if(windowHeight > 680) {
          _offset = 300
        }
        if(windowHeight > 830) {
          _offset = 210;
        }

        return _offset;
      }

      function setParallaxPosition($doc, multiplier, $object){
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
          bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
        $object.css({"background-position" : bg_css });
      }

      // Parallax function
      // Adapted based on https://codepen.io/roborich/pen/wpAsm        
      var background_image_parallax = function($object, multiplier, forceSet){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if(forceSet) {
          setParallaxPosition($doc, multiplier, $object);
        } else {
          $(window).scroll(function(){          
            setParallaxPosition($doc, multiplier, $object);
          });
        }
      };

      var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});
        $(window).scroll(function(){
          var firstTop = $object.offset().top,
              pos = $(window).scrollTop(),
              yPos = Math.round((multiplier * (firstTop - pos)) - 186);              

          var bg_css = 'center ' + yPos + 'px';

          $object.css({"background-position" : bg_css });
        });
      };
      
      $(function(){
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);   
        
        // Handle window resize
        window.addEventListener('resize', function(){
          background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){          
          if($(document).scrollTop() > 120) {
            $('.tm-navbar').addClass("scroll");
          } else {
            $('.tm-navbar').removeClass("scroll");
          }
        });
        
        // Close mobile menu after click 
        $('#tmNav a').on('click', function(){
          $('.navbar-collapse').removeClass('show'); 
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav();        
        
        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 400, function(){
              window.location.hash = hash;
            });
          } // End if
        });

        // Pop up
        $('.tm-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          gallery: { enabled: true }
        });

        // Gallery
        $('.tm-gallery').slick({
          dots: true,
          infinite: false,
          slidesToShow: 5,
          slidesToScroll: 2,
          responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
        });
      });
    </script>
  </body>
</html>