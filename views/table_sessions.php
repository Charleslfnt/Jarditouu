<?php

include("./headerviews.php");

session_status();

require("../controller/connexiondb.php");
$db=connexionBase();

$requete = "SELECT * FROM utilisateurs";

$result = $db->query($requete); //Exécute une requête SQL, retourne un jeu de résultats en tant qu'objet PDOStatement


?>



<div class="table-responsive col-xs-8 col-sm-8 col-md-12 ">
           
<table class="table table-striped table-hover table-bordered">



<tr>

<th>ID</th>
<th>Login</th>
<th>Nom</th>
<th>Prénom</th>
<th>Émail</th>
<th>Password</th>
<th>Role</th>
<th>Date d'inscription</th>
<th>Dernière connexion</th>



</tr>

<?php
            while ($utilisateurs = $result->fetchObject()) {     //Récupère la prochaine ligne et la retourne en tant qu'objet.
            
                ?>
                	<tr>
<td scope="row"><?=$utilisateurs->user_id; ?></td>
<td scope="row"><?=$utilisateurs->user_login; ?></td>
<td scope="row"><?=$utilisateurs->user_nom; ?></td>
<td scope="row"><?=$utilisateurs->user_prenom; ?></td>
<td scope="row"><?=$utilisateurs->user_mail; ?></td>
<td scope="row"><?=$utilisateurs->user_password; ?></td>
<td scope="row"><?=$utilisateurs->user_role; ?></td>
<td scope="row"><?=$utilisateurs->user_date_inscription; ?></td>
<td scope="row"><?=$utilisateurs->user_derniere_connexion; ?></td>

</tr>
<?php
}
?>

</table>
</div>


<?php
include("./footer.php");
?>