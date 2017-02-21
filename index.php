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
 
  <div class="container">             <!--    ZONE PRINCIPAL DU SITE entre nav & footer -->
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="font-size: 30px"><img class="actu" src="img/actu.png" width="350" style="margin-bottom: 10px;" /></div> <!-- /// IMAGE "ACTUALITE" /// -->
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="background-color: white;">   <!-- zone actu -->
          
          <div class="row">
           
             <?php 
     $tout = file('articles.txt');
      $tableau = [];
      foreach ($tout as $key => $value) {
        $ligne = explode(',', $value);
        array_push($tableau, $ligne);
      }
      foreach ($tableau as $key => $valeur) {
            $key = $key +1;
            echo '<a href="' . strtolower($valeur[0]) . '.php"><div class="article col-xs-12 col-sm-6 col-md-6 col-lg-6">';    //<!-- Article 1 -->
              echo '<img src="upload/' . $key . $valeur[2] . '" class="photo_article" />';
             echo '<h3 class="text_article"> <a href="index.html" class="liens_article">' . $valeur[0] . '</a></h3></div></a>'; 
      }

    ?>

          <!--     ////////// PAGINATION BAS ARTICLE //////// -->
              <ul class="pagination" style="margin-left: 37%;">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
              <!--     ////////// PAGINATION BAS ARTICLE FIN //////// -->
          </div>
        </div>  
                    <!--  PLUGIN FACEBOOK -->
         <iframe class="col-xs-0 col-sm-0 col-md-3 col-lg-3 facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=270&height=600&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="320px" height="500" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

         <a href="https://fr-fr.facebook.com/faceterritoirebourbonnais/" title="Facebook" class="btn btn-facebook btn-lg col-xs-12 col-sm-12 col-md-0 col-lg-0" id="face_button"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
         <a href="https://fr.linkedin.com/in/face-bourbonnais-845073131" title="Linkedin" class="btn btn-linkedin btn-lg col-xs-12 col-sm-12 col-md-0 col-lg-0" id="face_button"><i class="linkedin"></i> Linkedin</a>

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