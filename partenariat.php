<?php 
include 'bdd.php';
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }
  if(isset($_POST["partenaire"])){
    header ('location: push_partenaire.php');  
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
include ('nav_mobile.html');
?>
<main>

  <div class='container'>
    <div class="row">
      <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
      <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10" id="politique_partenariat">
        <h1 class="h1page"><span id="green">L</span>a politique partenariale de FACE</h1>
        <?php if(isset($_SESSION["auth"])) :?>
          <form action="" method="post" id="form_article">
            <button type="submit" name="partenaire" id='bouton_ajout'>Ajouter un partenaire</button>
          </form>
       <?php endif ?>
            <br>
        <p> La Fondation FACE s’est engagée dès sa création dans un dialogue nourri et une démarche de co construction systématique avec l’ensemble des parties prenantes : c’est cet « ADN » qui préside depuis 1994 à la création des Clubs FACE et de ses autres structures de médiation et d’insertion, toujours nés d’une volonté commune des entreprises, des collectivités, et de l’ensemble des acteurs territoriaux.
        Cette volonté de maillage avec nos partenaires institutionnels, entreprises ou associations, est la clé de la conception et de la réalisation de nos projets, tant les politiques de lutte contre l’exclusion, les discriminations et la pauvreté nécessitent -au-delà d’une association systématique des bénéficiaires (salariés, habitants, jeunes en contrats d’alternance, services civiques…etc…)- l’implication de tous les acteurs.</p>
      </div>
      <div class="col-xs-0 col-sm-0 col-md-2 col-lg-2"></div>
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <a href="#text_association" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="association"></a>          <!--   // partenaire association fenetre // -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="text_association">
          <div class="container">
          <div class="row">

          <?php
      
            $articles = $bdd->query('SELECT * FROM partenaire');
            foreach ($articles as $key => $value) {
              if($value[1] == "Associatif"){
                echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">';
                echo '<a href="'.$value[3].'" id="href_partenaire">'; 
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="uploadPartenaire/'.$value[0].$value[4].'" width="120"></div>';
                echo '<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">'; 
                echo '<h1>'.$value[2].'</h1>';
                echo '<p>'.$value[5].'</p></div></div></a>';
              }
            }

      ?>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // ADMICAL // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/admical.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>L'ADMICAL</h1>
              <p>Partenariat axé sur la formation des entreprises FACE aux projets de mécénat.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // AFMD // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/afmd.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>L'AFMD</h1>
              <p>L’AFMD est le partenaire de FACE sur l’accompagnement d’organismes (ministères, entreprises…) au Label Diversité : « les Ateliers Label FACE/AFMD ».</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // l'APELS // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/APELS.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>L'APELS</h1>
              <p>Le partenariat FACE-APELS a pour objectif de faire reconnaître la pratique sportive comme un véritable outil éducatif, de favoriser le soutien aux personnes en difficulté et d’encourager la mixité.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // L’Association des Paralysés de France // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/apf.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>L’Association des Paralysés de France</h1>
              <p>L’APF (Association des Paralysés de France) est partenaire de FACE sur des actions entreprise ; formation et sensibilisation des entreprises FACE autour du thème « Handicap et Travail » création d’évènements, expérimentation, innovation…</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // La Charte de la diversité // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/diversite.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>La Charte de la diversité</h1>
              <p>FACE Accompagne les entreprises signataires de la Charte.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">               <!-- // Le Centre des Jeunes Dirigeants d’Entreprise // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/CJD.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>Le Centre des Jeunes Dirigeants d’Entreprise</h1>
              <p>FACE et le CJD (Centre des Jeunes Dirigeants d’Entreprise) s’engagent à promouvoir des actions visant à valoriser une Responsabilité Sociale et Sociétale des Entreprises membres des deux structures.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // Finances et Pédagogie // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/fp.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>Finances et Pédagogie</h1>
              <p>Collaboration notamment dans les Points Services aux Particuliers sur des sujets de maîtrise de budget…</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // l'hippocampe // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/hippo.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>L'Hyppocampe</h1>
              <p>Partenaire de FACE dans le cadre du festival Regards Croisés, premier festival de courts-métrages réalisés par des travailleurs en situation de handicap.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // L’Agence d’Outre-mer pour la Mobilité // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/ladom.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>L’Agence d’Outre-mer pour la Mobilité</h1>
              <p>Dans le cadre du partenariat établi avec L’Agence D’Outre-mer pour la Mobilité (LADOM), FACE Chambéry a accueilli 5 jeunes martiniquais-e-s en Savoie. Le Club leur a assuré une formation afin de préparer leur intégration en entreprise.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // CNAM // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/cnam.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>Le CNAM</h1>
              <p>FACE et le CNAM (Conservatoire National des Arts et Métiers) travaillent en collaboration sur un projet de formation d’ « encadrant de médiation sociale », en lien avec les acteurs de la médiation sociale en France (FACE, France médiation, pimms, femmes relais, correspondant de nuit).</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // Nos Quartiers ont des Talents // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/nqt.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>Nos Quartiers ont des Talents</h1>
              <p>Partenariat sur des actions communes tel le parrainage.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // L’UNADEV // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/unadev.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>L’UNADEV</h1>
              <p>Partenariat autour des problématiques liées à l’emploi des personnes en situation de handicap. Charte COLIN MAILLARD.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // L’Usgeres // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/usgeres.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>L’Usgeres</h1>
              <p>FACE et l’USGERES entendent au travers leur partenariat accompagner, renforcer et encourager de nouvelles bonnes pratiques RH en prenant en compte l’égalité de traitement, et de travailler à la diffusion d’une « culture des diversités » au sein des entreprises de l’économie sociale.</p>
              </div>
              </div>

          </div>
          </div>
          </div>

        <a href="#text_entreprise" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="entreprise"></a>           <!--   // partenaire entreprise fenetre // -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="text_entreprise">
          <div class="container">
          <div class="row">

            
            <?php
      ;
            $articles = $bdd->query('SELECT * FROM partenaire');
            foreach ($articles as $key => $value) {
              if($value[1] == "Entreprise"){
                echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">';
                echo '<a href="'.$value[3].'" id="href_partenaire">'; 
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="uploadPartenaire/'.$value[0].$value[4].'" width="120"></div>';
                echo '<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">'; 
                echo '<h1>'.$value[2].'</h1>';
                echo '<p>'.$value[5].'</p></div></div></a>';
              }
            }

      ?>


              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // ENGIE // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/engie.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>ENGIE</h1>
              <p>Membre fondateur, partenaire sur de nombreuses actions, notamment dans le champ « emploi » et « Quotidien ». Le PDG de ENGIE, Gérard Mestrallet, est Président de FACE.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // AG2R La Mondiale // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/AG2R.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>AG2R La Mondiale</h1>
              <p>Membre fondateur, partenaire sur des actions à destination des seniors et éducation budgétaire.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // RATP // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/RATP.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>La RATP</h1>
              <p>Membre fondateur. Le PDG de la RATP, Pierre Mongin, est vice-président de FACE.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // bouygue // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/bouygue.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>Bouygue Construction</h1>
              <p>FACE et ses Clubs forment et accompagnent l’entreprise dans la gestion des clauses sociales.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // CETELEM // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/cetelem.png" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>LaFondation Cetelem</h1>
              <p>Partenaire historique de FACE, la Fondation Cetelem a orienté ses actions sur la prévention de l’exclusion bancaire en mettant en place un programme d’éducation budgétaire. FACE a été choisi comme partenaire national pour déployer cet outil sur les territoires au bénéfice des publics vulnérables. Plus de 2250 personnes ont été impactées en 2012.
              </p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // DELL // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/dell.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>DELL</h1>
              <p>DELL s’est engagé aux côtés de FACE sur des projets « École ». Dans le cadre du projet Dell youthconnect, les Clubs FACE Hérault et Seine-Saint-Denis ont créé l’action « Tremplin 3ème, pour une orientation choisie ».</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // Randstad // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/randstad.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>Institut Randstad</h1>
              <p>Partenaire sur l’action « Un But pour l’Emploi », le Festival Regards Croisés et pour l’accompagnement des seniors.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // La poste // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/poste.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>La Poste</h1>
              <p>Partenariat avec l’Enseigne du groupe La Poste pour accompagner les clientèles vulnérables au sein des bureaux de poste, situés en Zones Urbaines Sensibles, depuis 2011.</p>
              </div>
              </div>

          </div>
          </div>
          </div>

        <a href="#text_institution" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="institution"></a>             <!--   // partenaire institutionnel fenetre // -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="text_institution"> 
          <div class="container">
          <div class="row">

          
            <?php
      
            $articles = $bdd->query('SELECT * FROM partenaire');
            foreach ($articles as $key => $value) {
              if($value[1] == "Institutionnel"){
                echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">';
                echo '<a href="'.$value[3].'" id="href_partenaire">'; 
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="uploadPartenaire/'.$value[0].$value[4].'" width="120"></div>';
                echo '<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">'; 
                echo '<h1>'.$value[2].'</h1>';
                echo '<p>'.$value[5].'</p></div></div></a>';
              }
            }

      ?>
            
  
          
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div" style="margin-top: 20px;">                     <!-- // comission europeene // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <img src="img/partenaire/comission.gif" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>La Commission Européenne</h1>
              <p>La Commission Européenne finance la fondation via le FSE et le programme Leonardo, pour des projets tels le « Certificat Européen de Compétences Foot & Entreprises » ou plus récemment « serendipité », projet d’innovation sociale pour favoriser l’égalité professionnelle femme-homme.</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div">                      <!--  // RSE // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="img/partenaire/RSE.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>La Plateforme Nationale RSE</h1>
              <p>
              Créée  en juin 2013 par le Premier ministre sur sollicitation des parties prenantes, la Plateforme nationale RSE est une instance permanente de concertation de France Stratégie, cadre permanent de dialogue sur la responsabilité sociétale des entreprises (RSE). FACE est un membre titulaire de cette Plateforme où elle s’implique notamment sur les questions de RSE et de compétitivité en particulier pour les TPE-PME-ETI, d’initiatives et expérimentations territoriales et sectorielles, d’engagements et de pratiques d’entreprises responsables, d’innovation sociale et sociétale…</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div">                            <!--  // Service civique // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="img/partenaire/service_civique.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>L’Agence du Service Civique</h1>
              <p>FACE a été agréée le 4 juillet 2011 par l’Agence du Service Civique. La Fondation peut accueillir des jeunes volontaires sur une mission de solidarité pour « accompagner les habitants dans leurs problématiques quotidiennes, notamment en luttant contre la précarité énergétique ».</p>
              </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div">                      <!--    // l'anru // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="img/partenaire/ANRU.gif" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>L'ANRU</h1>
              <p>« S’engager pour les quartiers » est un projet initié par FACE et l’ANRU qui récompense des projets développés dans les quartiers prioritaires de la ville.</p>
              </div>
              
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div">                        <!--  // Alliance ville emploi // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="img/partenaire/AVE.jpg" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>L’Alliance Villes Emploi</h1>
              <p>Plusieurs champs de coopération structurent le partenariat entre FACE et Alliance Villes Emploi; valorisation des politiques territoriales de l’emploi, travaux de recherche, échanges de bonnes pratiques…</p>
              </div>
              
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div">                        <!--    // CGET //  -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="img/partenaire/CGET.png" width="150" ></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>Le CGET</h1>
              <p>Partenaire au plan national du concours « S’engager pour les quartiers »</p>
              </div>
              
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div">                                   <!--     // DAIC // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="img/partenaire/DAIC.gif"  height="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>La DAIC</h1>
              <p>Partenariat axé sur l’accompagnement à l’emploi et à l’intégration professionnelle, notamment pour les migrants primo-arrivants.</p>
              </div>
              
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div">                                      <!-- // Defenseur des droits // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="img/partenaire/defense_droit.gif" width="150" ></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>Le Defenseur des Droits</h1>
              <p>Collaboration entre la Halde puis le Défenseur des Droits et la Fondation FACE (questions de prévention de l’homophobie à FACE Hérault, collaboration aux publications FACE…)</p>
              </div>
              
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div">                    <!--  // fond europeen d'integration // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="img/partenaire/FEI.gif" width="150" ></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>Le Fonds européen d’intégration</h1>
              <p>En lien avec la DAAEN, le Fonds européen d’intégration (FEI) finance pour 2013-2014 l’accompagnement à l’emploi de personnes primo-arrivantes, l’aide en termes d’accès aux droits et à l’information ainsi que l’expérimentation d’un accompagnement global (retour à l’emploi et suivi social).</p>
              </div>
              
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div">                        <!--  // Ministère des affaires sociales et de la santé // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="img/partenaire/ministere_social.png" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>Ministère des affaires sociales et de la santé</h1>
              <p>Membre de droit du Conseil d’Administration (représenté par son Ministère délégué chargé des Personnes handicapées et de la Lutte contre l’exclusion)</p>
              </div>
              
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div">                         <!-- // Le SGCIV // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="img/partenaire/SGCIV.gif" width="150" ></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>Le SGCIV</h1>
              <p>Dans le cadre de la Convention de partenariat entre FACE et le Ministère de la Ville, le SGCIV soutient l’engagement du Réseau FACE dans les territoires prioritaires.
              Le Secrétariat Général du Comité Interministériel des Villes soutient ainsi 18 actions mises en œuvre par la Fondation dans 7 champs prioritaires du Ministre de la Ville.</p>
              </div>
              
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="partenaire_div"> <!-- Le Ministère du Travail, de l’Emploi, de la Formation professionnelle et du Dialogue social // -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="img/partenaire/ministere_travail.gif" width="150"></div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              <h1>Le Ministère du Travail, de l’Emploi, de la Formation professionnelle et du Dialogue social</h1>
              <p>Membre de droit du Conseil d’Administration</p>
              </div>
              
              </div>

              


          </div>
          </div>
          </div>
      </div>
    </div>
  </div>
      
</main>

<?php include ('footer.html'); ?>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
