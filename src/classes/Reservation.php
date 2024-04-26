<?php

namespace Src\Classes;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'reservations')]
class Reservation
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\Column(name: "arrival_date", type: "string")]
    private $arrivalDate;

    #[ORM\Column(name: "departure_date", type: "string")]
    private $departureDate;

    #[ORM\Column(name: "payment_method", type: "string")]
    private $paymentMethod;

    #[ORM\ManyToOne(targetEntity: Room::class, inversedBy: "reservations")]
    #[ORM\JoinColumn(name: 'id_room', referencedColumnName: 'id')]
    private $room;

    #[ORM\ManyToOne(targetEntity: CustomerAbstract::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'id_client', referencedColumnName: 'id')]
    private $client;




    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of idClient
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set the value of idClient
     */
    public function setIdClient($idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get the value of idRoom
     */
    public function getIdRoom()
    {
        return $this->idRoom;
    }

    /**
     * Set the value of idRoom
     */
    public function setIdRoom($idRoom): self
    {
        $this->idRoom = $idRoom;

        return $this;
    }

    /**
     * Get the value of arrivalDate
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Set the value of arrivalDate
     */
    public function setArrivalDate($arrivalDate): self
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Get the value of departureDate
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Set the value of departureDate
     */
    public function setDepartureDate($departureDate): self
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Get the value of paymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set the value of paymentMethod
     */
    public function setPaymentMethod($paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }
}