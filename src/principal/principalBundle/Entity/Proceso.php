<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proceso
 *
 * @ORM\Table(name="proceso", indexes={@ORM\Index(name="fk_proceso_tipoproceso1_idx", columns={"tipoproceso_idtipoproceso"}), @ORM\Index(name="fk_proceso_entesolicitante1_idx", columns={"entesolicitante_identesolicitante"}), @ORM\Index(name="fk_proceso_estatus1_idx", columns={"estatus_idestatus"}), @ORM\Index(name="fk_proceso_usuarios1_idx", columns={"usuarios_idusuarios"})})
 * @ORM\Entity
 */
class Proceso
{
    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=18, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="denominacion", type="text", nullable=true)
     */
    private $denominacion;

    /**
     * @var string
     *
     * @ORM\Column(name="objeto", type="text", nullable=true)
     */
    private $objeto;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad", type="string", length=8, nullable=true)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="mecanismo", type="text", nullable=true)
     */
    private $mecanismo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fsolicitud", type="date", nullable=true)
     */
    private $fsolicitud;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fipliego", type="date", nullable=true)
     */
    private $fipliego;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ffpliego", type="date", nullable=true)
     */
    private $ffpliego;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="facto", type="date", nullable=true)
     */
    private $facto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiaclara", type="date", nullable=true)
     */
    private $fiaclara;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ffaclara", type="date", nullable=true)
     */
    private $ffaclara;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fraclara", type="date", nullable=true)
     */
    private $fraclara;

    /**
     * @var float
     *
     * @ORM\Column(name="costo", type="float", precision=10, scale=0, nullable=true)
     */
    private $costo;

    /**
     * @var string
     *
     * @ORM\Column(name="hipliegoam", type="string", length=25, nullable=true)
     */
    private $hipliegoam;

    /**
     * @var string
     *
     * @ORM\Column(name="hfpliegopm", type="string", length=25, nullable=true)
     */
    private $hfpliegopm;

    /**
     * @var string
     *
     * @ORM\Column(name="hiaclaraam", type="string", length=25, nullable=true)
     */
    private $hiaclaraam;

    /**
     * @var string
     *
     * @ORM\Column(name="hfaclarapm", type="string", length=25, nullable=true)
     */
    private $hfaclarapm;

    /**
     * @var string
     *
     * @ORM\Column(name="hraclara", type="string", length=8, nullable=true)
     */
    private $hraclara;

    /**
     * @var string
     *
     * @ORM\Column(name="hesobre", type="string", length=25, nullable=true)
     */
    private $hesobre;

    /**
     * @var string
     *
     * @ORM\Column(name="presupuestobase", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $presupuestobase;

    /**
     * @var integer
     *
     * @ORM\Column(name="idproceso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproceso;

    /**
     * @var \principal\principalBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuarios_idusuarios", referencedColumnName="idusuarios")
     * })
     */
    private $usuariosusuarios;

    /**
     * @var \principal\principalBundle\Entity\Tipoproceso
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Tipoproceso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoproceso_idtipoproceso", referencedColumnName="idtipoproceso")
     * })
     */
    private $tipoprocesotipoproceso;

    /**
     * @var \principal\principalBundle\Entity\Estatus
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Estatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estatus_idestatus", referencedColumnName="idestatus")
     * })
     */
    private $estatusestatus;

    /**
     * @var \principal\principalBundle\Entity\Entesolicitante
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Entesolicitante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entesolicitante_identesolicitante", referencedColumnName="identesolicitante")
     * })
     */
    private $entesolicitanteentesolicitante;



    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Proceso
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set denominacion
     *
     * @param string $denominacion
     *
     * @return Proceso
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
     * Set objeto
     *
     * @param string $objeto
     *
     * @return Proceso
     */
    public function setObjeto($objeto)
    {
        $this->objeto = $objeto;

        return $this;
    }

    /**
     * Get objeto
     *
     * @return string
     */
    public function getObjeto()
    {
        return $this->objeto;
    }

    /**
     * Set actividad
     *
     * @param string $actividad
     *
     * @return Proceso
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set mecanismo
     *
     * @param string $mecanismo
     *
     * @return Proceso
     */
    public function setMecanismo($mecanismo)
    {
        $this->mecanismo = $mecanismo;

        return $this;
    }

    /**
     * Get mecanismo
     *
     * @return string
     */
    public function getMecanismo()
    {
        return $this->mecanismo;
    }

    /**
     * Set fsolicitud
     *
     * @param \DateTime $fsolicitud
     *
     * @return Proceso
     */
    public function setFsolicitud($fsolicitud)
    {
        $this->fsolicitud = $fsolicitud;

        return $this;
    }

    /**
     * Get fsolicitud
     *
     * @return \DateTime
     */
    public function getFsolicitud()
    {
        return $this->fsolicitud;
    }

    /**
     * Set fipliego
     *
     * @param \DateTime $fipliego
     *
     * @return Proceso
     */
    public function setFipliego($fipliego)
    {
        $this->fipliego = $fipliego;

        return $this;
    }

    /**
     * Get fipliego
     *
     * @return \DateTime
     */
    public function getFipliego()
    {
        return $this->fipliego;
    }

    /**
     * Set ffpliego
     *
     * @param \DateTime $ffpliego
     *
     * @return Proceso
     */
    public function setFfpliego($ffpliego)
    {
        $this->ffpliego = $ffpliego;

        return $this;
    }

    /**
     * Get ffpliego
     *
     * @return \DateTime
     */
    public function getFfpliego()
    {
        return $this->ffpliego;
    }

    /**
     * Set facto
     *
     * @param \DateTime $facto
     *
     * @return Proceso
     */
    public function setFacto($facto)
    {
        $this->facto = $facto;

        return $this;
    }

    /**
     * Get facto
     *
     * @return \DateTime
     */
    public function getFacto()
    {
        return $this->facto;
    }

    /**
     * Set fiaclara
     *
     * @param \DateTime $fiaclara
     *
     * @return Proceso
     */
    public function setFiaclara($fiaclara)
    {
        $this->fiaclara = $fiaclara;

        return $this;
    }

    /**
     * Get fiaclara
     *
     * @return \DateTime
     */
    public function getFiaclara()
    {
        return $this->fiaclara;
    }

    /**
     * Set ffaclara
     *
     * @param \DateTime $ffaclara
     *
     * @return Proceso
     */
    public function setFfaclara($ffaclara)
    {
        $this->ffaclara = $ffaclara;

        return $this;
    }

    /**
     * Get ffaclara
     *
     * @return \DateTime
     */
    public function getFfaclara()
    {
        return $this->ffaclara;
    }

    /**
     * Set fraclara
     *
     * @param \DateTime $fraclara
     *
     * @return Proceso
     */
    public function setFraclara($fraclara)
    {
        $this->fraclara = $fraclara;

        return $this;
    }

    /**
     * Get fraclara
     *
     * @return \DateTime
     */
    public function getFraclara()
    {
        return $this->fraclara;
    }

    /**
     * Set costo
     *
     * @param float $costo
     *
     * @return Proceso
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return float
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set hipliegoam
     *
     * @param string $hipliegoam
     *
     * @return Proceso
     */
    public function setHipliegoam($hipliegoam)
    {
        $this->hipliegoam = $hipliegoam;

        return $this;
    }

    /**
     * Get hipliegoam
     *
     * @return string
     */
    public function getHipliegoam()
    {
        return $this->hipliegoam;
    }

    /**
     * Set hfpliegopm
     *
     * @param string $hfpliegopm
     *
     * @return Proceso
     */
    public function setHfpliegopm($hfpliegopm)
    {
        $this->hfpliegopm = $hfpliegopm;

        return $this;
    }

    /**
     * Get hfpliegopm
     *
     * @return string
     */
    public function getHfpliegopm()
    {
        return $this->hfpliegopm;
    }

    /**
     * Set hiaclaraam
     *
     * @param string $hiaclaraam
     *
     * @return Proceso
     */
    public function setHiaclaraam($hiaclaraam)
    {
        $this->hiaclaraam = $hiaclaraam;

        return $this;
    }

    /**
     * Get hiaclaraam
     *
     * @return string
     */
    public function getHiaclaraam()
    {
        return $this->hiaclaraam;
    }

    /**
     * Set hfaclarapm
     *
     * @param string $hfaclarapm
     *
     * @return Proceso
     */
    public function setHfaclarapm($hfaclarapm)
    {
        $this->hfaclarapm = $hfaclarapm;

        return $this;
    }

    /**
     * Get hfaclarapm
     *
     * @return string
     */
    public function getHfaclarapm()
    {
        return $this->hfaclarapm;
    }

    /**
     * Set hraclara
     *
     * @param string $hraclara
     *
     * @return Proceso
     */
    public function setHraclara($hraclara)
    {
        $this->hraclara = $hraclara;

        return $this;
    }

    /**
     * Get hraclara
     *
     * @return string
     */
    public function getHraclara()
    {
        return $this->hraclara;
    }

    /**
     * Set hesobre
     *
     * @param string $hesobre
     *
     * @return Proceso
     */
    public function setHesobre($hesobre)
    {
        $this->hesobre = $hesobre;

        return $this;
    }

    /**
     * Get hesobre
     *
     * @return string
     */
    public function getHesobre()
    {
        return $this->hesobre;
    }

    /**
     * Set presupuestobase
     *
     * @param string $presupuestobase
     *
     * @return Proceso
     */
    public function setPresupuestobase($presupuestobase)
    {
        $this->presupuestobase = $presupuestobase;

        return $this;
    }

    /**
     * Get presupuestobase
     *
     * @return string
     */
    public function getPresupuestobase()
    {
        return $this->presupuestobase;
    }

    /**
     * Get idproceso
     *
     * @return integer
     */
    public function getIdproceso()
    {
        return $this->idproceso;
    }

    /**
     * Set usuariosusuarios
     *
     * @param \principal\principalBundle\Entity\Usuarios $usuariosusuarios
     *
     * @return Proceso
     */
    public function setUsuariosusuarios(\principal\principalBundle\Entity\Usuarios $usuariosusuarios = null)
    {
        $this->usuariosusuarios = $usuariosusuarios;

        return $this;
    }

    /**
     * Get usuariosusuarios
     *
     * @return \principal\principalBundle\Entity\Usuarios
     */
    public function getUsuariosusuarios()
    {
        return $this->usuariosusuarios;
    }

    /**
     * Set tipoprocesotipoproceso
     *
     * @param \principal\principalBundle\Entity\Tipoproceso $tipoprocesotipoproceso
     *
     * @return Proceso
     */
    public function setTipoprocesotipoproceso(\principal\principalBundle\Entity\Tipoproceso $tipoprocesotipoproceso = null)
    {
        $this->tipoprocesotipoproceso = $tipoprocesotipoproceso;

        return $this;
    }

    /**
     * Get tipoprocesotipoproceso
     *
     * @return \principal\principalBundle\Entity\Tipoproceso
     */
    public function getTipoprocesotipoproceso()
    {
        return $this->tipoprocesotipoproceso;
    }

    /**
     * Set estatusestatus
     *
     * @param \principal\principalBundle\Entity\Estatus $estatusestatus
     *
     * @return Proceso
     */
    public function setEstatusestatus(\principal\principalBundle\Entity\Estatus $estatusestatus = null)
    {
        $this->estatusestatus = $estatusestatus;

        return $this;
    }

    /**
     * Get estatusestatus
     *
     * @return \principal\principalBundle\Entity\Estatus
     */
    public function getEstatusestatus()
    {
        return $this->estatusestatus;
    }

    /**
     * Set entesolicitanteentesolicitante
     *
     * @param \principal\principalBundle\Entity\Entesolicitante $entesolicitanteentesolicitante
     *
     * @return Proceso
     */
    public function setEntesolicitanteentesolicitante(\principal\principalBundle\Entity\Entesolicitante $entesolicitanteentesolicitante = null)
    {
        $this->entesolicitanteentesolicitante = $entesolicitanteentesolicitante;

        return $this;
    }

    /**
     * Get entesolicitanteentesolicitante
     *
     * @return \principal\principalBundle\Entity\Entesolicitante
     */
    public function getEntesolicitanteentesolicitante()
    {
        return $this->entesolicitanteentesolicitante;
    }
}
