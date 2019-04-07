<?php
include "config.php";
$base=connect();
$todo=$_GET['ajout'];
$req="INSERT INTO todo (ajout) VALUES ('$todo') ";
 $resp=$base->exec($req);
 if($resp==1){
     echo "données insérées"; }
     else {
         echo "verifier votre requete";
     }
?>