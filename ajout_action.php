<?php 
include 'bdd.php';
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }
  if(isset($_POST["action"])){
    header ('location: actions.php');  
    exit();
  }
  if(isset($_POST['titre'],$_POST['contenu'],$_POST['url'])){
		
		$action = $bdd->query('SELECT * FROM action');
		$ajout_action = $bdd->prepare('INSERT INTO action(titre,url,contenu) VALUES (:titre,:url,:contenu)');
		$ajout_action->execute(array('titre' => $_POST['titre'], 'url' => $_POST['url'], 'contenu' => $_POST['contenu']));
		echo 'Nouvelle action ajoutée';
		include ('ajout_action.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
  <title>FACE Bourbonnais</title>
  <link rel="shortcut icon" href="img/favicon_FACE1.png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Oleo+Script" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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



<div class="container">             <!--    ZONE PRINCIPAL DU SITE entre nav & footer -->
    <div class="row">
    		<img src="img/admin.png" class="col-xs-12 col-sm-12 col-md-8 col-lg-8" height="50" id="img-admin">
			<form class="col-xs-12 col-sm-12 col-md-12 col-lg-12" action="admin.php" method="post" enctype="multipart/form-data" id="form">
				<div class="container">           
    			<div class="row">
					 <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" id="div-formulaire"><input id="titre-article" type="text" name="titre" placeholder="Titre de l'action"></div>
					 <div class="col-xs-0 col-sm-0 col-md-10 col-lg-10"></div>
					  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-5" id="div-formulaire"><label id="text-img">Collez le lien de la video youtube ou facebook</label><input id="action-url" type="text" name="url" placeholder="http: ..."></div>
					  <div class="col-xs-0 col-sm-0 col-md-9 col-lg-9"></div>
					  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="div-formulaire"><textarea id="contenu-article" type="textfield" name="contenu" placeholder="Contenu de l'action"></textarea></div>
					  <div class="col-xs-0 col-sm-0 col-md-6 col-lg-6"></div>
					  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" id="div-formulaire"><input id="button-submit" type="submit" name="envoi_action" value="ENVOYER"></div>
					    
					</div>
				</div>
			</form>
	</div>
</div>	


<?php include ('footer.html'); ?>
</body>
</html>