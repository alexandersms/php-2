<?php
require dirname(__DIR__) . '/autoload.php';

// Creation d'un vehicule
/*
$vehicle = new Vehicle("Renault", "Essence", 4);

$vehicle->go(15);
$vehicle->go(17);

var_dump($vehicle);

$vehicle2 = new Vehicle("Mercedes", "Diesel", 2);

$vehicle2->go(15);
$vehicle2->go(17);

var_dump($vehicle2);
*/

/*

$airbusa380 = new Plane("Airbus", "Kérosène", 22);
$airbusa380->setMaxAlt(20000);
$airbusa380->go(100);
var_dump($airbusa380);


$titanic = new Boat("Paquebot", "Diesel", ["Anvers", "Boma", "Pointe-Noire"]);
$titanic->go(100);
var_dump($titanic);

$aeroport = new Aeroport();
//$garage->addVehicle($vehicle);
//$garage->addVehicle($vehicle2);
$aeroport->addVehicle($airbusa380);
$aeroport->addVehicle($titanic);
var_dump($aeroport);

*/

// Création de motos
$moto = new Moto('Triumph', 'essence');
$moto2 = new Moto('Suzuki', 'essence', 30000);
var_dump($moto);
var_dump($moto2);
// Création de voiture
$car = new Car('207CC', 'essence', 250000);
$car2 = new Car('Mini Cooper', 'essence');
var_dump($car);
var_dump($car2);
/*************************************************************/
/*****      On fait avancer les véhicules roulants      ******/
/*************************************************************/
$moto->move(25);
$moto2->move(1000);
$car->move(30);
$car2->move(555);

$avion =  new Plan('Aibus A330', 'kerosène', 9000);
$avion2 =  new Plan('Boeing 737', 'kerosène');
var_dump($avion);
var_dump($avion2);

$helico = new Supercopter('Apache', 'Kerosene');
$helico2 = new Supercopter('Zer', 'Kerosene', '5000');
var_dump($helico);
var_dump($helico2);

$avion->move(5000);
$avion2->move(10000);
$helico->move(2000);
$helico2->move(5000);