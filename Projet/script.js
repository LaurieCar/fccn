/* // Récupération bouton menu
const menuButton = document.getElementById("btnopen");

// Ajouter événement sur l'icone burger
menuButton.addEventListener('click', ()=>{
    // Récupération id du menu de navigation
    const menuNav = document.getElementById("menu-nav");
    if(menuNav.style.display === "none"){
        menuNav.style.display = "block";
    }
    else{
        menuNav.style.display = "none";
    }
})

// Récupération bouton close
const btnClose = document.getElementById('btnClose');

// Evènement sur le bouton close
btnClose.addEventListener('click', ()=>{
    const menuNav = document.getElementById("menu-nav");
    if(menuNav.style.display === "block"){
        menuNav.style.display = "none";
    }
}) */ 

// SCRIPT CARROUSEL

document.body.onload = function(){
    nbr=3;
    position=0;
    // Récuperation des éléments HTML
    container=document.getElementById("container");
    gauche=document.getElementById("gauche");
    droit=document.getElementById("droit");
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
    if(position==0){
        droit.style.visibility="hidden";
    }
    else{
        droit.style.visibility="visible";
    }
}
/* // SCRIPT MENU NAVIGATION

// Récupération des variables
const toggle = document.querySelector('.toggle');
const body = document.querySelector('body');

// Ajouter un évènement sur le toggle
toggle.addEventListener('click', ()=>{
    // Création d'une classe lorque le menu est ouvert
    body.classList.toggle('open');
}) */
