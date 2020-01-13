<?php

require "./connexiondb.php";
$db=connexionBase();
//requête avec les values de type variable entre côtes et double côtes 
$requete = 'DELETE FROM product WHERE pro_id = pro_id';
$delete = $db->query($requete); //prepare une requete
   

        header("Location:../views/tableau.php");// redirige
    





?>