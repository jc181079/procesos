<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entesolicitante
 *
 * @ORM\Table(name="entesolicitante")
 * @ORM\Entity
 */
class Entesolicitante
{
    /**
     * @var string
     *
     * @ORM\Column(name="entenombre", type="text", nullable=true)
     */
    private $entenombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="identesolicitante", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identesolicitante;



    /**
     * Set entenombre
     *
     * @param string $entenombre
     *
     * @return Entesolicitante
     */
    public function setEntenombre($entenombre)
    {
        $this->entenombre = $entenombre;

        return $this;
    }

    /**
     * Get entenombre
     *
     * @return string
     */
    public function getEntenombre()
    {
        return $this->entenombre;
    }

    /**
     * Get identesolicitante
     *
     * @return integer
     */
    public function getIdentesolicitante()
    {
        return $this->identesolicitante;
    }
}
