<?php
include("./headerviews.php");

require("../controller/connexiondb.php");
$db=connexionBase();
$requete = "SELECT * FROM categories";

$result = $db->query($requete); //Exécute une requête SQL, retourne un jeu de résultats en tant qu'objet PDOStatement
$categorie = $result->fetchall(PDO::FETCH_OBJ); 
?>

<h1>Modifier un produit</h1>

<hr>

<form action="../controller/controlmodif.php?pro_id=<?=$_GET['pro_id']?>" method="POST"> 

<fieldset>
                <legend>Saisissez les informations</legend>
    <div class="formulaire-ajout">
    <label for="ref">Référence </label><input type="text" name="ref" class="form-control"><br>
    <label for="cat">Catégorie :</label><select class="custom-select" name="cat">
    <?php foreach($categorie as $key){ ?>
 
 <option value= "<?php echo $key->cat_id; ?>" ><?php echo $key->cat_nom; ?></option>

<?php } ?>
            </select><br>
    <label for="lib">Libellé </label><input type="text" name="lib" class="form-control"><br>
    <label for="photopro">Photo </label><input type="file" name="photopro" class="form-control"><br>
    <label for="desc">Description </label><textarea title="descriptionpro" name="desc" class="form-control" ></textarea><br>
    <label for="prix">Prix </label><input type="number" name="prix" class="form-control"><br>
    <label for="stock">Stock </label><input type="number" name="stock" class="form-control"><br>
    <label for="couleur">Couleur </label><input type="text" name="couleur" class="form-control"><br>

    <label for="bloqué">Produit bloqué  
    </label><br><input type="radio" name=bloqué value="oui"> Oui
    <input type="radio" name="bloqué" value="non" checked>Non <br><br>
    
    <button type="submit" id="submit" value="envoyer" class="alert alert-success" role="alert">Envoyer</button>               
               <button type="reset" value="annuler" class="alert alert-danger">Effacer</button>
 </div>
</fieldset>
<hr>
<br><br>


</form>





<?php
include("./footer.php")
?>