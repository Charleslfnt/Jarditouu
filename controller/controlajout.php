<?php







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




$ref = $_POST["ref"]; //récupère les données saisies dans le champ référence
$cat = intval($_POST["cat"]); //récupère les données saisies dans le champ catégorie
$lib = $_POST["lib"];//récupère les données saisies dans le champ libellé
$desc = $_POST["desc"]; //récupère les données saisies dans le champ description
$prix = $_POST["prix"]; //récupère les données saisies dans le champ Prix
$stock = intval($_POST["stock"]); //récupère les données saisies dans le champ stock
$couleur = $_POST["couleur"]; //récupère les données saisies dans le champ couleur
/*$photo = $_POST["photopro"];*/ //récupère les données saisies dans le champ photo


function connexionBase()
{
   // Paramètre de connexion serveur
   $host = "localhost:3308";
   $login= "root";     // identifiant d'accès au serveur 
   $password="";    // mot de passe pour s'identifier au serveur
   $base = "Jarditou";    // la base de donnée
 
   try 
   {
        	
    $db = new PDO('mysql:host=localhost;dbname=jarditou;charset=utf8', 'root', ''); // connexion à la base de donnée, une fois la connexion établie, $db devient un objet
    return $db; // la connexion établie, :$db permet d'utiliser toutes les méthodes de la PDO (query(), prepare(), execute() . . .)
    } 
    catch (Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode() . '<br>';
        die('Connexion au serveur impossible.');
    } 
}
$db=connexionBase();
//requête avec les values de type variable entre côtes et double côtes 
$sql = "INSERT INTO produits (pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_photo, pro_d_ajout, pro_d_modif, pro_bloque) 
VALUES ($cat, '" .$ref. "', '" .$lib. "' , '" .$desc. "', '" .$prix. "', '" .$stock. "', '" .$couleur. "', null,  NOW(), null, null )";



$result = $db->query($sql); 



var_dump($result); // affiche si la base de données à été alimentée ou non, si message d'erreur, aller vérifier la requête 
var_dump($ajout, $cat, $ref, $lib, $prix, $stock ); //affiche les informationss

header('Location:../views/tableau.php');

?>
