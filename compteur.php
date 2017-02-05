<?php

$contenu = fopen('compteur.txt', 'r+');
$ligneUne = (int) fgets($contenu);
$ligneUne +=1;
fseek($contenu, 0);
fputs($contenu, $ligneUne);
fclose($contenu);
?>