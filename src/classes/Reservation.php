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

    #[ORM\Column(name: "email", type: "string")]
    private $email;

    #[ORM\Column(name: "phone", type: "string")]
    private $phone;

    #[ORM\Column(name: "services", type: "string")]
    private $services;


    #[ORM\Column(name: "total_price", type: "integer")]
    private $totalPrice;


    #[ORM\ManyToOne(targetEntity: Room::class, inversedBy: "reservations")]
    #[ORM\JoinColumn(name: 'id_room', referencedColumnName: 'id')]
    private $room;

    #[ORM\ManyToOne(targetEntity: CustomerAbstract::class, inversedBy: 'reservations', cascade: ['persist'])]
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

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }
    public function getServices()
    {
        return $this->services;
    }

    public function setServices($services)
    {
        $this->services = $services;

        return $this;
    }


    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function setTotalPrice($totalPrice): self
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    /**
     * Get the value of room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set the value of room
     */
    public function setRoom($room): self
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get the value of client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     */
    public function setClient($client): self
    {
        $this->client = $client;

        return $this;
    }
}