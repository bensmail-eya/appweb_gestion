<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Ajoute agent</title>
  <link rel="stylesheet" type="text/css" href="../css/style_acceuil.css">




</head>
<?php

include('../connexionBD.php');

if(isset($_POST['ajoute']))
{

//$ref=$_POST['num_ref'];

ajoute_d_agent($_POST['nom_agent'],$_POST['prenom_agent'],$_POST['tel']);


}

function ajoute_d_agent($nc,$r,$q)
{
	
mysql_query("INSERT INTO agent(Nom_agent,Prénom_agent,telephone) VALUES('$nc','$r',$q);") or die(mysql_error());
header('location:../agents de retrait.php');
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
        <a href="../agents.php">Commandes</a>
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
  <td><label>nom  :</label></td>
<td><input type="texte" name="nom_agent" required></td>

</tr>

<tr>
  <td><label>prenom </label></td>
<td><input type="texte" name="prenom_agent" required></td>

</tr>
<tr>
  <td><label>telephone </label></td>
<td><input type="texte" name="tel" required></td>

</tr>

<tr>
          <td>  <input type="submit" value="Ajouter" class="myButton" name="ajoute"></td>
   

</tr>

</table>

</div>
          </div>
            </form>



</body>
</html>







