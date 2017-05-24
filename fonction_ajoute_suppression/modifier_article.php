<!DOCTYPE html>
<?php

include('../connexionBD.php');

function modifier_article($r,$n,$p,$q){

mysql_query("UPDATE  article set  nom_article='$n' , prix_unitaire=$p , qte=$q  where ref_article=$r;") or die(mysql_error());
header('location:../articles.php');
}



//include('../fonction_ajoute_suppression/ajoute_suppression_article.php');
//include('interface.php');


if(isset($_POST['modifier'])){

//$ref=$_POST['num_ref'];

modifier_article($_POST['num_ref'],$_POST['nom_article'],$_POST['p_unitaire'],$_POST['qte_stocke']);


}


?>




<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Modifier article</title>
  <link rel="stylesheet" type="text/css" href="../css/style_acceuil.css">




</head>
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
                <div class="tableau">
<table>
<tr>
  <td><label>Reference de article</label></td>
<td><input type="texte" name="num_ref" required></td>
</tr>

<tr>
  <td><label>Nom De article</label></td>
<td><input type="texte" name="nom_article" required></td>

</tr>

<tr>
  <td><label>Prix unitaire</label></td>
<td><input type="texte" name="p_unitaire" required></td>

</tr>

<tr>
  <td><label>Quantite stocke</label></td>
<td><input type="texte" name="qte_stocke" required></td>

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