<?php

namespace Src\Classes;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "customer")]
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap(["company" => "Src\Classes\Company", "customer" => "Src\Classes\Customer"])]

abstract class CustomerAbstract
{

    #[ORM\Id]
    #[ORM\GeneratedValue]

    #[ORM\Column(type: "integer")]
    protected $id;

    #[ORM\Column(type: "string")]
    protected $nom;

    #[ORM\Column(type: "integer")]
    protected $numeroChambre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getNumeroChambre(): ?int
    {
        return $this->numeroChambre;
    }

    public function setNumeroChambre(int $numeroChambre): void
    {
        $this->numeroChambre = $numeroChambre;
    }

    abstract public function effectuerReservation(): void;
}
