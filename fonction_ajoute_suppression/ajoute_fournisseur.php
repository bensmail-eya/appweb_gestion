<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Ajoute fournisseur</title>
  <link rel="stylesheet" type="text/css" href="../css/style_acceuil.css">




</head>
<?php
  include('../connexionBD.php');




function ajoute_fournisseur($n,$a,$v,$t){
mysql_query("INSERT INTO `fournisseur`(`Nom`, `adresse`, `ville`, `telephone`) VALUES ('$n','$a','$v',$t)") or die(mysql_error());

header('location:../fournisseurs.php');
}




if(isset($_POST['ajoute'])){



ajoute_fournisseur
($_POST['nom_four'],
  $_POST['adr_four'],
  $_POST['ville_fournisseur'],
  $_POST['telephone'])
;


}




?>

<body>

  <ul class="menu cf">
    <li><a href="../index.php">Page d'acceuil </a></li>
    <li>
        <a href="../fournisseurs.php">Fournisseurs</a>
        <ul class="submenu">
            <li><a href="../fonction_ajoute_suppression/ajoute_fournisseur.php">Ajouter</a></li>
            <li><a href="../fonction_ajoute_suppression/rechercher_fournisseur.php">Rechercher</a></li>
            <li><a href="../fonction_ajoute_suppression/supprimer_fournisseur.php">Supprimer</a></li>
            <li><a href="../fonction_ajoute_suppression/modifier_fournisseur.php">Modifier</a></li>
        </ul>         
    </li>
    
    <li>
        <a href="../articles.php">Articles</a>
        <ul class="submenu">
            <li><a href="../fonction_ajoute_suppression/ajoute_article.php">Ajouter</a></li>
            <li><a href="../fonction_ajoute_suppression/rechercher_article.php">Rechercher</a></li>
            <li><a href="../fonction_ajoute_suppression/supprimer_article.php">Supprimer</a></li>
            <li><a href="../fonction_ajoute_suppression/modifier_article.php">Modifier</a></li>
        </ul>         
    </li>

    <li>
        <a href="../commandes.php">Commandes</a>
        <ul class="submenu">
            <li><a href="../fonction_ajoute_suppression/ajoute_cmd.php">Ajouter</a></li>
            <li><a href="../fonction_ajoute_suppression/rechercher_cmd.php">Rechercher</a></li>
            <li><a href="../fonction_ajoute_suppression/supprimer_cmd.php">Supprimer</a></li>
            <li><a href="../fonction_ajoute_suppression/modifier_cmd.php">Modifier</a></li>
        </ul>              
    </li>

    <li>
        <a href="../agents de retrait.php">Agents de retrait</a>
     <ul class="submenu">
            <li><a href="../fonction_ajoute_suppression/ajoute_agent.php">Ajouter</a></li>
            <li><a href="../fonction_ajoute_suppression/rechercher_agent.php">Rechercher</a></li>
            <li><a href="../fonction_ajoute_suppression/supprimer_agent.php">Supprimer</a></li>
            <li><a href="../fonction_ajoute_suppression/modifier_agent.php">Modifier</a></li>
        </ul>        
    </li>
       
     
  
</ul>

	<form method="POST" action="">
              <div id="formulaire">
 <div class="tableau" >              
<table>
<tr>
  <td><label  >Nom :</label></td>
<td><input type="texte" name="nom_four" required></td>
</tr>



<tr>
  <td ><label>Adresse :</label></td>
<td><input type="texte" name="adr_four" required></td>

</tr>

<tr>
  <td><label>Ville :</label></td>
<td><input type="texte" name="ville_fournisseur" required></td>

</tr>



<tr>
  <td><label>Telephone :</label></td>
<td><input type="texte" name="telephone" required></td>

</tr>

<tr>
        
     <td>   <input type="submit" value="Ajouter" class="myButton" name="ajoute"> </td>
          
</tr>


</table>
</div>
</div>



</body>

</html>
