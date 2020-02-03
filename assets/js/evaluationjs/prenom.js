var saisie    = prompt("saisissez un prénom figurant dans le tableau"); //saisir le prénom

var tab       = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];

var recherche = tab.indexOf(saisie); // la recherche de l'index du prénom qui a été saisi

if (recherche != -1 ){ // si la recherche ne renvoi pas -1 donc le prénom a été trouvé
    var test = tab.splice(recherche, 1);   // on supp le prénom de la var recherche et on indique une seule suppression
    tab.push(" ");
    //tab.splice(tab.length-1, 1, ''); //permet d'afficher la case vide à la fin du tableau
    console.log(tab);

}else {
    console.log(saisie + " n'existe pas dans le tableau");
}



