var PU     = parseInt(prompt("saisir le prix de l'article"));
var QTECOM = parseInt(prompt("le nombre d'articles"));
var PORT   = 0; //frais de port
var REM    = 0; // remise
var PAP    = PU * QTECOM ; //prix total sans les frais de port moins la remise

if ( PU == 0 || QTECOM == 0) {
    alert("Merci de payer des frais de port sans aucun article")
}

//calcul de la remise
if (PAP >= 100 && PAP <= 200) //si le prix est entre 100 et 200 alors remise de 5%
{
    REM = 0.05 ;
} else if (PAP > 200) // si plus de 200 alors remise de 10%
{
        REM = 0.10 ;
} 

var moinsRem = PAP * REM; //prix article + quantité / la remise /

var newPap   = PAP - moinsRem; // calcule le prix des articles moins la remise

var portDeux = newPap * 0.02; //calcule 2% du pris des articles moins la remise

//calcul des frais de port

if (newPap > 500){ // si le total est superieur a 500, frais de port 0
    PORT = 0;
} else {  // sinon frais de port = 2% de l'article
    PORT = portDeux;
} 
 if (newPap < 500 && PORT < 6){ //  si prix - 500 et port - 6 alors port = 6
    PORT = 6;
}

 if (newPap < 500){ //Si le prix total moins la remise est égal à moins de 500 alors frais de port
    PORT = PORT ;
}
var prixapayer = newPap + PORT; //  le prix des articles, de la remise + les frais de port



alert("La remise est de " + REM +"%");
alert("le total entre PU QTECOM et RM = " + newPap)
alert("les frais de port sont de " + PORT + "€");
alert("le total est de " + prixapayer + "€");


