<?php

$servername="localhost";
$username="root";
$pass="";
$base="bibliotheque";
try{
    $cnx= new PDO ("mysql:host=$servername;dbname=$base",$username,$pass);
        if ($cnx==null){ 
            echo "erreur";}
        else { echo "*****";}
} 
catch(PDOException $e)
{
    echo "connection a la base de donnes failed: ".$e->getMessage();
}

?>