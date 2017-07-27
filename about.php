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
    <script src="lib/js/egc.js"></script>
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
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	    	<ul class="nav navbar-nav">
	        	<li><a href="index.php">INICIO</a></li>
	        	<li class="active"><a href="#about">CONÓCENOS</a></li>
	        	<li><a href="contacto.php">CONTÁCTANOS</a></li>
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
	<div id="about" class="container-fluid bg-grey">
  		<div class="row mision">
    		<div class="col-sm-9">
				<img src="lib/img/mision.jpg" alt="Misión">
			</div>
			<div class="col-sm-3">
				<h1>Misión</h1>
			</div>
  		</div>
	</div>
	
	<div class="container-fluid">
  		<div class="row vision">
  			<div class="col-sm-3">
				<h1 style="color: white;">Visión</h1>
			</div>
    		<div class="col-sm-9">
				<img src="lib/img/vision.jpg" class="slideanim" alt="Visión">
			</div>
  		</div>
	</div>

	<div class="container-fluid text-center bg-grey">
		<div class="row text-center">
			<h1>Nuestro equipo</h1>
			<div class="card">
			  	<img src="lib/img/img_avatar.png" class="img-circle" alt="Avatar" style="width:100%">
			  	<div class="container-card">
			    	<h4><b>John Doe</b></h4> 
			    	<p>Architect & Engineer</p> 
			  	</div>
			</div>

			<div class="card">
			  	<img src="lib/img/img_avatar.png" class="img-circle" alt="Avatar" style="width:100%">
			  	<div class="container-card">
			    	<h4><b>John Doe</b></h4> 
			    	<p>Architect & Engineer</p> 
			  	</div>
			</div>

			<div class="card">
			  	<img src="lib/img/img_avatar.png" class="img-circle" alt="Avatar" style="width:100%">
			  	<div class="container-card">
			    	<h4><b>John Doe</b></h4> 
			    	<p>Architect & Engineer</p> 
			  	</div>
			</div>

			<div class="card">
			  	<img src="lib/img/img_avatar.png" class="img-circle" alt="Avatar" style="width:100%">
			  	<div class="container-card">
			    	<h4><b>John Doe</b></h4> 
			    	<p>Architect & Engineer</p> 
			  	</div>
			</div>

			<div class="card">
			  	<img src="lib/img/img_avatar.png" class="img-circle" alt="Avatar" style="width:100%">
			  	<div class="container-card">
			    	<h4><b>John Doe</b></h4> 
			    	<p>Architect & Engineer</p> 
			  	</div>
			</div>

			<div class="card">
			  	<img src="lib/img/img_avatar.png" class="img-circle" alt="Avatar" style="width:100%">
			  	<div class="container-card">
			    	<h4><b>John Doe</b></h4> 
			    	<p>Architect & Engineer</p> 
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