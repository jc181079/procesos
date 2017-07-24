<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adjudicaciones
 *
 * @ORM\Table(name="adjudicaciones", indexes={@ORM\Index(name="fk_adjudicaciones_proceso1_idx", columns={"proceso_idproceso"}), @ORM\Index(name="fk_adjudicaciones_empresas1_idx", columns={"empresas_idempresas"}), @ORM\Index(name="fk_adjudicaciones_tipoadjudicacion1_idx", columns={"tipoadjudicacion_idtipoadjudicacion"})})
 * @ORM\Entity
 */
class Adjudicaciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $monto;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idadjudicaciones", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadjudicaciones;

    /**
     * @var \principal\principalBundle\Entity\Tipoadjudicacion
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Tipoadjudicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoadjudicacion_idtipoadjudicacion", referencedColumnName="idtipoadjudicacion")
     * })
     */
    private $tipoadjudicaciontipoadjudicacion;

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
     * @var \principal\principalBundle\Entity\Empresas
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Empresas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresas_idempresas", referencedColumnName="idempresas")
     * })
     */
    private $empresasempresas;



    /**
     * Set monto
     *
     * @param string $monto
     *
     * @return Adjudicaciones
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
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Adjudicaciones
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Get idadjudicaciones
     *
     * @return integer
     */
    public function getIdadjudicaciones()
    {
        return $this->idadjudicaciones;
    }

    /**
     * Set tipoadjudicaciontipoadjudicacion
     *
     * @param \principal\principalBundle\Entity\Tipoadjudicacion $tipoadjudicaciontipoadjudicacion
     *
     * @return Adjudicaciones
     */
    public function setTipoadjudicaciontipoadjudicacion(\principal\principalBundle\Entity\Tipoadjudicacion $tipoadjudicaciontipoadjudicacion = null)
    {
        $this->tipoadjudicaciontipoadjudicacion = $tipoadjudicaciontipoadjudicacion;

        return $this;
    }

    /**
     * Get tipoadjudicaciontipoadjudicacion
     *
     * @return \principal\principalBundle\Entity\Tipoadjudicacion
     */
    public function getTipoadjudicaciontipoadjudicacion()
    {
        return $this->tipoadjudicaciontipoadjudicacion;
    }

    /**
     * Set procesoproceso
     *
     * @param \principal\principalBundle\Entity\Proceso $procesoproceso
     *
     * @return Adjudicaciones
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

    /**
     * Set empresasempresas
     *
     * @param \principal\principalBundle\Entity\Empresas $empresasempresas
     *
     * @return Adjudicaciones
     */
    public function setEmpresasempresas(\principal\principalBundle\Entity\Empresas $empresasempresas = null)
    {
        $this->empresasempresas = $empresasempresas;

        return $this;
    }

    /**
     * Get empresasempresas
     *
     * @return \principal\principalBundle\Entity\Empresas
     */
    public function getEmpresasempresas()
    {
        return $this->empresasempresas;
    }
}
