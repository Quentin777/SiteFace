<?php 
$robert = 3;
if(isset($_POST['titre'],$_POST['message'])){
	$robert = 1;
}
if(isset($_POST['pseudo'],$_POST['password'])){
	if($_POST['pseudo'] == 'eric' AND $_POST['password'] == 'password'){
	$robert = 2;
}
}

?>
<?php

if(isset($_POST['add_article'])){
	$robert = 1;
}else if(isset($_POST['add_partenaire'])){
	$robert = 4;
}

if($robert == 3){
include ('formulaire_admin.php');
}


else if($robert == 2){
	include ('choix.php');
}

?>




<?php 
	if($robert == 1){
		if(isset($_POST['titre'],$_POST['message'])){
		$articles = fopen('articles.txt', 'a+');
		$compteur = fopen('compteur.txt', 'r+');
		(int) $chiffre = (int) fgets($compteur);
		$chiffre = $chiffre +1;
		$nom = $_FILES['image']['name'];
		fputs($articles, $_POST['titre'] . "," . $_POST['message'] . "," . $nom . ",\n");
		fseek($compteur, 0);
		fputs($compteur, $chiffre);
		fclose($compteur);
		fclose($articles);
		$dossier = 'upload/';
     $fichier = $chiffre . $_FILES['image']['name'];
     if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
     
	}
	include('push_article.php');
	}else if($robert == 4){
		include('push_partenaire.php');
	}
?>
