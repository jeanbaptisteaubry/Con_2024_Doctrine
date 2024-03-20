<?php
namespace App\Entity;


 use Doctrine\Common\Collections\ArrayCollection;
 use Doctrine\Common\Collections\Collection;
 use Doctrine\ORM\Mapping\Column;
 use Doctrine\ORM\Mapping\Entity;
 use Doctrine\ORM\Mapping\GeneratedValue;
 use Doctrine\ORM\Mapping\Id;
 use Doctrine\ORM\Mapping\OneToMany;
 use Doctrine\ORM\Mapping\Table;

 #[Entity]
 #[Table(name: 'equipe')]
class Equipe
{
     #[Id, Column(type: 'integer'), GeneratedValue]//id : nom en bdd de la propriété, type : type de données
     private int|null $id = null;

     #[Column(type: 'string', length: 255)]
     private string $denomination;

     #[OneToMany(targetEntity: Joueur::class, mappedBy: 'equipe', indexBy: 'id')]
     private Collection $joueurs;

     public function __construct(string $denomination)
     {
         $this->denomination = $denomination;
         $this->joueurs = new ArrayCollection();
     }

     public function getId(): int|null
     {
         return $this->id;
     }

     public function getDenomination(): string
     {
            return $this->denomination;
     }

     /** @return array<int, Joueur> */
     public function getJoueurs(): array
     {
         return $this->joueurs->toArray();
     }

     public function addJoueur(Joueur $joueur): void
     {
         if(!$this->joueurs->contains($joueur)) {
             $this->joueurs[] = $joueur;
         }
     }


 }