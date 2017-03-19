<?php
include 'bdd.php';
	if(session_status() == PHP_SESSION_NONE){
		session_start();
	}
	if(!isset($_SESSION["auth"])){
		header ('location: index.php');	
		exit();
	}else{
		if(isset($_POST['titre'],$_POST['message'],$_POST['url']) AND $_POST['titre'] != "" AND $_POST['message'] != "" AND $_POST['url'] != ""){
     		
			$partenaire = $bdd->query('SELECT * FROM partenaire');
			$id = 1;
			foreach ($partenaire as $value) {
				$id = $id +1;
			}
			$nom = $_FILES['image']['name'];
			$retourLigne = str_replace(CHR(13).CHR(10),"</br>",$_POST['message']);
			$ajout_partenaire = $bdd->prepare('INSERT INTO partenaire(choix_partenaire,titre,url,image,message) VALUES(:choix_partenaire,:titre,:url,:image,:message) ');
			$ajout_partenaire->execute(array('choix_partenaire' => $_POST['choix_partenaire'], 'titre' => $_POST['titre'], 'url' => $_POST['url'],'image' => $nom, 'message' => $retourLigne));
			$dossier = 'uploadPartenaire/';
     		$fichier = $id . $_FILES['image']['name'];
     		if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)){
				header ('location: partenariat.php');	
				exit();
			}else{
				echo 'Echec de l\'upload !';
     		}
		}
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



<div class="container">             <!--    ZONE PRINCIPAL DU SITE entre nav & footer -->
    <div class="row">
    		<img src="img/admin.png" class="col-xs-12 col-sm-12 col-md-8 col-lg-8" height="50" id="img-admin">
			<form class="col-xs-12 col-sm-12 col-md-12 col-lg-12" action="" method="post" enctype="multipart/form-data" id="form">
				<div class="container">           
    				<div class="row">

 						<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1" id="div-formulaire"><label>Entreprise</label><input id="titre-article" type="radio" name="choix_partenaire" value="Entreprise"></div>
 						<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1" id="div-formulaire"><label>Association</label><input id="titre-article" type="radio" name="choix_partenaire" value="Associatif"></div>
 						<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1" id="div-formulaire"><label>Institution</label><input id="titre-article" type="radio" name="choix_partenaire" value="Institutionnel"></div>
					    <div class="col-xs-0 col-sm-0 col-md-9 col-lg-9"></div>

					    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" id="div-formulaire"><input id="titre-article" type="text" name="titre" placeholder="Nom du partenaire"></div>
					    <div class="col-xs-0 col-sm-0 col-md-10 col-lg-10"></div>
					    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" id="div-formulaire"><input id="titre-article" type="text" name="url" placeholder="Site du partenaire"></div>
					    <div class="col-xs-0 col-sm-0 col-md-10 col-lg-10"></div>
					    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="div-formulaire"><label id="text-img">Selectionnez le logo du partenaire </label><input id="submit-img" type="file" name="image"></div>
					    <div class="col-xs-0 col-sm-0 col-md-9 col-lg-9"></div>
					    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="div-formulaire"><textarea id="contenu-article" type="textfield" name="message" placeholder="Description du partenaire"></textarea></div>
					    <div class="col-xs-0 col-sm-0 col-md-6 col-lg-6"></div>
					    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" id="div-formulaire"><input id="button-submit" type="submit" name="envoi_partenaire" value="ENVOYER"></div>
					    
					</div>
				</div>
			</form>
	</div>
</div>	


<?php include ('footer.html'); ?>
</body>
</html>