<?php

namespace Src\Classes;

use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: "room")]

class Room
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\Column(name: "number_room", type: "integer")]
    private $numberRoom;

    #[ORM\Column(type: "string")]
    private $category;

    #[ORM\Column(type: "integer")]
    private $price;

    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'room')]
    private $reservations;

    #[ORM\ManyToOne(targetEntity: Hotel::class, inversedBy: 'rooms')] // Correction ici pour refléter la relation avec Hotel
    private $hotel;



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
     * Get the value of numberRoom
     */
    public function getNumberRoom()
    {
        return $this->numberRoom;
    }

    /**
     * Set the value of numberRoom
     */
    public function setNumberRoom($numberRoom): self
    {
        $this->numberRoom = $numberRoom;

        return $this;
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     */
    public function setCategory($category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }
}