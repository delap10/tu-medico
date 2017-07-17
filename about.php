<!DOCTYPE html>
<html lang="es">
<head>
	<title>Tú, médico</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Fresca|Lobster|Shadows+Into+Light" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
	      	<a class="navbar-brand" href="#myPage">Logo</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	    	<ul class="nav navbar-nav navbar-right">
	        	<li><a href="index.php">HOME</a></li>
	        	<li><a href="#about">CONÓCENOS</a></li>
	        	<li><a href="#portfolio">COMUNIDAD</a></li>
	        	<li><a href="contacto.php">CONTÁCTANOS</a></li>
	      	</ul>
	    </div>
	  </div>
	</nav>

	<div class="jumbotron text-center">
		<img src="lib/img/logo.png" width="350">
  		<h1>Tú, médico</h1> 
  		<p>Salud, Atención al paciente & Trabajo en equipo</p>
	</div>

	<div id="about" class="container-fluid">
  		<div class="row">
    		<div class="mision">
				<img src="lib/img/mision.jpg" alt="Misión" width="800" height="400">
				<h1>Misión</h1>
			</div>
  		</div>
	</div>
	
	<div class="container-fluid">
  		<div class="row">
    		<div class="vision">
				<img src="lib/img/vision.jpg" class="slideanim" alt="Visión" width="800" height="400" style="float: right;">
				<h1>Visión</h1>
			</div>
  		</div>
	</div>

	<footer class="container-fluid text-center">
  		<a href="#myPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  		</a><br>
  		<i class="fa fa-facebook-official">
  			<a href="https://www.facebook.com/Salud-Atenci%C3%B3n-al-paciente-Trabajo-en-equipo-663834127160759/">
  				Salud, atención al paciente & trabajo en equipo
  			</a>
  		</i>
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