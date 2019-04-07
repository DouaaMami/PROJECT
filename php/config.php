<?php
function connect(){
    $server="localhost";
    $base="projet";
    $username="root";
    $pass="";
    try{
        $con=new PDO("mysql:host=$server; bdname=$base",$username,$pass);
        return $con;
    } 
    catch(PDOException $e){
        die("erreur: ".$e->getMessage());
    }
}
?>