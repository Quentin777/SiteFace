<?php
include 'bdd.php';
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
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">

  
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

<div class="container">
  <div class="row" style="background-color: rgba(255,255,255,0.9); border:2px solid #2B888C;box-shadow: 10px 10px 20px rgba(0,0,0,0.5);">

 <!--  if(isset($_GET['numero'])){
    $articles = file('articles.txt');
    foreach ($articles as $key => $value) {
      $unParUn = explode('%ICILALIMITE%', $value);
      if($unParUn[3] == $_GET['numero']){
        echo '<h1 id="titre_pageArticle" class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">' . $unParUn[0] . '</h1>';
        echo '<img src="upload/'.$unParUn[3] . $unParUn[2].'" id="image_pageArticle" class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1"/>';
        echo '<p id="paragraphe_pageArticle" class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">' . $unParUn[1] . '</p>';


      }
    }
  } -->


  <?php 
    if(isset($_GET['numero'])){
     
      $articles = $bdd->query('SELECT * FROM article');
      foreach ($articles as $value) {
        if($value[0] == $_GET['numero']){
          echo '<h1 id="titre_pageArticle" class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">' .$value[1] . '</h1>';
          echo '<img src="upload/'.$value[0] . $value[2].'" id="image_pageArticle" class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1"/>';
          echo '<p id="paragraphe_pageArticle" class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">' . $value[3] . '</p>';
        }
      }
    }
  ?>

  </div>
</div>


</main>

<?php include ('footer.html'); ?>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
