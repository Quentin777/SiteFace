<?php 
include 'bdd.php';
	if(session_status() == PHP_SESSION_NONE){
		session_start();
	}
	if(isset($_POST["article"])){
		header ('location: push_article.php');	
		exit();
	}
?>

<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>FACE Bourbonnais</title>
	<link rel="shortcut icon" href="img/favicon_FACE1.png">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	
			<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<header>
	 <a href='#' id='nav_show' title='Show The Navigation'>Menu</a>
	 <button id="don">Faire un don</button>
	 <div id="logo"><img src="img/logo-face.png" width="160"/></div>
</header>

<?php 
include ('nav_pc.html'); 
include ('nav_mobile.php');
?>

<main>
<div>
	<div class="row-fluid">
		<blockquote>
			<h3 class="text-center"> FACE est une association qui lutte contre toutes formes d'exclusion .</h3>
			<p><em>« Sans se substituer à la puissance publique, ni aux associations, la capacité des entreprises à accompagner l’accès à l’emploi, à la formation, aux biens et services essentiels, aux droits…   constitue un formidable levier d’insertion, d’inclusion et d’intégration. »</em></p>
			<div class="text-right"> Gérard Mestrallet, Président de la Fondation FACE </div> 
		</blockquote>
	</div>
</div>

	<div class="container">             <!--    ZONE PRINCIPAL DU SITE entre nav & footer -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="font-size: 30px;"><img class="actu" src="img/actu.png" width="350" style="margin-bottom: 10px;" /></div> 
			<?php if(isset($_SESSION["auth"])) :?>
				<form action="" method="post" id="form_article">
					<button type="submit" name="article" id='bouton_ajout' >Ajouter un article</button>
				</form>
			<?php endif ?>
<!-- /// IMAGE "ACTUALITE" /// -->
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" "><!-- zone actu -->
					<div class="row">
					 
						<?php 
		
			
			
			$articles = $bdd->query('SELECT * FROM article'); 
			foreach ($articles as $value) {
					echo '<a href="article.php?numero='.$value[0].'"><div class="article col-xs-12 col-sm-6 col-md-6 col-lg-6">'; 
					echo '<img src="upload/' . $value[0] . $value[2] . '" class="photo_article" />';
					echo '<h3 class="text_article"> <a href="article.php?numero='.$value[0].'" class="liens_article">' . $value[1] . '</a></h3></div>';
			}
		 ?>
					</div>
				</div>  
										<!--  PLUGIN FACEBOOK -->
				 <iframe class="col-xs-0 col-sm-0 col-md-3 col-lg-3 facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Ffacebook.com%2Ffaceterritoirebourbonnais%2F&tabs=timeline&width=260&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="500" style="border:none;overflow:hidden" frameborder="0" allowTransparency="true"></iframe>

				 <a href="https://fr-fr.facebook.com/faceterritoirebourbonnais/" title="Facebook" class="btn btn-facebook btn-lg col-xs-12 col-sm-12 col-md-0 col-lg-0" id="face_button"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
				 <a href="https://fr.linkedin.com/in/face-bourbonnais-845073131" title="Linkedin" class="btn btn-linkedin btn-lg col-xs-12 col-sm-12 col-md-0 col-lg-0" id="face_button"><i class="linkedin"></i> Linkedin</a>

		</div>
	</div>

</main>

<?php include ('footer.html'); ?>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/index.js"></script>

</body>
</html>