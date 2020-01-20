var controlRef = document.getElementById('ref');
var controlLib = document.getElementById('lib');
var controlImg = document.getElementById('img');
var controlFichier = document.getElementById('fichier');
var controlDesc = document.getElementById('desc');
var controlPrix = document.getElementById('prix');
var controlStock = document.getElementById('stock');
var controlCouleur = document.getElementById('couleur');
var controlBloqué = document.getElementById('bloqué');

formvalid.addEventListener('click', validation);

function validation(event) { //ma fonction qui fait en sorte d'assurer que le champ est bien rempli

    if (controlRef.validity.valueMissing) { //renvoie true si l'élément n'a pas de valeur alors que le champ est requis
        event.preventDefault(); //indique si l'événement n'est pas traité explicitement.
        // missNom.textContent = "Veuillez saisir le champ";    //le message d'erreur qui apparaît en dessous du champ
        //  missNom.style.color = "red";    //couleur du message d'erreur
    } //else if (nomReg.test(nom.value) == false) {
        //event.preventDefault();
        // missNom.textContent = "caractères incorrect";  //indique si les caractères demandés sont incorrect
        // missNom.style.color = "red"; 
    //}

    if (controlLib.validity.valueMissing) {
        event.preventDefault();
        //  missPrenom.textContent = "Veuillez saisir le champ";
        //  missPrenom.style.color = "red";
    }// else if (prenomReg.test(prenom.value) == false) {
      //  event.preventDefault();
        //  missPrenom.textContent = "caractères incorrect";
        //  missPrenom.style.color = "red"; 
    //}


        if (ControlImg.validity.valueMissing) {
            event.preventDefault();
            missBirthdate.textContent = "Veuillez saisir le champ";
            missBirthdate.style.color = "red";
        } //else if (birthDateReg.test(birthDate.value) == false) {
        // event.preventDefault();
        // missBirthdate.textContent = "caractères incorrect";
        // missBirthdate.style.color = "red"; 
        //}


        if (controlFichier.validity.valueMissing) {
            event.preventDefault();
            //   missCp.textContent = "Veuillez saisir le champ";
            //   missCp.style.color = "red";
        }

        if (controlDesc.validity.valueMissing) {
            event.preventDefault();
            //   missAdresse.textContent = "Veuillez saisir le champ";
            //    missAdresse.style.color = "red";
        }

        if (controlPrix.validity.valueMissing) {
            event.preventDefault();
            //   missVille.textContent = "Veuillez saisir le champ";
            //   missVille.style.color = "red";
        }

        if (controlStock.validity.valueMissing) {
            event.preventDefault();
            //   missEmail.textContent = "Veuillez saisir le champ";
            //   missEmail.style.color = "red";
        } //else if (emailReg.test(email.value) == false) {
            event.preventDefault();
            //   missEmail.textContent = "caractères incorrect";
            //  missEmail.style.color = "red"; 
        //}

        if (controlCouleur.validity.valueMissing) {
            event.preventDefault();
            // missQuestion.textContent = "Veuillez formuler votre question";
            // missQuestion.style.color = "red";
        }

        if (controlBloqué.checked == false) {
            event.preventDefault();
            // missCheck.textContent = "Veuillez accepter le traitement du formulaire";
            // missCheck.style.color = "red";
        }
    };