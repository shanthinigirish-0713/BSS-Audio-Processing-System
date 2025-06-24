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
											<script>
						$(document).ready(function() {
						$("#nav").on('mouseover',function(g){	
				
					var audio = $("#login");
					$("#login").attr("src","audio/loginpage.mp3");
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
				<audio id="login"></audio>
					BSS based on audio frequency 
				</a>
				<button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center ml-auto">
						<li class="nav-item active  mr-3">
							<a class="nav-link" href="">
								<span class="sr-only">(current)</span>
							</a>
						</li>
												<li class="nav-item">
						
							<a class="nav-link scroll" href="logout.php"></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!-- //header -->
<style>
	
/* Container for categories */
.row {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin: 20px auto;
}

/* Category divs with Glassmorphism effect */
.category {
    flex: 1;
    padding: 20px;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    color: white;
    border-radius: 15px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    backdrop-filter: blur(10px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* Different background colors for each category */
.category[data-category="song"] {
    background: rgba(255, 99, 132, 0.3);
    border: 1px solid rgba(255, 99, 132, 0.5);
}

.category[data-category="news"] {
    background: rgba(54, 162, 235, 0.3);
    border: 1px solid rgba(54, 162, 235, 0.5);
}

.category[data-category="story"] {
    background: rgba(75, 192, 192, 0.3);
    border: 1px solid rgba(75, 192, 192, 0.5);
}

.category[data-category="all"] {
    background: rgba(255, 206, 86, 0.3);
    border: 1px solid rgba(255, 206, 86, 0.5);
}

/* Hover effect */
.category:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    backdrop-filter: blur(15px);
}
/* Different background colors */
.icon[data-name="Chrome"] {
            background: rgba(255, 99, 132, 0.3);
            border: 1px solid rgba(255, 99, 132, 0.5);
        }

        .icon[data-name="ChatGPT"] {
            background: rgba(54, 162, 235, 0.3);
            border: 1px solid rgba(54, 162, 235, 0.5);
        }

        .icon[data-name="Google"] {
            background: rgba(75, 192, 192, 0.3);
            border: 1px solid rgba(75, 192, 192, 0.5);
        }

        .icon[data-name="YouTube"] {
            background: rgba(255, 206, 86, 0.3);
            border: 1px solid rgba(255, 206, 86, 0.5);
        }

        /* Hover effect */
        .icon:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(15px);
        }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 category" data-category="song"> <img src="images/song.jpg"><br>
        <h2>Song</h2></div>
        <div class="col-md-3 category" data-category="information"> <img src="images/news.jpg"><br>
        <h2>News/Info</h2></div>
        <div class="col-md-3 category" data-category="story"><img src="images/story.jpg"> <br><h2>Story</h2></div>
        <div class="col-md-3 category" data-category="all"> <img src="images/all.jpg"> <br><h2>All</h2></div>
    </div>
</div>

<div class="text-center" id="audio">
    <h1>AUDIOS</h1>
    <div id="audioContainer">
        <!-- Fetched audio files will be displayed here -->
    </div>
</div>

<div class="row">
    <div class="icon" data-name="Chrome" data-url="https://www.google.com/chrome/">
        
    <img src="images/chrome.jpg">
    
</div>
    <div class="icon" data-name="ChatGPT" data-url="https://chat.openai.com/">    <img src="images/chatgpt.jpg"></div>
    <div class="icon" data-name="Google" data-url="https://www.google.com/">    <img src="images/google.jpg"></div>
    <div class="icon" data-name="YouTube" data-url="https://www.youtube.com/">    <img src="images/youtube.jpg"></div>
</div>

<!-- Copyright -->
<div class="cpy-right text-center">
    <p >© 2022. All rights reserved | Design by BSS Based On Audio Frequency</p>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    function speakText(text) {
        let speech = new SpeechSynthesisUtterance();
        speech.text = text;
        speech.lang = "en-US";
        speech.volume = 1;
        speech.rate = 1;
        speech.pitch = 1;
        window.speechSynthesis.speak(speech);
    }

    // Speak when hovering over the "Click here to hear audio" link
    $(document).on("mouseenter", ".audio-link", function () {
        speakText("Click here to hear audio");
    });

    // Speak when hovering over the "Download Audio" button
    $(document).on("mouseenter", ".download-audio", function () {
        speakText("Click here to download audio");
    });

    // Speak icon name on hover
    $(".icon").mouseenter(function () {
        let name = $(this).data("name");
        speakText(name);
    });

    // Redirect on icon click
    $(".icon").click(function () {
        let url = $(this).data("url");
        window.open(url, "_blank");
    });

    // Fetch audio files based on category selection
    $(".category").mouseenter(function () {
        let category = $(this).data("category");
        speakText("Fetching " + category + "s");

        $.ajax({
            url: "fetch_audio.php",
            type: "POST",
            data: { category: category },
            success: function (response) {
                $("#audioContainer").html(response);
            }
        });
    });
});
</script>




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
	<script src="js/SmoothScroll.min.js "></script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js">
	</script>
	<!-- //Bootstrap Core JavaScript -->
    <script>
function updateDownloadCount(audioId) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "update_download_count.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText); // Log response for debugging
        }
    };
    xhr.send("audio_id=" + audioId);
}
</script>




</body>

</html>