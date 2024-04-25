<?php
// Reservation.php
namespace Src\Classes;


use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\ManyToOne(targetEntity: "Src\Classes\CustomerAbstract")]
    #[ORM\JoinColumn(nullable: false)]
    private $client;

    #[ORM\ManyToOne(targetEntity: Room::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $chambre;

    #[ORM\Column(type: "date")]
    private $dateDebut;

    #[ORM\Column(type: "date")]
    private $dateFin;

    public function getId()
    {
        return $this->id;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function getChambre()
    {
        return $this->chambre;
    }

    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function superviserEmploye(): void
    {

    }

    public function planifierEntretien(): void
    {

    }

    public function planifierEmploye(): void
    {

    }

    public function planifierHoraire(): void
    {

    }
}
