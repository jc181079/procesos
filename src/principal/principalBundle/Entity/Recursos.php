<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recursos
 *
 * @ORM\Table(name="recursos")
 * @ORM\Entity
 */
class Recursos
{
    /**
     * @var string
     *
     * @ORM\Column(name="recursonombre", type="string", length=45, nullable=true)
     */
    private $recursonombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="idrecursos", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecursos;



    /**
     * Set recursonombre
     *
     * @param string $recursonombre
     *
     * @return Recursos
     */
    public function setRecursonombre($recursonombre)
    {
        $this->recursonombre = $recursonombre;

        return $this;
    }

    /**
     * Get recursonombre
     *
     * @return string
     */
    public function getRecursonombre()
    {
        return $this->recursonombre;
    }

    /**
     * Get idrecursos
     *
     * @return integer
     */
    public function getIdrecursos()
    {
        return $this->idrecursos;
    }
}
