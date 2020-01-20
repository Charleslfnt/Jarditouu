<?php
include("./headerviews.php");


require("../controller/connexiondb.php");
$db=connexionBase();
$requete = "SELECT * FROM categories";

$result = $db->query($requete); //Exécute une requête SQL, retourne un jeu de résultats en tant qu'objet PDOStatement
$categorie = $result->fetchall(PDO::FETCH_OBJ); 
?>

 
<body>

<h1>Ajouter un produit</h1>

<form action="../controller/controlajout.php" method="POST" enctype="multipart/form-data"> 
    
<fieldset>
                <legend>Saisissez les informations</legend>
    <div class="formulaire-ajout">
    <label for="ref">Référence </label><input type="text" name="ref" class="form-control"><br>
    <label for="cat">Catégorie :</label>
    <select name="cat" class="form-control">
    <?php foreach($categorie as $key){ ?>
 
 <option value= "<?php echo $key->cat_id; ?>" ><?php echo $key->cat_nom; ?></option>

<?php } ?>
    </select>

    
    <label for="lib">Libellé </label><input type="text" name="lib" id="lib"class="form-control"><br>
<label for="nomphoto">Nom de la photo : </label>
    <input type="text" name="img" id="img" class="form-control">
    <label for="photo">Photo : </label>
    <input type="file" name="fichier" id="fichier" class="form-control"><br><br>
    <label for="desc">Description </label><textarea title="descriptionpro" name="desc" id="id" class="form-control" ></textarea><br>
    <label for="prix">Prix </label><input type="number" name="prix" id="prix" class="form-control"><br>
    <label for="stock">Stock </label><input type="number" name="stock" id="stock" class="form-control"><br>
    <label for="couleur">Couleur </label><input type="text" name="couleur" id="couleur"  class="form-control"><br>

    <label for="bloqué">Produit bloqué  
    </label><br><input type="radio" name="bloqué" id="bloqué" value="oui"> Oui
    <input type="radio" name="bloqué" value="non" checked>Non <br><br>
    <button type="submit" id="submit" value="envoyer" class="alert alert-success" role="alert">Envoyer</button>               
               <button type="reset" value="annuler" class="alert alert-danger">Effacer</button>
 </div>
</fieldset>
<br><br>


</form>


<script src="../assets/js/ajout"></script>
</body>
<?php
include("./footer.php")
?>



