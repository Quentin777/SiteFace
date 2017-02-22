<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>FACE Bourbonnais</title>
  <link rel="shortcut icon" href="img/favicon_FACE1.png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Oleo+Script" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">

  
	  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <header>
   <a href='#' id='nav_show' title='Show The Navigation'>Menu</a>
   <div id="logo"><img src="img/logo-face.png" width="160"/></div>
</header>

<?php 
include ('nav_pc.html'); 
include ('nav_mobile.html');
?>

<main>
 <div class="row">
	  <div class="container">             <!--    ZONE PRINCIPAL DU SITE entre nav & footer -->
		<div class="row">
		<div class="col-md-12">
			<h1 id="laFabrik"><span id="laFabrik_vert">L</span>a Fabrik</h1>
		</div>
		 	<div class=" col-xs-12 col-md-9 " id="laFabrik_fond">
		 		<div class="row"  >
		 			<div >
		 				<img class="img-circle" id="photo_Face" src="img/trombinoscope/william.jpg" alt="">
		 			</div>
		 			<div>
		 				<img class="img-circle" id="photo_Face" src="img/trombinoscope/andrea.jpg" alt="">
		 			</div>
		 			<div>
		 				<img class="img-circle" id="photo_Face" src="img/trombinoscope/mickael.png" alt="">
		 			</div>
		 			<div>
		 				<img class="img-circle" id="photo_Face" src="img/trombinoscope/eddy.jpg" alt="">
		 			</div>
		 			<div>
		 				<img class="img-circle" id="photo_Face" src="img/trombinoscope/aymeric.jpg" alt="">
		 			</div>
		 			<div>
		 				<img class="img-circle" id="photo_Face" src="img/trombinoscope/anthony.jpg" alt="">
		 			</div>
		 			<div>
		 				<img class="img-circle" id="photo_Face" src="img/trombinoscope/kevin.jpg" alt="">
		 			</div>
		 			<div>
		 				<img class="img-circle" id="photo_Face" src="img/trombinoscope/aude.jpg" alt="">
					</div>
					<div>
		 				<img class="img-circle" id="photo_Face" src="img/trombinoscope/yves.jpg" alt="">

		 			</div>
		 			<div>
		 				<img class="img-circle" id="photo_Face" src="img/trombinoscope/anthony.jpg" alt="">
		 			</div>
		 			<div>
		 				<img class="img-circle" id="photo_Face" src="img/trombinoscope/kevin.jpg" alt="">
		 			</div>
		 			<div>
		 				<img class="img-circle" id="photo_Face" src="img/trombinoscope/aude.jpg" alt="">
					</div>
		 		</div>
		 		<div class="row" >
		 			<div class="col-md-12"  id="LaFabrik_presentation">
		 				<p>La Fabrik est une initiative créée en 2016 par l’association FACE Bourbonnais. Elle consiste en la formation de 23 apprenants à la formation web, aux profils hétéroclites, issus de différents horizons, milieu sociaux, et âges, dans le cœur du foyer périurbain moulinois.
						Il s’agit avant tout d’une préparation à l’entrée dans le monde du travail. En effet, cette formation n’est pas certifiée par un diplôme, mais permet de nous introduire dans l’univers de la programmation web.</p>
		 			</div>

		 			<div class="col-md-8 col-md-offset-2">
		 				<iframe  id="map" frameborder="0"
						src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJN3xTTlsc8UcRsc5rZyHEarI&key=AIzaSyC7I7k51yMw41Zz1V8UO8ML-nYJPn99oPk" allowfullscreen></iframe>
		 			</div>
		 		</div>
		 	</div>
		 	<iframe class="col-xs-0 col-sm-0 col-md-3 col-lg-3 facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=270&height=600&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="320px" height="500" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

			<a href="https://fr-fr.facebook.com/faceterritoirebourbonnais/" title="Facebook" class="btn btn-facebook btn-lg col-xs-12 col-sm-12 col-md-0 col-lg-0" id="face_button"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
			<a href="https://fr.linkedin.com/in/face-bourbonnais-845073131" title="Linkedin" class="btn btn-linkedin btn-lg col-xs-12 col-sm-12 col-md-0 col-lg-0" id="face_button"><i class="linkedin"></i> Linkedin</a>
		</div>  
	</div>
	

</div>	
			<!--  PLUGIN FACEBOOK -->
	

</main>

<?php include ('footer.html'); ?>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

	<script src="js/index.js"></script>

</body>
</html>
