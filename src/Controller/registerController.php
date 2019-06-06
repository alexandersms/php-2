<?php
require dirname(__DIR__, 2) . '/autoload.php';

// Verification formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errorMessageUsername = FormValidator::checkPostText("username", 128);
    $errorMessageEmail = FormValidator::checkPostText("email", 255);
    $errorMessagePassword = FormValidator::checkPostText("password", 128);

    if (empty($errorMessageUsername) && empty($errorMessageUsername) && empty($errorMessageUsername)) {

        $database = new Database();
        //$database->connect();

        // On crée un utilisateur en local
        $user = new User($_POST['username'], $_POST['email'], $_POST['password']);
        //$user->setUsername();
        //$user->setEmail($_POST['email']);
        //$user->setPassword($_POST['password']);
        $query = "INSERT INTO app_user (username, email, password)
                VALUES (".$user->getStrParamsSQL().")";
        //var_dump($query);
        $success = $database->exec($query);
        //var_dump($success);

    } else {
        var_dump("Problème");
    }
}