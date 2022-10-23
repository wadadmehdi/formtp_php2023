<?php
if (isset($_POST['submit'])) {
    if ((!isset($_POST['prenom'])) || (!isset($_POST['nom'])) ||
        (!isset($_POST['addresse'])) || (!isset($_POST['addressemail'])) ||
        (!isset($_POST['password']))
    ) {
        $error = "*" . "Veuillez remplir les champs requis";
    } else {
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $adresse = $_POST['addresse'];
        $addressemail = $_POST['addressemail'];
        $password = $_POST['password'];
    }
}
