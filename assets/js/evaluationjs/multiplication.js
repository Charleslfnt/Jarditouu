var nombre = parseInt(prompt("entrez le chiffre à multiplier"));
console.log("Table de multiplication");

function tableMultiplication(multi) {
    for (i=1; i<=10; i++) {      //commence à un puis va jusqu'à dix 
        resultat = nombre * i ;      // nombre est multiplié par les 10 chiffres de i donc de zéro à dix

        console.log(nombre + " X " + i + " = " + resultat);  // donc  nombre X les chiffres de i 1 à 10 puis le résultat
    }
}
tableMultiplication();                  //Appel de ma fonction