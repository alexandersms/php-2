<?php

/* On crée un autoloader*/
//Definition de la fontion d'autoloading
function myAutoloader(string $className): void
{
    require 'src/Classes/' . $className . '.php';
}
// Enregistrement de la fonction d'autoloading
spl_autoload_register('myAutoloader');