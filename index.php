<!DOCTYPE html>
<html lang="es">
<head>
	<title>Yo médico</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
  <link rel="stylesheet" type="text/css" href="lib/css/form.css">
	<link href="https://fonts.googleapis.com/css?family=Fresca|Lobster|Shadows+Into+Light" rel="stylesheet">
	<link rel="stylesheet" href="lib/css/font-awesome.min.css">
  <script src="lib/js/jquery.min.js"></script>
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
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	    	<ul class="nav navbar-nav">
	        	<li class="active"><a href="#home">INICIO</a></li>
	        	<li><a href="about.php">CONÓCENOS</a></li>
	        	<li><a href="contacto.php">CONTÁCTANOS</a></li>
	        	<li><a href="curso.php">CURSOS</a></li>
	        	<li><a href="live.php">LIVE</a></li>
	      	</ul>

	      	<ul class="nav navbar-nav navbar-right">
	      		<form class="navbar-form navbar-left">
			      	<div class="form-group">
			        	<button class="button"><span><i class="fa fa-pencil" aria-hidden="true"></i> REGÍSTRATE</span></button>
			      	</div>
			      	<!-- div class="form-group" -->
			      		<button class="button" onclick="document.getElementById('form-login').style.display='block'" style="width:auto;"><span><i class="fa fa-sign-in" aria-hidden="true"></i> INICIA SESIÓN</span></button>
			      	<!--/div -->
			    </form>
	      	</ul>
	    </div>
	  </div>
	</nav>

	<div class="jumbotron text-center">
		<img src="lib/img/yo-medico-logo.jpg" class="img-circle" width="200">
    <h1>Yo, médico</h1> 
  	<p>Salud, Atención al paciente & Trabajo en equipo</p>
	</div>

	<!-- Container (About Section) -->
	<div id="home" class="container-fluid">
  		<div class="row">
    		<div class="col-sm-7">
      			<h2>¿Qué hacer en caso de una quemadura?</h2><br>
      			<h4>La gravedad de la mayoría de las quemaduras se relaciona con el tamaño y la profundidad de la lesión. Sin embargo, las quemaduras eléctricas son más difíciles de diagnosticar, ya que pueden ocasionar lesiones importantes debajo de la piel sin mostrar signos de daños en la superficie.</h4>

				<h4>Los síntomas varían desde una leve incomodidad hasta una emergencia con riesgo de muerte, según el tamaño y la profundidad (grado) de la quemadura.</h4>
				
				<h4>Las quemaduras por el sol y las pequeñas escaldaduras se pueden tratar en casa. Las quemaduras más profundas o generalizadas, y las eléctricas necesitan atención médica inmediata, a menudo en unidades especializadas en quemaduras.</h4>
				
				<p><span class="glyphicon glyphicon-list-alt"></span> Por lo general, se puede realizar un autodiagnóstico.</p>
      			<p><span class="glyphicon glyphicon-ban-circle"></span> No se requieren análisis de laboratorio o estudios de diagnóstico por imágenes.</p>
      			<p><span class="glyphicon glyphicon-time"></span> Agudas: se curan en cuestión de días o semanas.</p>
    		</div>
    		<div class="col-sm-5">
      			<img src="lib/img/quemadura.jpg" class="col-sm-12 slideanim">
    		</div>
  		</div>
	</div>

	<div class="container-fluid bg-grey">
  		<div class="row">
    		<div class="col-sm-5">
      			<img src="lib/img/convulsion.jpg" class="col-sm-12 slideanim"/>
    		</div>
    		<div class="col-sm-7">
      			<h2>¿Qué hacer en caso de una convulsión</h2><br>
      			<h4>Las convulsiones son síntomas de un problema cerebral. Ocurren por la aparición súbita de una actividad eléctrica anormal en el cerebro. Cuando las personas piensan en convulsiones, suelen imaginarse el cuerpo de una persona que se sacude rápida y sin control. No todas las convulsiones provocan estas sacudidas. Existen muchos tipos de convulsiones y algunos tienen síntomas leves. Las convulsiones se dividen en dos grupos principales. Las convulsiones focales, también llamadas convulsiones parciales, ocurren en una parte del cerebro. Las convulsiones generalizadas son el resultado de actividades anormales en ambos lados del cerebro.</h4>

      			<h4>La mayoría de las convulsiones duran de 30 segundos a dos minutos y no causan daños duraderos. Sin embargo, es una emergencia médica si las convulsiones duran más de cinco minutos o si una persona tiene muchas convulsiones y no se despierta entre éstas. Las convulsiones pueden tener muchas causas, entre las que se incluyen medicinas, fiebre alta, lesiones en la cabeza y ciertas enfermedades. Las personas que tienen convulsiones recurrentes debido a un trastorno cerebral tienen epilepsia.</h4>

      			<p><span class="glyphicon glyphicon-ban-circle"></span> No trate de sujetar a la persona o evitar que se mueva.</p>
      			<p><span class="glyphicon glyphicon-remove"></span> No se requieren análisis de laboratorio o estudios de diagnóstico por imágenes.</p>
      			<p><span class="glyphicon glyphicon-remove-sign"></span> No intente darle respiración boca a boca (como RCP).</p>
      			<p><span class="glyphicon glyphicon-remove-circle"></span> No le ofrezca agua ni alimentos a la persona hasta que no esté completamente alerta.</p>
    		</div>
  		</div>
	</div>

	<!-- Container (Portfolio Section) -->
	<div id="portfolio" class="container-fluid text-center">
  		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    	<!-- Indicators -->
    		<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#myCarousel" data-slide-to="1"></li>
      			<li data-target="#myCarousel" data-slide-to="2"></li>
    		</ol>

    		<!-- Wrapper for slides -->
    		<div class="carousel-inner" role="listbox">
      			<div class="item active">
        			<h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      			</div>
      			<div class="item">
        			<h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      			</div>
      			<div class="item">
        			<h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      			</div>
    		</div>

    		<!-- Left and right controls -->
    		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      			<span class="sr-only">Previous</span>
    		</a>
    		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      			<span class="sr-only">Next</span>
    		</a>
  		</div>
	</div>

  <div id="form-login" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('form-login').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="lib/img/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container-form">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" class="act"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container-form" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('form-login');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

	<footer class="container-fluid text-center panel-footer">
  		<a href="#myPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  		</a><br>
  		<a href="https://www.facebook.com/Salud-Atenci%C3%B3n-al-paciente-Trabajo-en-equipo-663834127160759/" class="fa fa-facebook"></a>
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