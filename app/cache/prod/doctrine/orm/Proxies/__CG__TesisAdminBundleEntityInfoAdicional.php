<?php

namespace Proxies\__CG__\Tesis\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class InfoAdicional extends \Tesis\AdminBundle\Entity\InfoAdicional implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'resumen', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'problema', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'justificacion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'objetivoG', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'resultados', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'conclusion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'objetivoE', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'calificacion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'observacion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'fecha', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'idInfoAdicional', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'idEstudiante');
        }

        return array('__isInitialized__', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'resumen', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'problema', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'justificacion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'objetivoG', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'resultados', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'conclusion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'objetivoE', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'calificacion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'observacion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'fecha', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'idInfoAdicional', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\InfoAdicional' . "\0" . 'idEstudiante');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (InfoAdicional $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setResumen($resumen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResumen', array($resumen));

        return parent::setResumen($resumen);
    }

    /**
     * {@inheritDoc}
     */
    public function getResumen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResumen', array());

        return parent::getResumen();
    }

    /**
     * {@inheritDoc}
     */
    public function setProblema($problema)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProblema', array($problema));

        return parent::setProblema($problema);
    }

    /**
     * {@inheritDoc}
     */
    public function getProblema()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProblema', array());

        return parent::getProblema();
    }

    /**
     * {@inheritDoc}
     */
    public function setJustificacion($justificacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJustificacion', array($justificacion));

        return parent::setJustificacion($justificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getJustificacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJustificacion', array());

        return parent::getJustificacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjetivoG($objetivoG)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjetivoG', array($objetivoG));

        return parent::setObjetivoG($objetivoG);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjetivoG()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjetivoG', array());

        return parent::getObjetivoG();
    }

    /**
     * {@inheritDoc}
     */
    public function setResultados($resultados)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResultados', array($resultados));

        return parent::setResultados($resultados);
    }

    /**
     * {@inheritDoc}
     */
    public function getResultados()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResultados', array());

        return parent::getResultados();
    }

    /**
     * {@inheritDoc}
     */
    public function setConclusion($conclusion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConclusion', array($conclusion));

        return parent::setConclusion($conclusion);
    }

    /**
     * {@inheritDoc}
     */
    public function getConclusion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConclusion', array());

        return parent::getConclusion();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjetivoE($objetivoE)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjetivoE', array($objetivoE));

        return parent::setObjetivoE($objetivoE);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjetivoE()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjetivoE', array());

        return parent::getObjetivoE();
    }

    /**
     * {@inheritDoc}
     */
    public function setCalificacion($calificacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCalificacion', array($calificacion));

        return parent::setCalificacion($calificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getCalificacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalificacion', array());

        return parent::getCalificacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservacion($observacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservacion', array($observacion));

        return parent::setObservacion($observacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservacion', array());

        return parent::getObservacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', array($fecha));

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', array());

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdInfoAdicional()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdInfoAdicional();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdInfoAdicional', array());

        return parent::getIdInfoAdicional();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEstudiante(\Tesis\AdminBundle\Entity\Estudiante $idEstudiante = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEstudiante', array($idEstudiante));

        return parent::setIdEstudiante($idEstudiante);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEstudiante()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEstudiante', array());

        return parent::getIdEstudiante();
    }

}
