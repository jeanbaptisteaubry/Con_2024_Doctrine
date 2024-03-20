<?php
include_once "vendor/autoload.php";
include_once "bootstrap.php";

use App\Entity\Joueur;

$zizou = new Joueur("Zidane", "Zinedine", 10);
$entityManager->persist($zizou);
$entityManager->flush();
echo "Joueur " . $zizou->getId() . "\n";
