<?php
include_once "vendor/autoload.php";
include_once "bootstrap.php";

use App\Entity\Equipe;

$EDF = new Equipe("France");
$entityManager->persist($EDF);
$entityManager->flush();
echo "Equipe " . $EDF->getId() . "\n";
