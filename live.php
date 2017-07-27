<!DOCTYPE html>
<html lang="es">
<head>
	<title>Tú, médico</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
	<link rel="stylesheet" type="text/css" href="lib/css/live-background.css">
	<link href="https://fonts.googleapis.com/css?family=Fresca|Lobster|Shadows+Into+Light" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	
	<!-- Iconos para el fondo de pantalla -->
	<div>
		<ul class="bg-bubbles">
			<li><i class="fa fa-stethoscope" style="font-size: 150px;"></i></li>
			<li><i class="fa fa-heartbeat" style="font-size: 100px;"></i></li>
			<li><i class="fa fa-user-md" style="font-size: 50px;"></i></li>
			<li><i class="fa fa-plus-square" style="font-size: 100px;"></i></li>
			<li><i class="fa fa-medkit" style="font-size: 48px;"></i></li>
			<li><i class="fa fa-hospital-o" style="font-size: 16px;"></i></li>
			<li><i class="fa fa-heart" style="font-size: 48px;"></i></li>
			<li><i class="fa fa-ambulance" style="font-size: 36px;"></i></li>
			<li><i class="fa fa-h-square" style="font-size: 16px;"></i></li>
			<li><i class="fa fa-heart-o" style="font-size: 36px;"></i></li>

			<li><i class="fa fa-heart-o" style="font-size: 100px;"></i></li>
			<li><i class="fa fa-h-square" style="font-size: 50px;"></i></li>
			<li><i class="fa fa-ambulance" style="font-size: 50px;"></i></li>
			<li><i class="fa fa-heart" style="font-size: 16px;"></i></li>
			<li><i class="fa fa-hospital-o" style="font-size: 48px;"></i></li>
			<li><i class="fa fa-medkit" style="font-size: 16px;"></i></li>
			<li><i class="fa fa-plus-square" style="font-size: 36px;"></i></li>
			<li><i class="fa fa-user-md" style="font-size: 150px;"></i></li>
			<li><i class="fa fa-heartbeat" style="font-size: 48px;"></i></li>
			<li><i class="fa fa-stethoscope" style="font-size: 16px;"></i></li>
			
			<li><i class="fa fa-plus-square" style="font-size: 36px;"></i></li>
			<li><i class="fa fa-medkit" style="font-size: 100px;"></i></li>
			<li><i class="fa fa-hospital-o" style="font-size: 150px;"></i></li>
			<li><i class="fa fa-stethoscope" style="font-size: 50px;"></i></li>
			<li><i class="fa fa-ambulance" style="font-size: 16px;"></i></li>
			<li><i class="fa fa-h-square" style="font-size: 48px;"></i></li>
			<li><i class="fa fa-heartbeat" style="font-size: 16px;"></i></li>
			<li><i class="fa fa-user-md" style="font-size: 36px;"></i></li>
			<li><i class="fa fa-heart" style="font-size: 100px;"></i></li>
			<li><i class="fa fa-heart-o" style="font-size: 50px;"></i></li>
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