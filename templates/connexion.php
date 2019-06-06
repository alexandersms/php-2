<?php 
require dirname(__DIR__) . '/src/Controller/indexController.php';
require 'inc/header.php'; 
?>

<main class="container">
    <h1 class="mt-2">Connexion</h1>
        
    <form>
        <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Entrez votre adresse mail">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Saisir votre mot de passe">
        </div>
        <button type="submit" class="btn btn-success">Se connecter</button>
    </form>

</main>

<?php
require("inc/footer.php");
?>