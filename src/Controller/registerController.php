<?php
require dirname(__DIR__, 2) . '/autoload.php';
require dirname(__DIR__) . '/functions/form-functions.php';
// Verification formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errorMessageUsername = checkPostText("username", 128);
    $errorMessageEmail = checkPostText("email", 255);
    $errorMessagePassword = checkPostText("password", 128);

    if (empty($errorMessageUsername) && empty($errorMessageUsername) && empty($errorMessageUsername)) {

        $database = new Database();
        $database->connect();

        // On crée un utilisateur en local
        $user = new User();
        $user->setUsername($_POST['username']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $query = "INSERT INTO app_user (username, email, password)
                VALUES (".$user->getStrParamsSQL().")";
        //var_dump($query);
        $success = $database->exec($query);
        //var_dump($success);

    } else {
        var_dump("Problème");
    }
}