<?php
// Customer.php
namespace Src\Classes;


use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]

class Customer extends CustomerAbstract
{

    #[ORM\Column(type: "string")]

    protected $prenom;


    #[ORM\Column(type: "string")]

    protected $numeroPieceIdentite;

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getNumeroPieceIdentite(): ?string
    {
        return $this->numeroPieceIdentite;
    }

    public function setNumeroPieceIdentite(string $numeroPieceIdentite): void
    {
        $this->numeroPieceIdentite = $numeroPieceIdentite;
    }

    public function effectuerReservation(): void
    {
    }
}
