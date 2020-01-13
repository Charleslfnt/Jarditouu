var formvalid = document.getElementById('submit');   // les variables qui reprennent les éléments du html par l'ID
var nom       = document.getElementById('nom');
var prenom    = document.getElementById('prenom');
var birthDate = document.getElementById('birthdate');
var cp        = document.getElementById('cp');
var adresse   = document.getElementById('adresse');
var ville     = document.getElementById('ville');
var email     = document.getElementById('email');
var textarea  = document.getElementById("question");
var checkBox  = document.getElementById("accepter");

// regex qui permet de controler les caractères     
var nomReg       = /^[A-Za-z][A-Za-z\é\è\ê\-]+$/;
var prenomReg    = /^[A-Za-z][A-Za-z\é\è\ê\-]+$/;
var emailReg     = /^[a-zA-ZéèîïÊËÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÊËÎÏ][a-zéèêàçîï])?/;                                           //le + indique que le caractère doit être present une fois
//var birthDateReg = /^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/; //le $ indique ou doit finir la chaine de caractère à contrôler

formvalid.addEventListener('click', validation); /*AddEventListener qui va créer un « gestionnaire d’écoute » 
sur l’objet ciblé, c’est-à-dire créer connecter cet objet à l’évènement concerné.*/ 

function validation(event){      //ma fonction qui fait en sorte d'assurer que le champ est bien rempli

    if (nom.validity.valueMissing){ //renvoie true si l'élément n'a pas de valeur alors que le champ est requis
        event.preventDefault(); //indique si l'événement n'est pas traité explicitement.
        missNom.textContent = "Veuillez saisir le champ";    //le message d'erreur qui apparaît en dessous du champ
        missNom.style.color = "red";    //couleur du message d'erreur
    }  else if (nomReg.test(nom.value) == false) {
        event.preventDefault();
        missNom.textContent = "caractères incorrect";  //indique si les caractères demandés sont incorrect
        missNom.style.color = "red"; 
    }

    if (prenom.validity.valueMissing){
        event.preventDefault();
        missPrenom.textContent = "Veuillez saisir le champ";
        missPrenom.style.color = "red";
    }  else if (prenomReg.test(prenom.value) == false) {
        event.preventDefault();
        missPrenom.textContent = "caractères incorrect";
        missPrenom.style.color = "red"; }
   

    if (birthDate.validity.valueMissing){
        event.preventDefault();
        missBirthdate.textContent = "Veuillez saisir le champ";
        missBirthdate.style.color = "red";
    }  //else if (birthDateReg.test(birthDate.value) == false) {
       // event.preventDefault();
       // missBirthdate.textContent = "caractères incorrect";
       // missBirthdate.style.color = "red"; 
    //}
    

    if (cp.validity.valueMissing){
        event.preventDefault();
        missCp.textContent = "Veuillez saisir le champ";
        missCp.style.color = "red";
    } 

    if (adresse.validity.valueMissing){
        event.preventDefault();
        missAdresse.textContent = "Veuillez saisir le champ";
        missAdresse.style.color = "red";
    }

    if (ville.validity.valueMissing){
        event.preventDefault();
        missVille.textContent = "Veuillez saisir le champ";
        missVille.style.color = "red";
    }

    if (email.validity.valueMissing){
        event.preventDefault();
        missEmail.textContent = "Veuillez saisir le champ";
        missEmail.style.color = "red";
    } else if (emailReg.test(email.value) == false) {
        event.preventDefault();
        missEmail.textContent = "caractères incorrect";
        missEmail.style.color = "red"; 
    }

    if (textarea.validity.valueMissing){
        event.preventDefault();
        missQuestion.textContent = "Veuillez formuler votre question";
        missQuestion.style.color = "red";
    }
    
    if (checkBox.checked == false){  //si la checkbox n'est pas cochée
        event.preventDefault();
        missCheck.textContent = "Veuillez accepter le traitement du formulaire";
        missCheck.style.color = "red";
    }
}


  
  