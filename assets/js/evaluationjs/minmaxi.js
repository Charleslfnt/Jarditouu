var nombre = null;    //null indique qu'aucune valeur n'est présente
var somme = 0;
var i = 0;
var moyenne = null;


nombre = parseInt(window.prompt("saisissez un nombre entier"));
var maxi = nombre;

var mini = nombre;

while (nombre != 0){  // demande un nombre tant que zéro n'est pas entré
    somme =somme + nombre;
    i++;
    if (nombre > maxi){    // le nombre superieur sera dans max
        maxi = nombre ;
    } if (nombre < mini){  // si le nombre est inférieur au nombre qui est dans max il sera dans min
        mini = nombre ;
    }
    nombre = parseInt(window.prompt("saisissez un nombre entier")); //en dehors du if pour qu'il ne compte pas le zéro à l'intérieur
}

moyenne = somme / i;
console.log("la moyenne est " + moyenne);
console.log("le minimum est " + mini);
console.log("le maximum est " + maxi);
