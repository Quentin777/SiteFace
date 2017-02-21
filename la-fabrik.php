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
    <section id='main-content'>
      <article class='clearfix'>
        <div class='content'>
          <h2>FACE is good.</h2>
          <p>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
        </div>
        <aside>
          <p>The red line is tangential to the curve at the point marked by a red dot.</p>
        </aside>
      </article>
    </section>
    <section id='sidebar'>
     <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffaceterritoirebourbonnais%2F&tabs=timeline&width=280&height=500&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </section>
  </div>
  <section id='promotions'>
    <article class='clearfix'>
      <p>Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.</p>
      <p>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
    </article>
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