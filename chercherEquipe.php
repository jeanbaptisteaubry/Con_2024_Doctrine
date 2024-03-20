<?php

include_once "vendor/autoload.php";
include_once "bootstrap.php";

use App\Entity\Equipe;

$equipe = $entityManager->getRepository(Equipe::class)->findOneBy(['denomination' => 'France']);

echo "id " . $equipe->getId() . "\n";
echo "denomination " . $equipe->getDenomination() . "\n";


