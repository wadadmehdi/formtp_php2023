<?php
// déclaration de la fonction
function afficherProduits($produit = ["msg" => "Aucun produit sélectionné "])
{
    foreach ($produit as $key => $valeur) {
        echo $key . ":" . $valeur . "<br>";
    }
};
// appel à la fonction pour l'imprimante
$imprimante = [
    "nom" => "imprimantes", "quantité" => 10, "prix" => 300,
    "rupture" => "Rupture de stock"
];
afficherProduits($imprimante);
echo '<hr>';
// appel à la fonction sans aucun produit, la valeur par défaut sera utilisé
afficherProduits();
