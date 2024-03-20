<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'joueur')]
class Joueur
{
    #[Id, Column(type: 'integer'), GeneratedValue]
    private int|null $id=null;

    #[Column(type: 'string', length: 255)]
    private string $nom;

    #[Column(type: 'string', length: 255)]
    private string $prenom;

    #[Column(type: 'integer')]
    private int $maillot;

}