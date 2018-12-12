<html>
	<head>
		<title>Retron Comics</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Retron Comics</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.php">Heroes & Monsters</a></li>
<li><a href="generic_02.php">Heroes & Monsters EpiIII</a></li>

										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Heroes And Monsters</h2>
							<p>Episode Three</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

									<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Heroes & Monsters</span></h1>
		</div>
<div class="container">
  <div class="mySlides">
         <div class="numbertext">1 / 13</div>
    <img src="episode3/01.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 13</div>
    <img src="episode3/02.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">3 / 13</div>
    <img src="episode3/03.jpg" style="width:100%">
  </div>
  
  <div class="mySlides">
    <div class="numbertext">4 / 13</div>
    <img src="episode3/04.jpg" style="width:100%">
  </div>

 <div class="mySlides">
    <div class="numbertext">5 / 13</div>
    <img src="episode3/05.jpg" style="width:100%">
  </div>
  
  <div class="mySlides">
    <div class="numbertext">6 / 13</div>
    <img src="episode3/06.jpg" style="width:100%">
  </div>
  
  <div class="mySlides">
    <div class="numbertext">7 / 13</div>
    <img src="episode3/07.jpg" style="width:100%">
  </div>
  
  <div class="mySlides">
    <div class="numbertext">8 / 13</div>
    <img src="episode3/08.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">9 / 13</div>
    <img src="episode3/09.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">10 / 13</div>
    <img src="episode3/10.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">11 / 13</div>
    <img src="episode3/11.jpg" style="width:100%">
  </div>
  
  <div class="mySlides">
    <div class="numbertext">12 / 13</div>
    <img src="episode3/12.jpg" style="width:100%">
  </div>
  
  <div class="mySlides">
    <div class="numbertext">13 / 13</div>
    <img src="episode3/13.jpg" style="width:100%">
  </div>
  
 

 <a class="prev" onclick="plusSlides(-1)"><</a>
  <a class="next" onclick="plusSlides(1)">></a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>
</div>
  
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
		</div>
	</div>
	<div class="clear"> </div>
	<div class="footer">
				
								<hr />
							<section class="padded">
								<h4>Comment Section</h4>
						<div class="comment_input">
        <form name="form1">
        	<input type="text" name="name" placeholder="Name..."/></br></br>
            <textarea name="comments" placeholder="Leave Comments Here..." style="width:635px; height:100px;"></textarea></br></br>
            <a href="#" onClick="commentSubmit()" class="button">Post</a></br>
        </form>
    </div>
    <div id="comment_logs">
    	Loading comments...
    <div>



							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="https://twitter.com/retroncomics?ref_src=twsrc%5Etfw" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://web.facebook.com/retroncomics/posts/1140385752765453" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://instagram.com/retroncomics" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						
						</ul>
						<ul class="copyright">
							<li>&copy; 2017</li><li>Design: <a href="#">Wuxian</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
  padding:50px;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

.padded{
	padding-left:20px;

}
/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>

<script>

	function commentSubmit(){
		if(form1.name.value == '' && form1.comments.value == ''){ //exit if one of the field is blank
			alert('Enter your message !');
			return;
		}
		var name = form1.name.value;
		var comments = form1.comments.value;
		var xmlhttp = new XMLHttpRequest(); //http request instance
		
		xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
			}
		}
		xmlhttp.open('GET', 'insert03.php?name='+name+'&comments='+comments, true); //open and send http request
		xmlhttp.send();
	}
	
		$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('logs03.php');}, 2000);
		});
		
</script>
	</body>
</html>