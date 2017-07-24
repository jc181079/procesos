<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoadjudicacion
 *
 * @ORM\Table(name="tipoadjudicacion")
 * @ORM\Entity
 */
class Tipoadjudicacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipoadj", type="string", length=45, nullable=true)
     */
    private $tipoadj;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipoadjudicacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipoadjudicacion;



    /**
     * Set tipoadj
     *
     * @param string $tipoadj
     *
     * @return Tipoadjudicacion
     */
    public function setTipoadj($tipoadj)
    {
        $this->tipoadj = $tipoadj;

        return $this;
    }

    /**
     * Get tipoadj
     *
     * @return string
     */
    public function getTipoadj()
    {
        return $this->tipoadj;
    }

    /**
     * Get idtipoadjudicacion
     *
     * @return integer
     */
    public function getIdtipoadjudicacion()
    {
        return $this->idtipoadjudicacion;
    }
}
