<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
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

    #[ManyToOne(targetEntity: Equipe::class, inversedBy: 'joueurs')]
    private Equipe $equipe;

    public function __construct(string $nom, string $prenom, int $maillot, Equipe $equipe)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->maillot = $maillot;
        $this->equipe = $equipe;
        $equipe->addJoueur($this);
    }

    public function getId(): int|null
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getMaillot(): int
    {
        return $this->maillot;
    }

    public function getEquipe(): Equipe
    {
        return $this->equipe;
    }





}