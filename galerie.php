<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>FACE Bourbonnais</title>
  <link rel="shortcut icon" href="img/favicon_FACE1.png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  
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

  <div class='wrap_columns clearfix'>
    <section id='main-content' style="width: 100%; background-color: white;">
      <div class="page-header">
    <img src="img/galerie.png" width="400" style="margin-left: 5%">
  </div>
  <div class="container">
    <div class="row">
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="img/facelogo.jpg" alt="" class="img-responsive" /></li>
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="img/facelogo.jpg" alt="" class="img-responsive" /></li>
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="img/facelogo.jpg" alt="" class="img-responsive" /></li>
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="img/facelogo.jpg" alt="" class="img-responsive" /></li>
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="img/facelogo.jpg" alt="" class="img-responsive" /></li>
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="http://placehold.it/700x350" alt="" class="img-responsive" /></li>
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="http://placehold.it/700x350" alt="" class="img-responsive" /></li>
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="http://placehold.it/700x350" alt="" class="img-responsive" /></li>
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="http://placehold.it/700x350" alt="" class="img-responsive" /></li>
    </div>
  </div>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body"></div>
      </div>
    </div>
  </div>
  </section>
</main>

<?php include ('footer.html'); ?>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
