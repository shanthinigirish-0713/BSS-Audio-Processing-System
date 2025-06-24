<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>BSS Based On Audio Frequency</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Music Buzz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script src="jquery-3.6.0.min.js"></script>   
	<script src="AlertifyJS-master/build/alertify.min.js"></script>
	<link rel="stylesheet" href="AlertifyJS-master/build/css/alertify.min.css">
    <link rel="stylesheet" href="AlertifyJS-master/build/css/themes/default.min.css">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<!--//webfonts-->
	<!--<script>
	function f()
	{
		var Name=document.getElementById("name").value;
		var Mail=document.getElementById("mail").value;
		var password=document.getElementById("psw").value;
		var confirmpsw=document.getElementById("cpsw").value;
		var phone=document.getElementById("phone").value;
		
		if(Name=="")
		{
			alertify.alert("Enter the Name");
			return false;
		}
		else if(Mail=="")
		{
			alertify.alert("Enter the Email Id");
		    return false;
	    }
	    else if(password=="")
		{
			alertify.alert("Enter the Password");
			return false;
		}
	    else if(confirmpsw=="")
		{
			alertify.alert("Enter the Confirm Password");
			return false;
		}
		else if(password!=confirmpsw)
		{
			alertify.alert("Enter the Same Password");
			return false;
		}
		else if(phone=="")
		{
			alertify.alert("Enter the Phone Number");
			return false;
		}
		else
		{
			return true;
		}
	}
	
    </script> 
	<script>
	window.onload=function()
	{
		document.getElementById("audio").play();
	}
	</script>-->
	<script>

 
$(document).ready(function() {

//sound page
				$("#name").on('mouseover',function(e){	
				
					var audio = $("#soundplayer");
					$("#soundplayer").attr("src","audio/name.mp3");
					audio[0].play();
					//localStorage.setItem("sound","1.mp3");
					//alert(localStorage.getItem("fName"));
						});
						$("#mail").on('mouseover',function(e){	
				
					var audio = $("#email");
					$("#email").attr("src","audio/email.mp3");
					audio[0].play();
					//localStorage.setItem("sound","1.mp3");
					//alert(localStorage.getItem("fName"));
						});
						$("#psw").on('mouseover',function(e){
						var audio = $("#pass");
					$("#pass").attr("src","audio/password.mp3");
					audio[0].play();
					//localStorage.setItem("sound","1.mp3");
					//alert(localStorage.getItem("fName"));
						});
						$("#cpsw").on('mouseover',function(e){
					var audio = $("#cpass");
					$("#cpass").attr("src","audio/confirmpass.mp3");
					audio[0].play();
					//localStorage.setItem("sound","1.mp3");
					//alert(localStorage.getItem("fName"));
						});
						$("#phone").on('mouseover',function(e){
					var audio = $("#num");
					$("#num").attr("src","audio/phone.mp3");
					audio[0].play();
					//localStorage.setItem("sound","1.mp3");
					//alert(localStorage.getItem("fName"));
						});
						$("#reg").on('click',function(e){
					var audio = $("#btn");
					$("#btn").attr("src","audio/registered.mp3");
					audio[0].play();
					//localStorage.setItem("sound","1.mp3");
					//alert(localStorage.getItem("fName"));
						});

						});
						
						</script>
						<script>
						$(document).ready(function() {
						$("#mailid").on('mouseover',function(e){	
				
					var audio = $("#emailid");
					$("#emailid").attr("src","audio/email.mp3");
					audio[0].play();
					//localStorage.setItem("sound","1.mp3");
					//alert(localStorage.getItem("fName"));
						});
						$("#psword").on('mouseover',function(e){
						var audio = $("#password");
					$("#password").attr("src","audio/password.mp3");
					audio[0].play();
					//localStorage.setItem("sound","1.mp3");
					//alert(localStorage.getItem("fName"));
						});
						$("#button").on('click',function(e){
						var audio = $("#btns");
					$("#btns").attr("src","audio/loged in.mp3");
					audio[0].play();
					//localStorage.setItem("sound","1.mp3");
					//alert(localStorage.getItem("fName"));
						});
						});
						</script>
						<script>
						$(document).ready(function() {
						$("#REG").on('mouseover',function(g){	
				
					var audio = $("#REGIS");
					$("#REGIS").attr("src","audio/register.mp3");
					audio[0].play();
					//localStorage.setItem("sound","1.mp3");
					//alert(localStorage.getItem("fName"));
						});
						$("#LOG").on('mouseover',function(g){
						var audio = $("#LOGIN");
					$("#LOGIN").attr("src","audio/login.mp3");
					audio[0].play();
					//localStorage.setItem("sound","1.mp3");
					//alert(localStorage.getItem("fName"));
						});
						});
						</script>
												<script>
						$(document).ready(function() {
						$("#nav").on('mouseover',function(g){	
				
					var audio = $("#welcome");
					$("#welcome").attr("src","audio/welcome.mp3");
					audio[0].play();
					//localStorage.setItem("sound","1.mp3");
					//alert(localStorage.getItem("fName"));
						});
});
						</script>


