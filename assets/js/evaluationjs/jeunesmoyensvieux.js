var age        = parseInt(prompt("Saisir âge"));
var jeunes     = 0 ;
var moyens     = 0 ;
var vieux      = 0 ;
var centenaire = 0 ;

while ( age < 100 || age > 120) {  //on demande l'age tant que la condition est remplie
    

if (age < 20) {   //moins de 20 = jeunes
    jeunes ++ ;
    age = parseInt(prompt("Saisir âge"));

} 

if (age > 40  && age <= 99) { //entre 40 et 99 ans = vieux
    vieux ++ ;
    age = parseInt(prompt("Saisir âge"));

}

if (age >= 20 && age <= 40) { //entre 20 et 40 = moyens
    moyens ++ ;
        age = parseInt(prompt("Saisir âge"));
}

if (age > 120) {
  alert("Je ne pense pas que la vie coule encore dans cette personne;)");
    age = parseInt(prompt("Saisir âge"));
}



if (age >= 100 && age<= 120 ) { //100 ans et plus = centenaire
    vieux ++;
    centenaire ++ ;
    alert("il y a " + jeunes + " personnes âgé de moins de 20 ans");
    alert("il y a " + moyens + " personnes âgé entre 20 et 40 ans");
    alert("il y a " + vieux + " personnes âgé de plus de 40 ans dont " + centenaire + " centenaire");
   
}}
