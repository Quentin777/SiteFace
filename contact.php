<?php 
include 'bdd.php';
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
  	<link rel="shortcut icon" href="img/favicon_FACE1.png">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="css/style.css">
</head>
<body>
  	<header class="bluebandeauseparateur">
 		<a href='#' id='nav_show' title='Show The Navigation'>Menu</a>
 		<button id="don">Faire un don</button>
   		<div id="logo"><img src="img/logo-face.png" width="160"/></div>
	</header>
  
	<?php 
		include ('nav_pc.html'); 
		include ('nav_mobile.php');
	?>
  

	<main>
	    <div class='container' id='presentation-container'>
	        <div class="row">
	            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10" id="padding50">
	                <h1 class="titre-h1" id="padding"><span id='presentation-span'><strong>C</strong></span>ontact</h1>
	     <!-- <img src="">      image photoshop Contact_____  -->
	     		</div>
	            <div class="row">
	                <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-3 col-lg-offset-1 col-lg-3">
		                	<p><strong>Fondation Agir Contre l’Exclusion</strong></p>
							<p>1 Rue Berthelot,<br>
							03000 Moulins – FRANCE</p><br>
							<p>
							<strong>Tél. :</strong> 06 89 32 71 09<br>
							<strong>Tél. :</strong> 01 49 22 68 68<br>
							<strong>Mail :</strong> ******@****.fr<br>
							</p>
					</div>
					<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-7 col-lg-offset-1 col-lg-7">
	        			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1371.5759688949984!2d3.3337118582589036!3d46.5644606389039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f11c475152f6bb%3A0xcd7654f7ac35d782!2s1+Rue+Berthelot%2C+03000+Moulins!5e0!3m2!1sfr!2sfr!4v1487699564826" id='map_contact' width="550" height="450" frameborder="0" style="border:0;box-shadow:2px 2px  4px black;" allowfullscreen></iframe>
	        		</div>
	            </div> 
	        </div>
	        <div class="row">
	        	<form class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">
	        		<legend><strong>Formulaire de contact</strong></legend>
	        		<div class="form-inline">
					    <div class="form-group">
					      	<label for="texte">Nom </label>
					      	<input id="text" type="text" class="form-control" style="background-color: #f0f0f0">
					    </div>
					    <div class="form-group col-md-offset-1 col-lg-offset-1">
					      	<label for="texte">Prenom </label>
					      	<input id="text" type="text" class="form-control" style="background-color: #f0f0f0">
					    </div>
					<br><br>
					</div>
				    <div class="form-group">
				      	<label for="texte">Email </label>
				      	<input id="text" type="text" class="form-control" style="background-color: #f0f0f0">
				    </div>
				    <div class="form-group">
				      	<label for="texte">Sujet </label>
				      	<input id="text" type="text" class="form-control" style="background-color: #f0f0f0">
				    </div>
				    <div class="form-group">
				      	<label for="textarea">Message </label>
				      	<textarea id="textarea" type="textarea" class="form-control" style="background-color: #f0f0f0"></textarea>
				    </div>
				    <p><i>Pièce jointe (facultatif)</i></p>
				    <input type="file" name=""><br>
				    <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Envoyer</button>
	        	</form>
	        	
	        </div>
	    </div>
	</main>
	 
	<?php include ('footer.html'); ?>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/index.js"></script>
</body>
</html>