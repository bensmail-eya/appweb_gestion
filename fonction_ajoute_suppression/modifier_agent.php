<!DOCTYPE html>

<?php

include('../connexionBD.php');



if(isset($_POST['modifier'])){

modifier_agent($_POST['num_agent'],$_POST['nom_agent'],$_POST['prenom_agent'],$_POST['tel']);

}

function modifier_agent($nc,$r,$q,$t){
mysql_query("UPDATE  agent set  Nom_agent='$r' , Prénom_agent='$q',telephone=$t where id_agent=$nc;") or die(mysql_error());
header('location:../agents de retrait.php');
}



?>


<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Modifier Details Commande</title>
  <link rel="stylesheet" type="text/css" href="../css/style_acceuil.css">




</head>
<bdoy>
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
                <dic class="tableau">
<table>
<tr>
  <td><label>Numero agent :</label></td>
<td><input type="texte" name="num_agent"></td>
</tr>

<tr>
  <td><label>Nom  :</label></td>
<td><input type="texte" name="nom_agent" required></td>

</tr>

<tr>
  <td><label>Prenom</label></td>
<td><input type="texte" name="prenom_agent" required></td>
<tr>
  <td><label>telephone</label></td>
<td><input type="texte" name="tel" required></td>

</tr>

<tr>
          <td>  <input type="submit" value="modifier" class="myButton" name="modifier"></td>
   

</tr>

</table>

</div>
</div>
          
            </form>



</body>
</html>















