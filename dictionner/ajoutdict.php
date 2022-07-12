<html>
<?php session_start(); ?>
<head> <link href="dictionner.css" rel="stylesheet"/>
</head>
<body>
    <strong><h1><i><center> Ajouter Dictionner</center>  </i></h1></strong> 
<form method="POST" action="">

<table border="2" >
<tr> <td> num_serie </td> <td><input name="num" type="number" required></td>
<tr><td> titre :</td> <td> <input name="titre" type="text"></td>
<tr><td> editeur : </td> <td><input name="editeur" type="text"></td>
<tr><td> lien de dictionner </td><td><input name="lien" type="file" ></td>
<tr><td> image : </td><td> <input name="img" type="file"></td>
<tr><td colspan='2'><center><button type="submit" name="env" value="envoyer">Ajouter </button></center></td></tr>
</table>

<?php
include("../connect.php");

try{
    if(isset($_POST['num_seriedect'])||isset($_POST['titre'])||isset($_POST['editeur'])
||isset($_POST['img'])||isset($_POST['lien'])){
$editeur=$_POST['editeur'];
$num_seriedect=$_POST['num'];
$lien=$_POST['lien'];
$image=$_POST['img'];
$titre=$_POST['titre'];

    $s="INSERT INTO dictionner VALUES ('$editeur','$num_seriedect','$lien','$image','$titre')";
    $st=$cnx->query($s);
     if (isset($_POST['env'])){
         echo "<br>dictionner ajouter ";
     }else {
         echo "ereur";
     }
    
}else {echo"<h3>tous les champs est important</h3>";} 
}
catch(PDOStatment $e){
    echo "connect failed :".$e->getmessages();
}

?>
<footer>
<button><a href="deletdict.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>Supprimer un dictionner </a></button>

<button><a href="dictionner.php">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>afficher les dictionner </a></button>

<button><a href="../livre/biblio.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg> page d'accueil</a></button>
</footer>