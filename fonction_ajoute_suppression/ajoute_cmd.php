<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Ajoute Commande</title>
  <link rel="stylesheet" type="text/css" href="../css/style_acceuil.css">



</head>

<?php

include('../connexionBD.php');
//include('fonction_ajoute_suppression/ajoute_suppression_cmd.php');



if(isset($_POST['ajoute'])){

//$ref=$_POST['num_ref'];

ajoute_commande($_POST['num_cmd'],$_POST['ref_article'],$_POST['qt_article']);
//die('La Commande a ete bien ajouter , vous pouvez vous <a href=\'commandes.php\'> revenir</a>');


}





function ajoute_commande($num_cmd,$nc,$d){

mysql_query("INSERT INTO `commande`( `Date_cmd`, `code fournisseur`, `ref_article`, `qt_article`,`etat`) VALUES (NOW(),$num_cmd,$nc,$d,'non')") or die(mysql_error());
header('location:../commandes.php');
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
                <div class="tableau">

<table>
<tr>
  <td><label>Numero fournisseur :</label></td>
<td><input type="number" name="num_cmd" required></td>
</tr>

<tr>
  <td><label>Référence article :</label></td>
<td><input type="number" name="ref_article" required></td>


</tr>


<tr>
  <td><label>Quantité article</label></td>
<td><input type="number" name="qt_article" required></td>

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
