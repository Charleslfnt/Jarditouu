<?php
include("./headerviews.php");
?>

<body>

    <h1>LOG IN</h1>
    

<form action="../controller/session_controller.php" method="POST">

         


<label for="login"></label>Login : <input type="text" class="form-control btn btn-light" name="login">




            <label for="password"></label>Password : <input type="password" class="form-control btn btn-light" name="password"><br> <br> 



<button type="submit" class="btn btn-info" >Log in </button>



</form>


</body>

<?php
include("./footer.php");
?>
