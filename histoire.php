<?php 
include 'bdd.php';
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Histoire</title>
  	<link rel="shortcut icon" href="img/favicon_FACE1.png">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
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
	    <div class='container' id="presentation-container">
	        <div class="row" >
	            <div class="col-md-10 col col-md-offset-1" id="padding50">
	                <h1 class="titre-h1" id="padding"><span id='presentation-span'><strong>H</strong></span>istoire</h1><hr>
	        <!-- <img src="">      image photoshop Histoire_____  -->
			        <div id="histoire-form" class="text-justify">
			            <img src="http://image1.lamontagne.fr/photoSRC/bqViVelNbWelbAxB8Jxva9EQXRYXZ9sUO12hxzey2v1IHn9_pFKP45lVKLcmcwIl0X_pNiFNNzDy6gLUfIerbuEVnPHl4-_/2138735.jpeg" width="450px"  id='presentation-photo'>
			            <p id='lettrine-p'><span id="lettrine">N</span>ous avons été créée en 1993 à l’initiative de 13 grands groupes français réunis par Martine Aubry, ex-directrice adjointe du groupe Pechiney, FACE est reconnue d’Utilité Publique en 1994 et Fondation abritante en 2013.</p>
			            <p>FACE est présidée depuis 2008 par Gérard Mestrallet, Président d’Engie.</p>
			            <p>Nos missions sont de favoriser la mise en action individuelle et collective de la responsabilité sociale/sociétale des entreprises (RSE) ; de mobiliser et coordonner les volontés et initiatives d’engagement social et sociétal des entreprises dans leur territoire ; de développer l’innovation sociale et sociétale avec et pour les entreprises ; d’affirmer la place et le discours des entreprises socialement responsables.</p>
			            <p>Organisée en Réseau, FACE rassemble plus de 5400 entreprises de toutes tailles* et travaille en collaboration avec l’ensemble des parties prenantes concernées par sa mission d’utilité publique (institutions, associations, personnalités qualifiées, chercheurs, etc).</p>
			            <p><i class="histoire-italique">*Grandes entreprises, ETI, PME, TPE / Chiffres septembre 2016</i></p>
			            <div id="valeur-histoire">
				            <h4><strong><span>N</span>os Valeurs</strong></h4>
				            <p><i>Nous œuvrons en faveur de l’engagement social et sociétal des entreprises pour lutter contre toutes les formes d’exclusion, de discriminations et de pauvreté, par une approche globale et innovante de la Responsabilité Sociale/Sociétale des Entreprises (RSE).</i></p>
				        </div>
			            <h4><strong>Comment nous définir ?</strong></h4>
			            <ul>
							<li>une Fondation Reconnue d’Utilité Publique</li>
							<li>un Think, do & share tank</li>
							<li>une Fondation abritante ayant 46 fondations sous égide</li>
							<li>l’incarnation d’un grand mouvement social d’entreprises</li>
							<li>le plus grand réseau d’entreprises dédié à la RSE en France</li>
							<li>un interlocuteur privilégié de la puissance publique sur les questions de responsabilité sociale etsociétale</li>
							<li>une interface entre les acteurs des territoires</li>
						</ul>
						<h4><strong>A travers le temps</strong></h4>
						
						<h3 class="date-histoire">1993</h3>
						<div class="row">
							<div class="col-md-2"><img src="img/histoire/martine_aubry.png"></div>
							<div class="col-md-10"><p>Martine Aubry réunit 13 chefs d’entreprises françaises et les convainc de financer la création d’une fondation pour agir contre l’exclusion : FACE. L’objectif est de mobiliser des entreprises sur les territoires afin de faciliter l’insertion par l’emploi, de favoriser l’innovation sociale et d’apporter un soutien actif à des initiatives locales de lutte contre les exclusions.</p></div>
						</div><hr>
						<h3 class="date-histoire">1994</h3>
						<div class="row">
							<div class="col-md-2"><img src="img/histoire/FACE_carre_NB.png"></div>
							<div class="col-md-10"><p>FACE se donne dès le départ pour objectifs de prévenir et lutter contre toutes les formes d’exclusion, de discrimination et de pauvreté : emploi, éducation, consommation, santé, logement, numérique, citoyenneté…Des actions de proximité sont menées au bénéfice des territoires et des habitants. Elle est Reconnue d’Utilité Publique le 20 février 1994.</p></div>
						</div><hr>
						<h3 class="date-histoire">1997</h3>
						<div class="row">
							<div class="col-md-2"><img src="img/histoire/guichard.png"></div>
							<div class="col-md-10"><p>Antoine Guichard, patron du Groupe Casino, prend la présidence de la Fondation à la suite de Martine Aubry.</p></div>
						</div><hr>
						<h3 class="date-histoire">2002</h3>
						<div class="row">
							<div class="col-md-2"><img src="img/histoire/manpower_NB.png"></div>
							<div class="col-md-10"><p>Manpower rejoint la Fondation, ce qui porte le nombre d’Entreprise </p></div>
						</div><hr>
						<h3 class="date-histoire">2008</h3>
						<div class="row">
							<div class="col-md-2"><img src="img/histoire/GM_rondNB.png"></div>
							<div class="col-md-10"><p>Gérard Mestrallet, PDG d’Engie (ex GDF SUEZ), devient Président de FACE. La même année, AG2R La Mondiale rejoint la Fondation, ce porte le nombre de Membres fondateurs à 15.</p></div>
						</div><hr>
						<h3 class="date-histoire">2010</h3>
						<div class="row">
							<div class="col-md-2"><img src="img/histoire/DAS.png"></div>
							<div class="col-md-10"><p>FACE redéfinit ses 5 axes d’intervention : Dans l’entreprise, Pour l’emploi, A l’école, Au quotidien et Avec les acteurs du territoires. Au sein de chacun de ces champs, projets nationaux et actions locales sont développées par FACE, avec la participation active des entreprises membres et de leurs salarié-e-s. Cette dynamique affirme la Fondation comme « un grand mouvement social des entreprises ».</p></div>
						</div><hr>
						<h3 class="date-histoire">2013</h3>
						<div class="row">
							<div class="col-md-2"><img src="img/histoire/journal-officiel.png"></div>
							<div class="col-md-10"><p>Cinquantième fondation abritante par décret paru au Journal Officiel le 21 décembre 2013, la Fondation offre une nouvelle alternative aux entreprises qui souhaitent accentuer leurs démarches sociales et sociétales sur des champs cohérents et compatibles avec l’objet de FACE : la lutte contre toutes formes d’exclusion, de discrimination ou de pauvreté.</p></div>
						</div><hr>
						<h3 class="date-histoire">2015</h3>
						<div class="row">
							<div class="col-md-2"><img src="img/histoire/face-gris.jpg"></div>
							<div class="col-md-10"><p>FACE change d’identité visuelle et affirme son positionnement : « Les entreprises contre l’exclusion ». La redéfinition de ses champs d’action lui permet d’exposer clairement son approche globale et innovante de la RSE : Emploi, Entreprise, Education, Consommation et Territoires. FACE agit avec, par mais aussi pour l’entreprise.</p></div>
						</div>
			        </div>
			    </div>
		    </div>
	    </div>
	</main>
	 
	<?php include ('footer.html'); ?>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/histoire.js"></script>
	<script src="js/index.js"></script>
	</body>
</html>