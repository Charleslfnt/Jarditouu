<?php 
include("./headerviews.php");     


?>

<form action="../controller/login_controller.php" method="post"><br>

<label for="login"></label>Login : <input type="text" class="form-control btn btn-light" name="login"></input><br>

<label for="password"></label>Password : <input type="password" class="form-control btn btn-light" name="password"></input><br><br>

<button class="btn btn-success" name="connexion">Se connecter</button><br><br>






</form>

<h4>Pas encore inscrit ?</h4>
<br>
<a href="./form_inscription.php"><button class="btn btn-primary" name="sign-in">S'inscrire !</button></a>

<br><br><br>

<?php
include("./footer.php");
?>