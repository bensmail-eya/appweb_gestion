<html lang="en-US">
  <head>
	 <meta charset="UTF-8">
	 <title>Articles</title>
   <link rel="stylesheet" type="text/css" href="css/style_acceuil.css">
  </head>

  <?php
     include 'connexionBD.php';



  			 $result=mysql_query("UPDATE article
          INNER JOIN
      commande ON commande.ref_article = article.ref_article
  SET
      qte = qte + commande.qt_article
  		where commande.etat='oui' ;");
  	if ($result)

{

    mysql_query("UPDATE commande SET etat='reçu' where etat='oui';");

}






   ?>


<body>

    <ul class="menu cf">
    <li><a href="index.php">Page d'acceuil </a></li>
    <li>
        <a href="fournisseurs.php">Fournisseurs</a>
        <ul class="submenu">
            <li><a href="fonction_ajoute_suppression/ajoute_fournisseur.php">Ajouter</a></li>
            <li><a href="fonction_ajoute_suppression/rechercher_fournisseur.php">Rechercher</a></li>
            <li><a href="fonction_ajoute_suppression/supprimer_fournisseur.php">Supprimer</a></li>
            <li><a href="fonction_ajoute_suppression/modifier_fournisseur.php">Modifier</a></li>
        </ul>
    </li>

    <li>
        <a href="articles.php">Articles</a>
        <ul class="submenu">
            <li><a href="fonction_ajoute_suppression/ajoute_article.php">Ajouter</a></li>
            <li><a href="fonction_ajoute_suppression/rechercher_article.php">Rechercher</a></li>
            <li><a href="fonction_ajoute_suppression/supprimer_article.php">Supprimer</a></li>
            <li><a href="fonction_ajoute_suppression/modifier_article.php">Modifier</a></li>
        </ul>
    </li>

    <li>
        <a href="commandes.php">Commandes</a>
        <ul class="submenu">
            <li><a href="fonction_ajoute_suppression/ajoute_cmd.php">Ajouter</a></li>
            <li><a href="fonction_ajoute_suppression/rechercher_cmd.php">Rechercher</a></li>
            <li><a href="fonction_ajoute_suppression/supprimer_cmd.php">Supprimer</a></li>
            <li><a href="fonction_ajoute_suppression/modifier_cmd.php">Modifier</a></li>
        </ul>
    </li>

    <li>
        <a href="agents de retrait.php">Agents de retrait</a>
     <ul class="submenu">
            <li><a href="fonction_ajoute_suppression/ajoute_agent.php">Ajouter</a></li>
            <li><a href="fonction_ajoute_suppression/rechercher_agent.php">Rechercher</a></li>
            <li><a href="fonction_ajoute_suppression/supprimer_agent.php">Supprimer</a></li>
            <li><a href="fonction_ajoute_suppression/modifier_agent.php">Modifier</a></li>
        </ul>
    </li>



</ul>


  <div class="CSSTableGenerator" >
                <table >
                    <tr>

                        <td >
                        Réfèrence
                        </td>
                        <td>
                         nom article
                        </td>
                        <td>
                          prix unitaire
                        </td>
                        <td>
                          Quantite stocke
                        </td>

                    </tr>




                      <?php
                         include('connexionBD.php');
                         $query = "SELECT * FROM article ";
                     if ($result = mysql_query($query)) {
                           /* Récupère un tableau associatif */
                    while ($row = mysql_fetch_assoc($result)) {
                      ?>
                        <tr>
                          <td>
                         <?php echo $row["ref_article"];?>
                       </td>

                       <td>
                         <?php echo $row["Nom_article"];?>
                       </td>

                       <td>
                         <?php echo $row["prix_unitaire"];?>
                       </td>

                       <td>
                         <?php echo $row["qte"];?>
                       </td>


                        </tr>
                        <?php }
    mysql_free_result($result);
    mysql_close ();
}

?>








                </table>
                <br><br><table >
                <p style="color:#FAEBD7">article presque epuisé </p>
                    <tr>

                        <td >
                        Réfèrence
                        </td>
                        <td>
                         nom article
                        </td>
                        <td>
                          prix unitaire
                        </td>
                        <td>
                          Quantite stocke
                        </td>

                    </tr>
 <?php
                         include('connexionBD.php');
                         $query = "SELECT * FROM article where qte<2 ";
                     if ($result = mysql_query($query)) {
                           /* Récupère un tableau associatif */
                    while ($row = mysql_fetch_assoc($result)) {
                      ?>
                        <tr>
                          <td>
                         <?php echo $row["ref_article"];?>
                       </td>

                       <td>
                         <?php echo $row["Nom_article"];?>
                       </td>

                       <td>
                         <?php echo $row["prix_unitaire"];?>
                       </td>

                       <td>
                         <?php echo $row["qte"];?>
                       </td>


                        </tr>
                        <?php }
    mysql_free_result($result);
    mysql_close ();
}

?>

                <br><br><table >
                <p style="color:#FAEBD7">article à ne pas commander </p>
                    <tr>

                        <td >
                        Réfèrence
                        </td>
                        <td>
                         nom article
                        </td>
                        <td>
                          prix unitaire
                        </td>
                        <td>
                          Quantite stocke
                        </td>

                    </tr>
 <?php
                         include('connexionBD.php');
                         $query = "SELECT * FROM article where qte>20 ";
                     if ($result = mysql_query($query)) {
                           /* Récupère un tableau associatif */
                    while ($row = mysql_fetch_assoc($result)) {
                      ?>
                        <tr>
                          <td>
                         <?php echo $row["ref_article"];?>
                       </td>

                       <td>
                         <?php echo $row["Nom_article"];?>
                       </td>

                       <td>
                         <?php echo $row["prix_unitaire"];?>
                       </td>

                       <td>
                         <?php echo $row["qte"];?>
                       </td>


                        </tr>
                        <?php }
    mysql_free_result($result);
    mysql_close ();
}

?>


            </div>



</body>



</html>
