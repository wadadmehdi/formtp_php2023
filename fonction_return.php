<?php
// déclaration de la fonction
function afficherProduits($produit = ["msg" => "Aucun produit
sélectionné "])
{
    $retour = "";
    foreach ($produit as $key => $valeur) {
        $retour .= $key . ": " . $valeur . "<br>";
    }
    // retour de la fonction
    return $retour;
}
// appel à la fonction pour l'imprimante
$imprimante = [
    "nom" => "imprimantes", "quantité" => 10, "prix" => 300,
    "rupture" => "rupture de stock"
];
//affichage du résultat de la fonction dans un message d'un echo :
echo "Résultat de la commande :<br>" . afficherProduits($imprimante);
