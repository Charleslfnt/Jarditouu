<?php session_start(); 
var_dump($_SESSION);

?>
<head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/Index.css">
    
</head>

<div class="container-fluid col-sm-8 col-md-10 col-lg-10 col-xl-10">
        <!--Mon Body-->
    <body>
                                <!--Colonnes Bootstrap-->

     

      


      <!--Header-->
      <header>
            <img class="img-fluid" src="../assets/img/jarditou_logo.jpg" alt="logo" title="logo"> </a> <!--Logo du site-->
            
      </header>
        <h2>Tout le jardin</h2>
      
            <!--Navbar-->
            <nav id="navbar" class="navbar navbar-expand-sm bg-dark navbar-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar"> 
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="../index.php">Accueil /</a></li>
                <li class="nav-item"><a class="nav-link" href="tableau.php">Produits /<a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact /</a></li>
                <li class="nav-item"><a class="nav-link" href="ajout.php">Ajouter un produit /</a></li>
             
                <?php if(!isset($_SESSION['login'])){
                ?>
                <li class="nav-item"><a class="nav-link" href="./form_connexion.php">Connexion </a></li>
                <?php } 
                else{ ?>
                  <li class="nav-item"><a class="nav-link" href="../controller/log_out_controller.php">Déconnexion</a></li>
               <?php } 
                  if ($_SESSION['role'] == 1){ 
                    ?>
                    <li class="nav-item"><a class="nav-link" href="./table_sessions.php">/ Espace membres</a></li>
                  <?php }
                ?>
        
              </ul>
            </div>
            </nav>

            <!--Logo promotion-->
              <img class="promotion" src="../assets/img/promotion.jpg" alt="promotion" title="promotion">
</html>