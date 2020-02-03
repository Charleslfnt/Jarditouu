<!DOCTYPE html>
<html lang="en">
<?php require("../controller/connexiondb.php"); ?>

<head>
<?php 
include("./headerviews.php");
$db=connexionBase();
$pro_id = $_GET["pro_id"];
$requete = "SELECT * FROM produits WHERE pro_id=".$pro_id;
$result = $db->query($requete); // exécute une requête SQL, retourne un jeu de résultats en tant qu'objet PDOStatement
$product = $result->fetchObject();
?>

<title>Détail du produit</title>


</head>


<body> <!--body en mode container -->
   
<div class="container-fluid">
 <?php
 while  ($product){ 
    
?>
    

<header>
   <h1 class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">Description du produit <?= $product->pro_libelle;?></h1> 
</header>

<table>

<div class="row-xl-1 row-lg-1 row-md-1 row-sm-1 row-xs-1">

 </div>


<section class="row section-des">

   <article class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 description">

       <h2><?php echo $product->pro_libelle;?> <!--Marque-->


       <div> <!-- contenu des details de l'article -->

       <p>Id: <?php echo $product->pro_id;?></p> <!--id-->
    <img class="img-fluid" src="../assets/img/<?=$product->pro_photo?>"> <!--image-->
           <h4>Référence : <?php echo $product->pro_ref;?></h3> <br><!--Références-->
           <h4>Description : <?php echo $product->pro_description;?></h3> <br><!--description-->
           <h4>Prix : <?php echo $product->pro_prix;?></h3> <br><!--prix-->
           <h4>Date : <?php echo $product->pro_d_ajout;?></h3> <br> <!--date-->
           <h4>Couleur : <?php echo $product->pro_couleur;?></h3> <br> <!--couleur-->

       </div>
   </article>


</section>
<?php
break;   //arrête la boucle
}
?>

<?php if ($_SESSION['role'] == 1){ //ne fonctionne pas pour l'instant
?>
<a href="./form_modif.php?pro_id=<?=$product->pro_id?>"><button class="alert alert-warning" role="alert">Modifier</button></a> <br>
<a href="../controller/delete_controller.php?pro_id=<?=$product->pro_id;?>"><button class="alert alert-danger" role="alert">Supprimer</button></a>
<br><br>
<?php } ?>
</div>
<?php
include("./footer.php");
?>
</body>
</html>

