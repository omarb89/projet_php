<?php

namespace Src\Classes;



use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]

class Company extends CustomerAbstract
{
    #[ORM\Column(type: "string")]
    protected $raisonSociale;


    #[ORM\Column(type: "string")]

    protected $numeroSIRET;

    public function getRaisonSociale(): string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(string $raisonSociale): void
    {
        $this->raisonSociale = $raisonSociale;
    }

    public function getNumeroSIRET(): ?string
    {
        return $this->numeroSIRET;
    }

    public function setNumeroSIRET(string $numeroSIRET): void
    {
        $this->numeroSIRET = $numeroSIRET;
    }

    public function effectuerReservation(): void
    {

    }
}
