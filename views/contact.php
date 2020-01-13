<?php
include("./headerviews.php");
?>

            <!--Le H1-->
             <h1 class="formh1">Formulaire</h1>

              <!--Partie formulaire-->
              <div class="formulaire_contact">

              <form action="../controller/post.php"  method="POST"> <!--formulaire avec le lien de destination-->

    
                <fieldset> <!--bloc de formulaire-->
                                               <legend>Coordonnées</legend>
                             <div class="form-group">
                             <!--fieldset1-->
                             <label for="nom">Nom* : </label><input class="form-control" type="text" id="nom" name="nom" title="entrez votre nom"required> 
                             <span id="missNom"></span> <br>
                            
                             <label for="prenom">Prénom* : </label><input class="form-control" type="text" id="prenom" name="prenom"  title="entrez votre prénom" required>
                             <span id="missPrenom"></span><br>

      <!--Boutons radio-->   <label for="sexe">Sexe* : <br><input type="radio" id="sexeF" name="sexe" value="Féminin" checked> Féminin
                             <input type="radio" id="sexeM" name="sexe" value="Masculin" > Masculin 
                             <input type="radio" id="sexeA" name="sexe" value="Autre" > Autre </label><br><br>
        
                             <label for="ddn">Date de naissance* : </label><input class="form-control" type="date" id="birthdate" name="ddn"  title="entrez votre date de naissance" required>
                             <span id="missBirthdate"></span><br>
                             <label for="cp">Code postal* : </label><input class="form-control" type="text" maxlength="5" name="cp" id="cp"> 
                             <span id="missCp"></span><br>
                             <label for="adresse">Adresse* : </label><input class="form-control" type="text" name="adresse" id="adresse"> 
                             <span id="missAdresse"></span><br>
                             <label for="ville">Ville* : </label><input class="form-control" type="text" name="ville" id="ville"> 
                             <span id="missVille"></span><br>
                             <label for="email*">Émail* : </label><input class="form-control" type="email" name="email" id="email"  title="insérez votre email" required>
                             <span id="missEmail"></span><br>
                             </div>
                             </fieldset>
                
                <!--fieldset2-->
                <fieldset>
                            <legend>Votre demande</legend>
                    <label for="Sujet">Sujet* : </label><select id="sujet" name="sujet"  title="Selectionnez votre sujet">
                    <span id="sujet"></span>
                       
                        <option value="Mes commmandes">Mes commandes</option>
                        <option value="Réclamation">Réclamation</option>
                        <option value="Renseignement">Renseignement</option>
                    </select> <br><br>
        
                    <label for="question">Votre question* : </label><textarea class="form-control" id="question" name="question" rows="3" cols="50"  title="Écrivez votre question" required></textarea>
                    <span id="missQuestion"></span><br>
               </fieldset>
        
               <input type="checkbox" id="accepter" name="confirm"  title="veuillez cocher cette case" ><label for="accepte">J'accepte le traitement informatique de ce formulaire</label><br>
               <span id="missCheck"></span> <br>
               <button type="submit" id="submit" value="envoyer" class="alert alert-success">Envoyer</button>               
               <button type="reset" value="annuler" class="alert alert-danger">Effacer</button>
        
            </form>
<p style="color: red" id="erreur"></p>
           
          </div>
  
    <br>
 
<!--Bas de page-->
    <footer class="links">
            <ul>
                <li class="li"><a href="#" >Mentions légales</a></li>
                <li class="li"><a href="#">Horaires</a></li>
                <li class="li"><a href="#">Plan du site</a></li>
            </ul>
</footer>
</div> <!--Div de fin du container-->



<script src="../assets/js/Contactform"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>