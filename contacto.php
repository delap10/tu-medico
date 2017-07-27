<!DOCTYPE html>
<html lang="es">
<head>
	<title>Tú, médico</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Fresca|Lobster|Shadows+Into+Light" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="lib/js/jquery.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      	#map {
        	width: 100%;
        	height: 600px;
        	background-color: grey;
      		}
    </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
	    <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	    		<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>                        
	      	</button>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	    	<ul class="nav navbar-nav">
	        	<li><a href="index.php">INICIO</a></li>
	        	<li><a href="about.php">CONÓCENOS</a></li>
	        	<li class="active"><a href="#contact">CONTÁCTANOS</a></li>
	        	<li><a href="curso.php">CURSOS</a></li>
	        	<li><a href="live.php">LIVE</a></li>
	      	</ul>

	      	<ul class="nav navbar-nav navbar-right">
	      		<form class="navbar-form navbar-left" role="search">
			      	<div class="form-group">
			        	<a href="about.php" class="btn btn-info boton-izq"><span><i class="fa fa-pencil" aria-hidden="true"></i>REGÍSTRATE</span></a>
			      	</div>
			      	<div class="form-group">
			      		<a href="contacto.php" class="btn btn-success boton-der"><span><i class="fa fa-sign-in" aria-hidden="true"></i>INICIA SESIÓN</span></a>
			      	</div>
			    </form>
	      	</ul>
	    </div>
	  </div>
	</nav>

	<div class="canvas">
		<center>
			<canvas id="demo" width="500" height="200"></canvas>
			<script src="ecg.js"></script>
		</center>
	</div>

	<!-- Container (Maps Section) -->
	<div id="contact" class="container-fluid">
		<div class="row">
			<div id="map"></div>
			<script>
		     	function initMap() {
		        	var uluru = {lat: 14.879146, lng: -92.254614};
		        	var map = new google.maps.Map(document.getElementById('map'), {
		        		zoom: 17,
		          		center: uluru
		        	});
		        	var marker = new google.maps.Marker({
		          		position: uluru,
		          		map: map
		        	});
		      	}
		    </script>
		    <script async defer
		    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi9aD0KzlOU74UwjC21GLVVaqgdMmOQh0&callback=initMap">
		    </script>
		</div>
	</div>

	<!-- Container (Contact Section) -->
	<div class="container-fluid bg-grey">
  		<h2 class="text-center">CONTACT</h2>
  		<div class="row">
    		<div class="col-sm-5">
      			<p>Contact us and we'll get back to you within 24 hours.</p>
      			<p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      			<p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      			<p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    		</div>
    		<div class="col-sm-7 slideanim">
      			<div class="row">
        			<div class="col-sm-6 form-group">
          				<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        			</div>
        			<div class="col-sm-6 form-group">
          				<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        			</div>
      			</div>
      			<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      			<div class="row">
        			<div class="col-sm-12 form-group">
          				<button class="btn btn-default pull-right" type="submit">Send</button>
        			</div>
      			</div>
    		</div>
  		</div>
	</div>

	<footer class="container-fluid text-center panel-footer">
  		<a href="#myPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  		</a><br>
  		<a href="https://www.facebook.com/Salud-Atenci%C3%B3n-al-paciente-Trabajo-en-equipo-663834127160759/">
  			<i class="fa fa-facebook-official"></i>
  		</a>
	</footer>

	<script>
		$(document).ready(function(){
  		// Add smooth scrolling to all links in navbar + footer link
  			$(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    		// Make sure this.hash has a value before overriding default behavior
    			if (this.hash !== "") {
      			// Prevent default anchor click behavior
      				event.preventDefault();

			    	// Store hash
      				var hash = this.hash;

			    	// Using jQuery's animate() method to add smooth page scroll
      				// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      				$('html, body').animate({
        				scrollTop: $(hash).offset().top
      				}, 900, function(){
    					// Add hash (#) to URL when done scrolling (default click behavior)
        				window.location.hash = hash;
      				});
    			} // End if
  			});
  
  			$(window).scroll(function() {
    			$(".slideanim").each(function(){
      				var pos = $(this).offset().top;

      				var winTop = $(window).scrollTop();
        			if (pos < winTop + 600) {
          				$(this).addClass("slide");
        			}
    			});
  			});
		})
	</script>

</body>
</html>