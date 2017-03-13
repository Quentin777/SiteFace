<?php 
session_start();

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
}else if(isset($_POST['envoi_partenaire'])){
	$robert = 5;
}else if (isset($_POST['add_action'])){
	$robert = 6;
}else if (isset($_POST['envoi_action'])){
	$robert = 7;
}

if($robert == 3){
include ('formulaire_admin.php');
}


else if($robert == 2){
	include ('choix.php');
}

else if($robert == 6){
	include ('ajout_action.php');
}
?>



<?php 
	// if($robert == 1){
	// 	if(isset($_POST['titre'],$_POST['message'])){
	// 	$articles = fopen('articles.txt', 'a+');
	// 	$compteur = fopen('compteur.txt', 'r+');
	// 	(int) $chiffre = (int) fgets($compteur);
	// 	$chiffre = $chiffre +1;
	// 	$nom = $_FILES['image']['name'];
	// 	$retourLigne = str_replace(CHR(13).CHR(10),"</br>",$_POST['message']);
	// 	fputs($articles, $_POST['titre'] . "%ICILALIMITE%" . $retourLigne . "%ICILALIMITE%" . $nom . "%ICILALIMITE%" . $chiffre . "%ICILALIMITE%\n");
	// 	fseek($compteur, 0);
	// 	fputs($compteur, $chiffre);
	// 	fclose($compteur);
	// 	fclose($articles);
	// 	$dossier = 'upload/';
 //     $fichier = $chiffre . $_FILES['image']['name'];
 //     if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
 //     {
 //          echo 'Upload effectué avec succès !';
 //     }
 //     else //Sinon (la fonction renvoie FALSE).
 //     {
 //          echo 'Echec de l\'upload !';
 //     }
     
	// }
	// include('push_article.php');
	// }else if($robert == 4){
	// 	include('push_partenaire.php');
	// }


		if($robert == 1){
		if(isset($_POST['titre'],$_POST['message']) AND $_POST['titre'] != "" AND $_POST['message'] != ""){
      $bdd = new PDO('mysql:host=localhost;dbname=c28ccb71c3', 'c28ccb71c3', 'd017e724c2');
			$article = $bdd->query('SELECT * FROM article');
			$id = 1;
			foreach ($article as $value) {
				$id = $id +1;
			}
			$nom = $_FILES['image']['name'];
			$retourLigne = str_replace(CHR(13).CHR(10),"</br>",$_POST['message']);
			$ajout_article = $bdd->prepare('INSERT INTO article(titre,image,message) VALUES(:titre,:image,:message) ');
			$ajout_article->execute(array('titre' => $_POST['titre'],'image' => $nom, 'message' => $retourLigne));
			$dossier = 'upload/';
     	$fichier = $id . $_FILES['image']['name'];
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

	// if($robert == 5){
	// 	if(isset($_POST['titre'],$_POST['message'],$_POST['url']) AND $_POST['titre'] != "" AND $_POST['message'] != "" AND $_POST['url'] != ""){
	// 		$articles = fopen('partenaires.txt', 'a+');
	// 		$compteur = fopen('compteurPartenaire.txt', 'r+');
	// 		(int) $chiffre = (int) fgets($compteur);
	// 		$chiffre = $chiffre +1;
	// 		$nom = $_FILES['image']['name'];
	// 		$retourLigne = str_replace(CHR(13).CHR(10),"</br>",$_POST['message']);
	// 		fputs($articles, $_POST['titre'] . "%ICILALIMITE%" . $retourLigne . "%ICILALIMITE%" . $nom . "%ICILALIMITE%" . $_POST['url'] . "%ICILALIMITE%" . $chiffre . "%ICILALIMITE%".$_POST['choix_partenaire']."%ICILALIMITE%\n");
	// 		fseek($compteur, 0);
	// 		fputs($compteur, $chiffre);
	// 		fclose($compteur);
	// 		fclose($articles);
	// 		$dossier = 'uploadPartenaire/';
 //     	$fichier = $chiffre . $_FILES['image']['name'];
 //     	if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
 //     	{
 //      	    echo 'Upload effectué avec succès !';
 //   		  }
 //     	else //Sinon (la fonction renvoie FALSE).
 //     	{
 //          echo 'Echec de l\'upload !';
 //     	}
	// 	}
	// }

		if($robert == 5){
		if(isset($_POST['titre'],$_POST['message'],$_POST['url']) AND $_POST['titre'] != "" AND $_POST['message'] != "" AND $_POST['url'] != ""){
      $bdd = new PDO('mysql:host=localhost;dbname=c28ccb71c3', 'c28ccb71c3', 'd017e724c2');
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
     	if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     	{
      	    echo 'Upload effectué avec succès !';
   		  }
     	else //Sinon (la fonction renvoie FALSE).
     	{
          echo 'Echec de l\'upload !';
     	}
		}
	}


		if($robert == 7){
			if(isset($_POST['titre'],$_POST['contenu'],$_POST['url'])){
			$bdd = new PDO('mysql:host=localhost;dbname=c28ccb71c3', 'c28ccb71c3', 'd017e724c2');
			$action = $bdd->query('SELECT * FROM action');
			$ajout_action = $bdd->prepare('INSERT INTO action(titre,url,contenu) VALUES (:titre,:url,:contenu)');
			$ajout_action->execute(array('titre' => $_POST['titre'], 'url' => $_POST['url'], 'contenu' => $_POST['contenu']));
			echo 'Nouvelle action ajoutée';
			include ('ajout_action.php');
			}
		}

		if($robert == 8){
			if(isset($_POST['retour'],$_POST['contenu'],$_POST['url'])){
			return ('index.php');
			}
		}
?>
