<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoproceso
 *
 * @ORM\Table(name="tipoproceso")
 * @ORM\Entity
 */
class Tipoproceso
{
    /**
     * @var string
     *
     * @ORM\Column(name="tiponombre", type="string", length=100, nullable=true)
     */
    private $tiponombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipoproceso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipoproceso;



    /**
     * Set tiponombre
     *
     * @param string $tiponombre
     *
     * @return Tipoproceso
     */
    public function setTiponombre($tiponombre)
    {
        $this->tiponombre = $tiponombre;

        return $this;
    }

    /**
     * Get tiponombre
     *
     * @return string
     */
    public function getTiponombre()
    {
        return $this->tiponombre;
    }

    /**
     * Get idtipoproceso
     *
     * @return integer
     */
    public function getIdtipoproceso()
    {
        return $this->idtipoproceso;
    }
}
