<?php

namespace Src\Classes;

use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]

class Customer extends CustomerAbstract
{


    #[ORM\Column(name: 'first_name', type: 'string')]
    private $firstName;

    #[ORM\Column(name: 'id_number', type: 'string')]
    private $idNumber;


    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     */
    public function setFirstName($firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of idNumber
     */
    public function getIdNumber()
    {
        return $this->idNumber;
    }

    /**
     * Set the value of idNumber
     */
    public function setIdNumber($idNumber): self
    {
        $this->idNumber = $idNumber;

        return $this;
    }
}
