<?php session_start();
var_dump($_SESSION);
 ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/Index.css">
    
</head>

        <!--Mon Body-->
   
                                <!--Colonnes Bootstrap-->

      <div class="container-fluid col-sm-8 col-md-10 col-lg-10 col-xl-10">
     
      <body>


             <!--Header-->
      <header>
            <img class="img-fluid" src="assets/img/jarditou_logo.jpg" alt="logo" title="logo"> </a> <!--Logo du site-->
            
      </header>

      <h2>Tout le jardin</h2>
      
            <!--Navbar-->
            <nav id="navbar" class="navbar navbar-expand-sm bg-dark navbar-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar"> 
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Accueil /</a></li>
                <li class="nav-item"><a class="nav-link" href="views/tableau.php">Produits /<a></li>
                <li class="nav-item"><a class="nav-link" href="views/contact.php">Contact /</a></li>
                <li class="nav-item"><a class="nav-link" href="views/ajout.php">Ajouter un produit /</a></li>
                
                <?php if(!isset($_SESSION['login'])){
                ?>
                <li class="nav-item"><a class="nav-link" href="./views/form_connexion.php">Connexion </a></li>
                <?php } 
                else{ ?>
                  <li class="nav-item"><a class="nav-link" href="./controller/log_out_controller.php">Déconnexion</a></li>
               <?php }
                  if ($_SESSION['role'] == 1){ 
                    ?>
                    <li class="nav-item"><a class="nav-link" href="./views/table_sessions.php">/ Espace membres</a></li>
                 <?php }
                ?>

              
               
              </ul>
            </div>
            </nav>

            <!--Logo promotion-->
              <img class="promotion" src="assets/img/promotion.jpg" alt="promotion" title="promotion">

        
              <!--Mon H1-->
        <h1>Accueil</h1>
<hr>
              <!--Article-->
<div class="row">
      <div class="col-md-8 col-12">
                     
              <section>
                  <article class="text-center">
                    <h2><b>L'entreprise</b></h2>
                    <p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
                    <p>Crée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
                    <p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie</p>
                  </article>
                  
                      <article class="text-center">
                        <h2><b>Qualité</b></h2>
                        <p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout votre projet.</p> 
                        <p>Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>
                        
                        <h2><b>Devis gratuit</b></h2>
                        <p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d’intervention. Vous souhaitez un devis ?<br><br> Nous vous le réalisons gratuitement.</p>
                      </article>
                    </section>
              
                    <!--Le Aside-->

        </div>
        <aside class="d-none d-sm-block col-sm-4">
          [COLONNE DROITE]
        </aside>
      </div>

    <hr>
    

                     <!--Bas de page-->
            
              <footer class="links">
                <ul>
                  <li class="li"><a href="#" >Mentions légales</a></li>
                  <li class="li"><a href="#">Horaires</a></li>
                  <li class="li"><a href="#">Plan du site</a></li>
                </ul>
  

              </footer>
           
              </div><!--fin du container-->













              
              <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    </html>