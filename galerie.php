<!DOCTYPE html>
<html >
<head>
 <meta charset="UTF-8">
  <title>FACE Bourbonnais</title>
  <link rel="shortcut icon" href="img/favicon_FACE1.png"> <!-- icone du site -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport"> <!-- viewport bootstrap -->
  <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Oleo+Script" rel="stylesheet"> <!-- font google -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> <!-- css bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"> <!-- css bootstrap  -->
  <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- css bootstrap x3 ? wtf ? qui a mis tout ça -->
  <link rel="stylesheet" href="css/style.css"> <!-- Css du site -->

  
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

<?php include ('footer.html'); ?>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>  <!-- navbar fixé au top -->
  <script type="text/javascript" src="js/jquery.sticky.js"></script>
  <script>
    $(window).load(function(){
      $("#navbar").sticky({ topSpacing: 0 });
    });
  </script>
  
</body>
</html>
