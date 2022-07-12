<html>
<head> 
<link rel="stylesheet" href="login.css"  type="text/css" />
</head>
<body>
<form action ="" method="POST">
<div id="container"> 
<h1><i> Connexion </i></h1>
<form action="" method="POST">
<B>Numero user <input type="number" name="numu"> <br><br>
Mot de passe <input type="password" name="pwd"></B><br>


<button name="cnx" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
</svg>connexion </button>

<button value="ajouter user" name="ajout" ><a href="ajoutuser.php">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>creer un compte   </a></button>


<?php
include("../connect.php");

$n = "SELECT numuser,pwd,nom FROM user ";
   $stm=$cnx->query($n);
   $t=$stm->fetchAll();
   foreach($t as $s){ 
   $ns=$s['numuser'];
    $pm=$s['pwd'];
    $n=$s['nom'];
$cnx=$_POST['cnx'];
$num = $_POST['numu'];
$pwd=$_POST['pwd'];    
      if (empty($num) || empty($pwd)){
        echo"donner le numero de user et mots de passe";
    }elseif($num==$ns && $pwd==$pm){
        session_start();
        $_SESSION['nom']=$n;

    header("location:../livre/biblio.php");
        
       }
       else { echo "cette utilisateur n'est pas existe ";}      
   }

?>
</form>
</div>
</body>
</html>