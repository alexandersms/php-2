<?php 
require dirname(__DIR__) . '/src/Controller/registerController.php';
require 'inc/header.php'; 
?>

<main class="container">

    <h1>Inscription</h1>


        <?php if(isset($success) && $success === 1) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Utilisateur inscrit : Bonjour <?= $user -> getUsername(); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>


    <form method="post">

        <?php  // createInputText('name', 255, "Nom") ?>

        <div class="form-group">
            <label for="username">Nom de l'utilisateur</label>
            <input type="text"
                   class="form-control <?= (isset($errorMessageUsername) && !empty($errorMessageUsername)) ? 'is-invalid' : '' ?>"
                   id="username" name="username" value="<?= $_POST['username']  ?? '' ?>">
            <div class="invalid-feedback"><?= $errorMessageUsername ?? "" ?></div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email"
                   class="form-control <?= (isset($errorMessageEmail) && !empty($errorMessageEmail)) ? 'is-invalid' : '' ?>"
                   id="email" name="email" value="<?= $_POST['email']  ?? '' ?>">
            <div class="invalid-feedback"><?= $errorMessageEmail ?? "" ?></div>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password"
                   class="form-control <?= (isset($errorMessagePassword) && !empty($errorMessagePassword)) ? 'is-invalid' : '' ?>"
                   id="password" name="password" value="<?= $_POST['password']  ?? '' ?>">
            <div class="invalid-feedback"><?= $errorMessagePassword ?? "" ?></div>
        </div>

        <input type="submit" value="Enregistrer" class="btn btn-outline-success">

    </form>


</main>


<?php
require("inc/footer.php");
?>