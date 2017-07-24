<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estatus
 *
 * @ORM\Table(name="estatus")
 * @ORM\Entity
 */
class Estatus
{
    /**
     * @var string
     *
     * @ORM\Column(name="estatusnombre", type="string", length=45, nullable=true)
     */
    private $estatusnombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestatus", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestatus;



    /**
     * Set estatusnombre
     *
     * @param string $estatusnombre
     *
     * @return Estatus
     */
    public function setEstatusnombre($estatusnombre)
    {
        $this->estatusnombre = $estatusnombre;

        return $this;
    }

    /**
     * Get estatusnombre
     *
     * @return string
     */
    public function getEstatusnombre()
    {
        return $this->estatusnombre;
    }

    /**
     * Get idestatus
     *
     * @return integer
     */
    public function getIdestatus()
    {
        return $this->idestatus;
    }
}
