// SCRIPT MENU BURGER
// Récupération des variables
const toggle = document.querySelector('.toggle');
const body = document.querySelector('body');

// Ajouter un évènement sur le toggle
toggle.addEventListener('click', ()=>{
    // Création d'une classe lorque le menu est ouvert
    body.classList.toggle('open');
}) 

// SCRIPT CARROUSEL
// Initialisation des variables et récupération des éléments HTML
let nbr;
let position;
const container=document.getElementById("container");
const gauche=document.getElementById("gauche");
const droit=document.getElementById("droit");

document.body.onload = function(){
    nbr=6;
    position=0;

    // Modification largeur container*nbr images carrousel
    container.style.width=(1000*nbr)+"px";

    // Boucle intégration des images
    for(let i=1; i<=nbr; i++){
        div=document.createElement("div");
        div.className="photo";
        div.style.backgroundImage = "url('images/carrousel"+i+".svg')";
        // Rajout des div créés au conteneur
        container.appendChild(div);
    }
}

// Programmation des boutons
gauche.onclick=function(){
    if(position>-nbr+1){
        position--;
        container.style.transform="translate("+position*1000+"px)";
        container.style.transition="all 0.5s ease";
        afficherMasquer();
    }
}
droit.onclick=function(){
    if(position<0){
        position++;
        container.style.transform="translate("+position*1000+"px)";
        container.style.transition="all 0.5s ease";
        afficherMasquer();
    }
}
// Fonction afficher ou masquer les boutons
function afficherMasquer(){
    if(position==-nbr+1){
        gauche.style.visibility="hidden";
    }
    else{
        gauche.style.visibility="visible";
    }
    if(position===0){
        droit.style.visibility="hidden";
    }
    else{
        droit.style.visibility="visible";
    }
}

