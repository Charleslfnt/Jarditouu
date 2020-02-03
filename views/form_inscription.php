<?php
include("./headerviews.php");
?>

<body>

    <h1>SIGN IN</h1>
    
<!--formulaire d'inscription-->
<form action="../../jarditou/controller/inscription_controller.php" method="POST">

         

<label for="Nom"></label>Nom : <input type="text" class="form-control btn btn-light" name="nom"></input>
<label for="prenom"></label>Prénom : <input type="text" class="form-control btn btn-light" name="prenom"></input>
<label for="email"></label>Émail : <input type="email" class="form-control btn btn-light" name="email"></input>
<label for="login"></label>Login : <input type="text" class="form-control btn btn-light" name="login">
<label for="password"></label>Password : <input type="password" class="form-control btn btn-light" name="password"><br> <br> 



<button type="submit" name="inscription" class="btn btn-info" >Sign in </button>

<br><br>



</form>


</body>

<?php
include("./footer.php");
?>
