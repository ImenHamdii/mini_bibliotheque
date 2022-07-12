<html>
<head>

<link rel="stylesheet" href="../ajout.css"  type="text/css" />
  </head>

<body>
<strong><h1><i><center> Creation de compte </center></i></h1></strong>

<form method="POST" action="">

<table border="1" >
<tr> <td> numero user: </td> <td><input name="numuser" type="number" ></td>
<tr><td> Nom:</td> <td> <input name="nom" type="text"required></td>
<tr><td> Prenom: </td> <td><input name="prenom" type="text" required></td>
<tr> <td> Adresse:</td><td> <input name="adresse"> </td>
<tr> <td> age :</td> <td><input name="age" type="number"></td>
<tr> <td> mot de passe :</td> <td> <input name="pwd" type="password" required></td>
<tr><td colspan='2'><center>
<button name="log">Ajouter </button></center></td></tr>
</table>


<?php
include("../connect.php");

try{
    $numuser = $_POST['numuser'];
$pwd = $_POST['pwd'];
   $u= " SELECT * FROM user WHERE numuser LIKE '%$numuser%'";
   $stm=$cnx->query($u);
   $s=$stm->fetch();
  $su=$s['numuser'];
   
   if ($numuser == $su){
    echo "<br><h3 style='color:teal'>il y a user de cette numero donner un autre numero</h3>";
  }else if(isset($numuser) && isset($pwd)){
 
      $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $age = $_POST['age'];
    

        $p = "INSERT INTO user VALUES ('$numuser','$nom','$prenom','$age','$pwd','$adresse')";
   $st = $cnx->query($p);
   echo "<br><h3 style='color:teal'>ajouter avec succes \"welcome to our biblio\"</h3>";
   echo "<br><br> <a href='login.php'>"?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
   <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
   <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
 </svg>connecte</a><?php
   }else { 
       echo "<br><h3 style='color:teal'>erreur : il y a un probleme </h3>";
    }
  

}
catch(PDOException $e)
{ echo "Connection failed: ".$e->getMessage(); }

?>


</html>




<?php
include("../login.php");
try{
  
    $numcin = $_POST['numcin'];
   $u= " SELECT * FROM admin WHERE cin LIKE '%$numcin%'";
   $stm=$cnx->query($u);
   $s=$stm->fetch();
  $su=$s['cin'];
   if ($numcin == $su){
    echo "<br><h3 style='color:teal'>
    verifier de votre numero de cin </h3>";
  }
    if(isset($_POST['numcin']) || isset($_POST['pwd'])){
      $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $age = $_POST['age'];
    $numcin = $_POST['numcin'];
    $pwd = $_POST['pwd'];
    $p = "INSERT INTO admin VALUES ('$nom','$numcin','$tel','$age','$pwd')";
   $st = $cnx->exec($p);
          if($st){
          echo "<br><h3 style='color:teal'>ajouter avec succes bienvenue dans notre équipe $nom </h3>";
          echo "<br><br> <a href='../connect.php'>"?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
          <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
          <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
        </svg>connecte</a><?php} else{echo"desole";}
   } else{  echo "<br><h3 style='color:teal'>erreur : il y a un probleme!!! </h3>";
          }

catch(PDOException $e)
{ echo "Connection failed: ".$e->getMessage() }
?>
</html>


try{
  if(isset($_POST['numcin'])){
    $numcin = $_POST['numcin'];
   $u= " SELECT * FROM admin WHERE cin LIKE '%$numcin%'";
   $stm=$cnx->query($u);
   $s=$stm->fetch();
  $su=$s['cin'];
   
    if(isset($_POST['numcin']) || isset($_POST['pwd'])){
      $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $age = $_POST['age'];
    $numcin = $_POST['numcin'];
$pwd = $_POST['pwd'];
    $p = "INSERT INTO admin VALUES ('$nom','$numcin','$tel','$age','$pwd')";
   $st = $cnx->exec($p);
   if($st){
   echo "<br><h3 style='color:teal'>ajouter avec succes bienvenue dans notre équipe $nom </h3>";
   echo "<br><br> <a href='../connect.php'>"?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
   <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
   <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
 </svg>connecte</a><?php} else{echo"desole";}
   } else if ($numcin == $su){
    echo "<br><h3 style='color:teal'>
    verifier de votre numero de cin </h3>";
  }else {  echo "<br><h3 style='color:teal'>erreur : il y a un probleme!!! </h3>";
          }
}
}catch(PDOException $e)
{ echo "Connection failed: ".$e->getMessage(); }
?>
</form><body></html>