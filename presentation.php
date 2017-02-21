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
  <header class="bluebandeauseparateur">
 <a href='#' id='nav_show' title='Show The Navigation'>Menu</a>
   <div id="logo"><img src="img/logo-face.png" width="160"/></div>
</header>
  
<?php 
include ('nav_pc.html'); 
include ('nav_mobile.html');
?>
  

<main>
        <div class='container'>
                <div class="row">
<!-- <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div> -->
                        <div class="col-md-10 col col-md-offset-1" id="padding50">
                                <h1 class="h1page" id="padding"><span>P</span>résentation</h1>
                                <p>     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!--       <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div> -->
                        </div> 
                </div>
                <div class="row">
                        <a href="index.html"> <h2 class="h2page col-xs-8 col col-xs-offset-2 col-sm-6 col col-sm-offset-3 col-md-6 col col-md-offset-3 col-lg-6 col col-lg-offset-3 text-center" id="colorhistoire">Histoire</h2></a>
                </div> 
                <div class="row">
                        <a href="index.html"> <h2 class="h2page col-xs-8 col col-xs-offset-2 col-sm-6 col col-sm-offset-3 col-md-6 col col-md-offset-3 col-lg-6 col col-lg-offset-3 text-center" id="colorcontact">Contact</h2></a> 
                </div>
                <div class="row">
                        <a href="index.html" class=""> <h2 class="h2page col-xs-8 col col-xs-offset-2 col-sm-6 col col-sm-offset-3 col-md-6 col col-md-offset-3 col-lg-6 col col-lg-offset-3 text-center" id="colorpalmarès">Palmarès</h2></a> 
                </div>
                
        </div>

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