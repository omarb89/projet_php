<?php

namespace Src\Classes;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "client")]
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap(["company" => Company::class, "customer" => Customer::class])]

abstract class CustomerAbstract
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    protected $id;


    #[ORM\Column(type: "string")]
    protected $name;


    #[ORM\Column(name: "number_room", type: "integer")]
    protected $numberRoom;

    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'client')]
    private $reservations;

    // Getters and setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getNumberRoom()
    {
        return $this->numberRoom;
    }

    public function setNumberRoom($numberRoom): self
    {
        $this->numberRoom = $numberRoom;
        return $this;
    }
}
