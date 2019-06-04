<?php

require 'form-functions.php';
// Verification formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errorMessageUsername = checkPostText("username", 128);
    $errorMessageEmail = checkPostText("email", 255);
    $errorMessagePassword = checkPostText("password", 128);

    if (empty($errorMessageUsername) && empty($errorMessageUsername) && empty($errorMessageUsername)) {
        var_dump("On peut inscrire l'utilisateur");
    } else {
        var_dump("Problème");
    }
}