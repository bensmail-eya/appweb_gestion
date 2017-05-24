
<?php

//la connexion a la base de donnees
@mysql_connect('localhost','root','') or die('error');
mysql_select_db('gestion_stock') or die('DataBAse undifined');
mysql_query('SET NAMES utf8');

?>