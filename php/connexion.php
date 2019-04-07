<?php
include "config.php";
$base=connect();
$e=$_GET['email'];
$m=$_GET['mdp'];
$req="INSERT INTO connex (email,password) VALUES ('$e','$m') ";
 $resp=$base->exec($req);
 if ($resp==1){
     echo "données insérées"; }
     else {
         echo "vérifier votre requete";
     }
?>