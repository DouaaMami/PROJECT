<?php
include "config.php";
$base=connect();
$n=$_GET['nom'];
$pren=$_GET['prenom'];
$phone=$_GET['tel'];
$gender=$_GET['gridRadios'];
$birth=$_GET['datenaiss'];
$e=$_GET['email'];
$m=$_GET['mdp'];
$req="INSERT INTO inscri (id,nom,prenom,telephone,sexe,datenaissance,email,password) VALUES (null,'$n','$pren','$phone','$gender','$birth','$e','$m') ";
 $resp=$base->exec($req);
 if($resp==1){
     echo "données insérées"; }
     else {
         echo "verifier votre requete";
     }
?>