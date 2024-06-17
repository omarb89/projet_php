<?php

namespace Src\Classes;

use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]

class Company extends CustomerAbstract
{


    #[ORM\Column(type: 'string')]
    private $siren;



    /**
     * Set the value of siren
     */
    public function setSiren($siren)
    {
        $this->siren = $siren;

        return $this;
    }
}