</head>

<body>
	<!-- header -->
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light" >
				<a class="navbar-brand" id="nav">
				<audio id="welcome"></audio>
					BSS based on audio frequency 
				</a>
				<button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center ml-auto">
						<li class="nav-item active  mr-3">
							<a class="nav-link" href="">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item  mr-3">
							<a class="nav-link scroll" href="#about">about</a>
						</li>
						<li class="nav-item">
						<audio id="REGIS"></audio>
							<a class="nav-link scroll" href="#register" id="REG">Register</a>
						</li>
						<li class="nav-item">
						<audio id="LOGIN"></audio>
							<a class="nav-link scroll" href="#login" id="LOG">Login</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!-- //header -->
	<!-- banner -->
	<div class="banner" id="home">
		<div class="container">
			<div class="banner-text">
				<div class="slider-info text-right">
					<h1 class="text-uppercase">BSS BASED ON AUDIO PROCESSING SYSTEM</h1>
				
	
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
		<!-- services -->
	<section class="about-w3ls py-md-5 pb-3" id="about">
		<div class="row">
			<div class="col-lg-8 section-3">
				<div class="col-lg-8 mx-auto py-lg-5">
					<h3 class="stat-title text-white">User's Friendly</h3>
					<div class="row">
						<div class="col-md-6 agileits-abt-grids my-5">
							<h4></h4>
							<p class="sec-4">User is the main module in this system. Users are the visually impaired people.</p>
						</div>
						<div class="col-md-6 agileits-abt-grids my-md-5">
							<h4></h4>
							<p class="sec-4">	This system makes it easy for the visually impaired people to enter the data.	</p>
						</div>
						<div class="col-md-6 agileits-abt-grids mt-md-0 mt-5">
							<h4></h4>
							<p class="sec-4">Visually impaired people can also register in this site on themselves.</p>
						</div>
						<div class="col-md-6 agileits-abt-grids mt-md-0 mt-5">
							<h4></h4>
							<p class="sec-4">During registration, the fields are displays in this system.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 img-section3 p-0 my-lg-auto mx-auto">
				<img src="images/i4.png" alt="" class="img-fluid">
			</div>
		</div>
	</section>
