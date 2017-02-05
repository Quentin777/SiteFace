<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>FACE Bourbonnais</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<!-- Inclu le compteur de visite -->
<?php include('compteur.php'); ?>


 <!-- AJOUT DU HEADER ET DU NAV -->
 <?php include('header.html');
       include('nav.html');
  ?>
<!-- FIN D'AJOUT -->


<!-- MAIN DE LA PAGE -->
<main>

  <div class='wrap_columns clearfix'>
    <section id='main-content' style="width: 100%;">
      <div class="page-header">
    <h1 class="text-center" style="color:#27888F;">Galerie Face-bourbonnais</h1>
  </div>
  <div class="container">
    <div class="row">
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="http://placehold.it/700x350" alt="" class="img-responsive" /></li>
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="http://placehold.it/700x350" alt="" class="img-responsive" /></li>
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="http://placehold.it/700x350" alt="" class="img-responsive" /></li>
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="http://placehold.it/700x350" alt="" class="img-responsive" /></li>
      <li id="galerie" class="col-lg-4 col-md-6 col-sm-12 col-xs-12"><img src="http://placehold.it/700x350" alt="" class="img-responsive" /></li>
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
<!-- FIN DU MAIN -->

<!-- AJOUT DU FOOTER -->
<?php
  include('footer.php'); 
?>
<!-- FIN D'AJOUT -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
