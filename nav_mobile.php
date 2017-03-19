<nav>
  <ul class='clearfix'>
    <li class='list-1'>
      <a href='index.php' title='Nav Item 1'><h1>Accueil</h1></a>
    </li>
<!--     <li class='list-2'>
      <a href='#' title='Nav Item 2' style="display: none;">Fil d'actualité</a>
    </li>
    <li class='list-3'>
      <a href='#' title='Nav Item 3' style="display: none;">Reseaux sociaux</a>
    </li>
    <li class='list-4'>
      <a href='#' title='Nav Item 4' style="display: none;">Press</a>
    </li>
    <li class='list-5'>
      <a href='#' title='Nav Item 5' style="display: none;">Agenda</a>
    </li> -->
    <li class='list-6'>
      <a href='presentation.php' title='Nav Item 6'><h1>Presentation</h1></a>
    </li>
    <li class='list-7'>
      <a href='histoire.php' title='Nav Item 7'>Histoire</a>
    </li>
    <li class='list-9'>
      <a href='actions.php' title='Nav Item 9'>Actions</a>
    </li>
    <li class='list-10'>
      <a href='galerie.php' title='Nav Item 10'><h1>Galerie</h1></a>
    </li>
    <li class='list-12'>
      <a href='partenariat.php' title='Nav Item 12'><h1>Partenariat</h1></a>
    </li>
    <li class='list-13'>
      <a href='partenariat.php#text_entreprise' title='Nav Item 13'>Les Entreprises</a>
    </li>
    <li class='list-14'>
      <a href='partenariat.php#text_association' title='Nav Item 14'>Les Associations</a>
    </li>
<!--     <li class='list-15'>
      <a href='#' title='Nav Item 15' style="display: none;">Les Particuliers</a>
    </li> -->
    <li class='list-15'>
      <a href='partenariat.php#text_institution' title='Nav Item 16'>Les Institutions</a>
    </li>
    <li class='list-16'>
      <a href='fabrik.php' title='Nav Item 17'><h1>La Fabrik</h1></a>
    </li>
    <li class='list-17'>
      <a href='#' title='Nav Item 18'>Présentation</a>
    </li>
    <li class='list-22'>
      <a href='contact.php' title='Nav Item 8'>contact</a>
    </li>
    <li> <a href="apprenants.php"></a></li>
  </ul>
</nav>
<?php if(!isset($_SESSION["auth"])) : ?>
<a href="admin.php" id="lien_connexion"><button>Connexion</button></a>
<?php else :?>
<a href="deconnexion.php" id="lien_connexion"><button>Deconnexion</button></a>
<?php endif ?>