<!DOCTYPE html>
<html lang="es">
<head>
	<title>Yo médico</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
	<link rel="stylesheet" type="text/css" href="lib/css/live-background.css">
	<link href="https://fonts.googleapis.com/css?family=Fresca|Lobster|Shadows+Into+Light" rel="stylesheet">
	<link rel="stylesheet" href="lib/css/font-awesome.min.css">
	<script src="lib/js/jquery.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	
	<!-- Iconos para el fondo de pantalla -->
	<div>
		<ul class="bg-bubbles">
			<li><i class="fa fa-stethoscope""></i></li>
			<li><i class="fa fa-heartbeat"></i></li>
			<li><i class="fa fa-user-md"></i></li>
			<li><i class="fa fa-plus-square"></i></li>
			<li><i class="fa fa-medkit" ></i></li>
			<li><i class="fa fa-hospital-o"></i></li>
			<li><i class="fa fa-heart"></i></li>
			<li><i class="fa fa-ambulance"></i></li>
			<li><i class="fa fa-h-square"></i></li>
			<li><i class="fa fa-heart-o"></i></li>

			<li><i class="fa fa-heart-o"></i></li>
			<li><i class="fa fa-h-square"></i></li>
			<li><i class="fa fa-ambulance"></i></li>
			<li><i class="fa fa-heart"></i></li>
			<li><i class="fa fa-hospital-o"></i></li>
			<li><i class="fa fa-medkit"></i></li>
			<li><i class="fa fa-plus-square"></i></li>
			<li><i class="fa fa-user-md"></i></li>
			<li><i class="fa fa-heartbeat"></i></li>
			<li><i class="fa fa-stethoscope"></i></li>
			
			<li><i class="fa fa-plus-square"></i></li>
			<li><i class="fa fa-medkit"></i></li>
			<li><i class="fa fa-hospital-o"></i></li>
			<li><i class="fa fa-stethoscope"></i></li>
			<li><i class="fa fa-ambulance"></i></li>
			<li><i class="fa fa-h-square"></i></li>
			<li><i class="fa fa-heartbeat"></i></li>
			<li><i class="fa fa-user-md"></i></li>
			<li><i class="fa fa-heart"></i></li>
			<li><i class="fa fa-heart-o"></i></li>
		</ul>
	</div>

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
	        	<li><a href="contacto.php">CONTÁCTANOS</a></li>
	        	<li><a href="curso.php">CURSOS</a></li>
	        	<li class="active"><a href="#evento">LIVE</a></li>
	      	</ul>

	      	<ul class="nav navbar-nav navbar-right">
	      		<form class="navbar-form navbar-left">
			      	<div class="form-group">
			        	<button class="button"><span><i class="fa fa-pencil" aria-hidden="true"></i> REGÍSTRATE</span></button>
			      	</div>
			      	<div class="form-group">
			      		<button class="button"><span><i class="fa fa-sign-in" aria-hidden="true"></i> INICIA SESIÓN</span></button>
			      	</div>
			    </form>
	      	</ul>
	    </div>
	  </div>
	</nav>

	<div class="canvas">
		<center>
			<canvas id="demo" width="500" height="200" class="contenido"></canvas>
			<script src="ecg.js"></script>
		</center>
	</div>

	<!-- Container (About Section) -->
	<div id="curso" class="container-fluid">
  		<div class="row text-center contenido">
          <h1>PROXIMAMENTE</h1>
  		</div>
	</div>

	<footer class="container-fluid text-center panel-footer">
  		<div class="contenido">
	  		<a href="#myPage" title="To Top">
	    		<span class="glyphicon glyphicon-chevron-up"></span>
	  		</a><br>
	  		<a href="https://www.facebook.com/Salud-Atenci%C3%B3n-al-paciente-Trabajo-en-equipo-663834127160759/">
	  			<i class="fa fa-facebook-official"></i>
	  		</a>
	  	</div>
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