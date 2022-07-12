<html>
<head><link href="../ajout.css" rel="stylesheet"/> </head>

<body>
<strong><h1><i><center> Modifier dans le livre </center> </i></h1></strong> 
<?php
include("../connect.php");
$ii="SELECT id_livre FROM livre ";
$icx=$cnx->query($ii);
$ic=$icx->fetch(PDO::FETCH_OBJ);
 

?>
<form method="POST" action="">
<table border="2" >
<tr> <td> id_livre: </td> <td><input name="id" type="number"  ></td>
<tr><td> titre:</td> <td> <input name="titre" type="text" ></td>
<tr><td> auteur: </td> <td><input name="auteur" type="text"></td>
<tr> <td> categorie:</td><td> <input name="categ"> </td>
<tr><td> lien de livre: </td><td><input name="lien" type="file" ></td>
<tr><td> image: </td><td> <input name="img" type="file"></td>
<tr><td colspan='2'><center><button type="submit" value="envoyer">Modifier </button></center></td></tr>
</table>
</center>

<?php


if(isset($_POST['id'])||isset($_POST['titre'])||isset($_POST['auteur'])
||isset($_POST['categ'])||isset($_POST['img'])||isset($_POST['lien'])){
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $catg = $_POST['categ'];
    $img=$_POST['img'];
    $lien=$_POST['lien'];

$p = "UPDATE livre SET titre='$titre',id_livre='$id',auteur='$auteur',
        categorie='$catg',image='$img',lien='$lien' WHERE id_livre=$id";
   $st = $cnx->exec($p); 

   if($st){
        header("location:livre.php");}

        
        else { echo " <h3 style='color:red'><br> erreur il y a un probleme</h3>";}
 }  else {echo "<h3 style='color:red'> les champs sont obligatoire</h3>";}
?>
<footer> 
<a href="deletlivre.php">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>supprimer un livre</a>&emsp;&emsp;&emsp;&emsp;

<a href="livre.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>afficher les livres</a><br><br>

<a href="ajoutlivre.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
</svg>ajouter un livres</a>&emsp;&emsp;&emsp;

<a href="biblio.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>page d'accueil</a>
</footer>
</body>
</html>