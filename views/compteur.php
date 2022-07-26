<?php

function Ajouter_vue(){
    $fichier= "../actions/compteur";
    $compteur=1;
    if(file_exists($fichier)){
        $compteur= (int)file_get_contents($fichier);
        $compteur++;
    }
    file_put_contents($fichier, $compteur);
}

function Nombre_vue(){
    $fichier= "../actions/compteur";
    return file_get_contents($fichier);
}