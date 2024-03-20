<?php
namespace App\Entity;

 use Doctrine\ORM\Mapping\Column;
 use Doctrine\ORM\Mapping\Entity;
 use Doctrine\ORM\Mapping\GeneratedValue;
 use Doctrine\ORM\Mapping\Id;
 use Doctrine\ORM\Mapping\Table;

 #[Entity]
 #[Table(name: 'equipe')]
class Equipe
{
     #[Id, Column(type: 'integer'), GeneratedValue]//id : nom en bdd de la propriété, type : type de données
     private int|null $id = null;

     #[Column(type: 'string', length: 255)]
     private string $denomination;

     public function __construct(string $denomination)
     {
         $this->denomination = $denomination;
     }

     public function getId(): int|null
     {
         return $this->id;
     }

     public function getDenomination(): string
     {
            return $this->denomination;
     }
}