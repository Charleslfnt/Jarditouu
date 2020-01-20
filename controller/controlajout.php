<?php


require("./connexiondb.php");

$db=connexionBase();

$controlRef = "/[\p{L}0-9 -]+/u";
$controlDate = "/([0-2][0-9]|(3)[0-1])(/)(((0)[0-9])|((1)[0-2]))(/)\d{4}$/";  
$controlPostalCode = "/[0-9]{5}+$/";
$controlStock = '/[0-9]/';
$controlPrix = "/[0-9]+(\.[0-9]{2})?$/";



if (empty($_POST["cat"])) {
    echo"Veuillez saisir la catégorie"."<br>";
 } else {
     echo $_POST["cat"]."<br>";
 }



if (empty($_POST["ref"]) || !preg_match($controlRef,$_POST["ref"])) {
   echo"Veuillez saisir la référence"."<br>";
} else {
    echo $_POST["ref"]."<br>";
}



if (empty($_POST["lib"])) { 
    echo "Veuillez saisir le libellé"."<br>"; 
} else {
    echo $_POST["lib"]."<br>";
}


/*if (empty($_POST["photopro"])) {
    echo"Veuillez mettre une photo"."<br>";
 } else {
     echo $_POST["photopro"]."<br>";
 }




if (empty($_POST["desc"])){  //description du produit
    echo"Veuillez saisir la description"."<br>"; 
} else {
    echo $_POST["desc"]."<br>";
}*/



if (empty($_POST["prix"]) || !preg_match($controlPrix, $_POST["prix"])){ // Prix de l'article 
    echo"Veuillez saisir le prix"."<br>"; 
} else {
    echo $_POST["prix"]."<br>";  //regex qui accepte chiffres uniquement
}



if (empty($_POST["stock"]) || !preg_match($controlStock,$_POST["stock"])){
    echo"Veuillez saisir le nombre de stock"."<br>"; 
} else {
    echo $_POST["stock"]."<br>";
}



if (empty($_POST["couleur"])){
    echo"Veuillez saisir la couleur"."<br>"; 
} else {
    echo$_POST["couleur"]."<br>";
}


$photo = $_FILES["fichier"]; // récup le fichier 

$aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");


$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
finfo_close($finfo);


$ref = $_POST["ref"]; //récupère les données saisies dans le champ référence
$cat = (int)($_POST["cat"]); //récupère les données saisies dans le champ catégorie / intval — Retourne la valeur numérique entière équivalente d'une variable

$img = $_POST["img"]; // recupère le nom que j'ai donné à l'image dans le formulaire

$img_name=basename($photo['name']);  //prend le vrai nom du fichier

$fichier_path = "../assets/img" .$img_name;



move_uploaded_file($img_name, $fichier_path);      //upload l'image 


$lib = $_POST["lib"];//récupère les données saisies dans le champ libellé
$desc = $_POST["desc"]; //récupère les données saisies dans le champ description
$prix = (int)$_POST["prix"]; //récupère les données saisies dans le champ Prix
$stock = (int)($_POST["stock"]); //récupère les données saisies dans le champ stock
$couleur = $_POST["couleur"]; //récupère les données saisies dans le champ couleur
/*$photo = $_POST["photopro"];*/ //récupère les données saisies dans le champ photo







$insert = $db->prepare 
(
    // crée une requète préparer 
 "INSERT INTO produits (pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_photo, pro_d_ajout) 
VALUES (:cat, :ref, :lib, :desc, :prix, :stock, :couleur, :format,  NOW())");


// ajoute les données envoyés en renommant le champs par sécurité
$insert->bindValue(":cat", $cat, PDO::PARAM_INT); /* insère la catégorie du produit et change le type de donnée en entier */
$insert->bindValue(":ref", $ref); /* insère la référence de produit  */
$insert->bindValue(":lib", $lib); /* insère le nom du produit */
$insert->bindValue(":desc", $desc); /* insère la description du produit */
$insert->bindValue(":prix", $prix, PDO::PARAM_INT); /* insère le prix du produit et change le type de donnée en entier */
$insert->bindValue(":stock", $stock, PDO::PARAM_INT); /* insère la quantité de produit et change le type de donnée en entier */
$insert->bindValue(":couleur", $couleur); /* insère la couleur du produit */
$insert->bindValue(":format",  $img_name); /* insère le format l'image */


$insert->execute(); 


var_dump($cat, $ref, $lib, $desc, $prix, $stock, $couleur);

var_dump($insert); // affiche si la base de données à été alimentée ou non, si message d'erreur, aller vérifier la requête 

var_dump($_POST);

//var_dump($img_name);

//var_dump($_POST["fichier"]);

//header('Location:../views/tableau.php');

?>
