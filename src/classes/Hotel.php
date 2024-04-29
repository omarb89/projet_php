<?php
namespace Src\Classes;

use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: "hotels")]

class Hotel
{
  #[ORM\Id]
  #[ORM\GeneratedValue(strategy: "AUTO")]
  #[ORM\Column(type: "integer")]
  private $id;

  #[ORM\Column(type: "string", length: 255)]
  private $name;

  #[ORM\Column(type: "string", length: 255)]
  private $address;

  #[ORM\Column(type: "string", length: 255)]
  private $phoneHotel;

  #[ORM\Column(type: "string")]
  private $city;

  #[ORM\OneToMany(targetEntity: Room::class, mappedBy: 'hotel')]
  private $rooms;

  // Méthodes getters et setters

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName(string $name)
  {
    $this->name = $name;
    return $this;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setPhoneHotel(string $phoneHotel)
  {
    $this->phoneHotel = $phoneHotel;
    return $this;
  }
  public function getPhoneHotel()
  {
    return $this->phoneHotel;
  }

  public function setAddress(string $address)
  {
    $this->address = $address;
    return $this;
  }
  public function getCity()
  {
    return $this->city;
  }
  public function setCity(string $city)
  {
    $this->city = $city;
    return $this;
  }

}
;
