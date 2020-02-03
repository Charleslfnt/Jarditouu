
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

        <div class="table-responsivecol-xs=12 col-sm=12 col-md-12 ">
           

            <table class="table table-striped table-hover table-bordered">
                 <caption>Tableau des articles</caption>
             
                <tr>
                    <th scope="col"><b>Clé<b></th>
                    <th scope="col"><b>produit</b></th>   
                    <th scope="col"><b>Référence</b></th>
                    <th scope="col"><b>Nom du produit</b></th>
                   <!-- <thscope="row""><b>description</b></th>
                    <thscope="row""><b>Prix</b></th>-->
                    <th scope="col"><b>Quantité</b></th>
                    <th scope="col"><b>couleur</b></th>
                    <th scope="col"><b>Photo</b></th>
                    <th scope="col"><b>Date d'ajout</b></th>
                    <th scope="col"><b>Date de modification</b></th>
                    <th scope="col"><b>Bloquer le produit à la vente</b></th>
                   
                </tr>
            </thead>

            <?php
            while ($product = $result->fetchObject()) {     //Récupère la prochaine ligne et la retourne en tant qu'objet.
            
                ?>
                	<tr>
<td scope="row"><?=$product->pro_id; ?></td>

<td scope="row" ><?=$product->pro_cat_id; ?></td>

<td scope="row"><?=$product->pro_ref; ?></td>

<td scope="row"><a href="./infoproduit.php?pro_id=<?=$product->pro_id;?>"><?=$product->pro_libelle;?></a></td>

<!--<td scope="row"><?=$product->pro_description; ?></td>

<td scope="row"><?=$product->pro_prix; ?></td>-->

<td scope="row"><?=$product->pro_stock; ?></td>

<td scope="row"><?=$product->pro_couleur; ?></td>

<td scope="row"><img class="img-fluid" src="../assets/img/<?=$product->pro_photo?>"></td>   <!--image du produit-->

<td scope="row"><?=$product->pro_d_ajout; ?></td>

<td scope="row"><?=$product->pro_d_modif; ?></td>

<td scope="row"><?=$product->pro_bloque; ?></td>


</tr>
<?php
}
?>

</table>
</div>
<?php
include("./footer.php");
?>
            
   

</html>