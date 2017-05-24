
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Recherche article</title>
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


<table>

<tr>
  <td><label style="color:white;">Nom de article : </label></td>
<td><input type="texte" name="nom_ar" required></td>
</tr>
<tr>
    <td>  <input type="submit" value="rechercher" class="myButton" name="rechercher"></td>
</tr>
</table>
</form>
                      
                      <?php
                         include('../connexionBD.php');
                               if(isset($_POST['rechercher'])){


                                ?>
                                    <div class="CSSTableGenerator" >
                                  <table >              
                                     <tr>
                    
                            <td >
                        Reference de article
                        </td>
                        <td>
                        Nom de article
                        </td>
                        <td>
                          Prix Unitaire
                        </td>
                         <td>
                          Quantite Stocké
                        </td>
                        
                    </tr>


                                <?php
                               $ref=$_POST['nom_ar'];

                         $query = "SELECT * FROM `article` WHERE Nom_article='$ref'";
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
}
?>

                </table>


            </div>
            </form>






</body>



</html>