<!-- Register Section -->
<div class="w3-contact py-5" id="register">
  <div class="container">
    <div class="row contact-form pt-md-5">
      <div class="col-lg-6 wthree-form my-lg-0 mt-5">
        <h5>Register Your Details</h5>
        <div class="contact-top1">
          <form action="reg_action.php" method="post" enctype="multipart/form-data" class="contact-wthree">
            
            <!-- Name -->
            <div class="form-group d-flex">
              <label>Name</label>
              <input class="form-control" type="text" placeholder="Enter Your Name" name="name" id="name" required>
              <button type="button" onclick="startSpeechRecognition('name')" class="btn btn-secondary" onmouseover="speakOnHover('Click here to speak')">
                <i class="fas fa-microphone"></i>
              </button>
            </div>

            <!-- Email -->
            <div class="form-group d-flex">
              <label>Email</label>
              <input class="form-control" type="email" placeholder="Enter Your EmailId" name="email" id="mail" required>
              <button type="button" onclick="startSpeechRecognition('mail')" class="btn btn-secondary" onmouseover="speakOnHover('Click here to speak')">
                <i class="fas fa-microphone"></i>
              </button>
            </div>

            <!-- Password -->
            <div class="form-group d-flex">
              <label>Password</label>
              <input class="form-control" type="password" placeholder="Enter Your Password" name="pass" id="psw" required>
              <button type="button" onclick="startSpeechRecognition('psw')" class="btn btn-secondary" onmouseover="speakOnHover('Click here to speak')">
                <i class="fas fa-microphone"></i>
              </button>
            </div>

            <!-- Confirm Password -->
            <div class="form-group d-flex">
              <label>Confirm Password</label>
              <input class="form-control" type="password" placeholder="Re-enter Your Password" name="confirmpass" id="cpsw" required>
              <button type="button" onclick="startSpeechRecognition('cpsw')" class="btn btn-secondary" onmouseover="speakOnHover('Click here to speak')">
                <i class="fas fa-microphone"></i>
              </button>
            </div>

            <!-- Phone -->
            <div class="form-group d-flex">
              <label>Phone Number</label>
              <input class="form-control" type="text" placeholder="Enter Your Phone Number" name="phone" id="phone" required>
              <button type="button" onclick="startSpeechRecognition('phone')" class="btn btn-secondary" onmouseover="speakOnHover('Click here to speak')">
                <i class="fas fa-microphone"></i>
              </button>
            </div>

            <!-- Submit -->
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-agile btn-block w-50" id="reg">Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Login Section -->
<div class="contact-top text-center" id="login">
  <div class="content-contact-top">
    <center>
      <div class="col-lg-6 wthree-form- my-lg-0 mt-5">
        <h5>Login With Your Details</h5>
        <div class="contact-top1">
          <form action="login_action.php" method="post" enctype="multipart/form-data" class="contact-wthree">

            <!-- Email -->
            <div class="form-group d-flex align-items-center">
              <label class="me-2">Email</label>
              <input class="form-control me-2" type="email" placeholder="Enter Your EmailId" name="email" id="mailid" required>
              <button type="button" onclick="startSpeechRecognition('mailid')" class="btn btn-secondary" onmouseover="speakOnHover('Click here to speak')">
                <i class="fas fa-microphone"></i>
              </button>
            </div>

            <!-- Password -->
            <div class="form-group d-flex align-items-center">
              <label class="me-2">Password</label>
              <input class="form-control me-2" type="password" placeholder="Enter Your Password" name="pass" id="psword" required>
              <button type="button" onclick="startSpeechRecognition('psword')" class="btn btn-secondary" onmouseover="speakOnHover('Click here to speak')">
                <i class="fas fa-microphone"></i>
              </button>
            </div>

            <!-- Submit -->
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-agile btn-block w-50" id="button">Submit</button>
            </div>

          </form>
        </div>
      </div>
    </center>
  </div>
</div>

<!-- JavaScript Section -->
<script>
  function speakText(text) {
    const synth = window.speechSynthesis;
    const utterance = new SpeechSynthesisUtterance(text);
    synth.speak(utterance);
  }

  function speakOnHover(message) {
    speakText(message);
  }

  function startSpeechRecognition(fieldId) {
    if ('SpeechRecognition' in window || 'webkitSpeechRecognition' in window) {
      const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
      recognition.lang = 'en-US';

      speakText("Please speak now");

      recognition.onresult = function (event) {
        const speechResult = event.results[0][0].transcript;
        document.getElementById(fieldId).value = speechResult;
        speakText("You said: " + speechResult);
      };

      recognition.onerror = function (event) {
        alert('Speech recognition error: ' + event.error);
      };

      recognition.start();
    } else {
      alert('Speech recognition is not supported by this browser.');
    }
  }

  // Speak input as user types
  const fieldsToWatch = ["mail", "psw", "cpsw", "phone", "name"];
  fieldsToWatch.forEach(id => {
    const input = document.getElementById(id);
    if (input) {
      input.addEventListener("keyup", function (event) {
        speakText(event.target.value);
      });
    }
  });
</script>

	<!-- //contact top -->
	             
	<!-- copyright -->
	<div class="cpy-right text-center">
		<p>© 2022. All rights reserved | Design by
			BSS Based On Audio Frequency
		</p>
	</div>
	<!-- //copyright -->
	<!-- js-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- js-->
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js "></script>
	<script src="js/easing.js "></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll ").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			 var defaults = {
				 containerID: 'toTop', // fading element id
				 containerHoverID: 'toTopHover', // fading element hover id
				 scrollSpeed: 1200,
				 easingType: 'linear' 
			 };
			 */

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script>
    // Function to create speech synthesis
    function speakText(text) {
        const synth = window.speechSynthesis;
        const utterance = new SpeechSynthesisUtterance(text);

        // Optional: Set voice and other properties
        // const voices = synth.getVoices();
        // utterance.voice = voices[0];
        // utterance.pitch = 1;
        // utterance.rate = 1;

        synth.speak(utterance);
    }

    // Attach the keyup event handler to the input fields
    const input1 = document.getElementById("mailid");
    const input2 = document.getElementById("psword");
	

    input1.addEventListener("keyup", function(event) {
        const text = event.target.value;
        speakText(text);
    });

    input2.addEventListener("keyup", function(event) {
        const text = event.target.value;
        speakText(text);
    });
	
</script>
	<script src="js/SmoothScroll.min.js "></script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>

</html>