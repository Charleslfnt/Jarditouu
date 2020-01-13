
  <?php
include("./headerviews.php");
?>


  <?php
	
require("../controller/connexiondb.php");
$db=connexionBase();
$requete = "SELECT * FROM produits";

$result = $db->query($requete); //Exécute une requête SQL, retourne un jeu de résultats en tant qu'objet PDOStatement
?>




            <!--Mon H1-->
            <h1 class="tableh1">Tableau</h1>

             <!--Tableau des articles-->

        <div class="table-responsive">
           

            <table class="table table-striped table-hover table-bordered" height="110px" width="1000px">
                 <caption>Tableau des articles</caption>
              <thead>
                <tr>
                    <th><b>Clé<b></th>
                    <th><b>produit</b></th>   
                    <th><b>Référence</b></th>
                    <th><b>Nom du produit</b></th>
                   <!-- <th><b>description</b></th>
                    <th><b>Prix</b></th>-->
                    <th><b>Quantité</b></th>
                    <th><b>couleur</b></th>
                    <th><b>Photo</b></th>
                    <th><b>Date d'ajout</b></th>
                    <th><b>Date de modification</b></th>
                    <th><b>Bloquer le produit à la vente</b></th>
                </tr>
            </thead>

            <?php
            while ($product = $result->fetchObject()) {     //Récupère la prochaine ligne et la retourne en tant qu'objet.
            
                ?>
                	<tr>
                    <td><?=$product->pro_id; ?></td>

<td><?=$product->pro_cat_id; ?></td>

<td><?=$product->pro_ref; ?></td>

<td><a href="./infoproduit.php?pro_id=<?=$product->pro_id;?>"><?=$product->pro_libelle;?></a></td>

<!--<td><?=$product->pro_description; ?></td>

<td><?=$product->pro_prix; ?></td>-->

<td><?=$product->pro_stock; ?></td>

<td><?=$product->pro_couleur; ?></td>

<td scrape="row"><img class="img-fluid" src="../assets/img/<?=$product->pro_id.".".$product->pro_photo?>"></td>   <!--merci léo et orlane -->

<td><?=$product->pro_d_ajout; ?></td>

<td><?=$product->pro_d_modif; ?></td>

<td><?=$product->pro_bloque; ?></td>

</tr>
<?php
}
?>

</table>
<?php
include("./footer.php");
?>
            
   

</html>