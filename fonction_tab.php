<?php
function afficherUtilisateur()
{
    $user = [
        "nom" => "john", "prénom" => "Doe", "âge" => 40,
        "inscrit" => true
    ];
    foreach ($user as $key => $valeur) {
        echo $key . ": " . $valeur . "<br>";
    }
}

afficherUtilisateur();
