<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disponibilidad
 *
 * @ORM\Table(name="disponibilidad", indexes={@ORM\Index(name="fk_disponibilidad_proceso_idx", columns={"proceso_idproceso"}), @ORM\Index(name="fk_disponibilidad_recursos1_idx", columns={"recursos_idrecursos"})})
 * @ORM\Entity
 */
class Disponibilidad
{
    /**
     * @var string
     *
     * @ORM\Column(name="partida", type="string", length=45, nullable=true)
     */
    private $partida;

    /**
     * @var string
     *
     * @ORM\Column(name="denominacion", type="string", length=100, nullable=true)
     */
    private $denominacion;

    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $monto;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddisponibilidad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddisponibilidad;

    /**
     * @var \principal\principalBundle\Entity\Recursos
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Recursos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recursos_idrecursos", referencedColumnName="idrecursos")
     * })
     */
    private $recursosrecursos;

    /**
     * @var \principal\principalBundle\Entity\Proceso
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Proceso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proceso_idproceso", referencedColumnName="idproceso")
     * })
     */
    private $procesoproceso;



    /**
     * Set partida
     *
     * @param string $partida
     *
     * @return Disponibilidad
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return string
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * Set denominacion
     *
     * @param string $denominacion
     *
     * @return Disponibilidad
     */
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;

        return $this;
    }

    /**
     * Get denominacion
     *
     * @return string
     */
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    /**
     * Set monto
     *
     * @param string $monto
     *
     * @return Disponibilidad
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Get iddisponibilidad
     *
     * @return integer
     */
    public function getIddisponibilidad()
    {
        return $this->iddisponibilidad;
    }

    /**
     * Set recursosrecursos
     *
     * @param \principal\principalBundle\Entity\Recursos $recursosrecursos
     *
     * @return Disponibilidad
     */
    public function setRecursosrecursos(\principal\principalBundle\Entity\Recursos $recursosrecursos = null)
    {
        $this->recursosrecursos = $recursosrecursos;

        return $this;
    }

    /**
     * Get recursosrecursos
     *
     * @return \principal\principalBundle\Entity\Recursos
     */
    public function getRecursosrecursos()
    {
        return $this->recursosrecursos;
    }

    /**
     * Set procesoproceso
     *
     * @param \principal\principalBundle\Entity\Proceso $procesoproceso
     *
     * @return Disponibilidad
     */
    public function setProcesoproceso(\principal\principalBundle\Entity\Proceso $procesoproceso = null)
    {
        $this->procesoproceso = $procesoproceso;

        return $this;
    }

    /**
     * Get procesoproceso
     *
     * @return \principal\principalBundle\Entity\Proceso
     */
    public function getProcesoproceso()
    {
        return $this->procesoproceso;
    }
}
