<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CountryCaption
{

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Zip
     */
    protected $Zip = null;

    /**
     * @param string $City
     * @param string $State
     * @param string $Zip
     */
    public function __construct($City = null, $State = null, $Zip = null)
    {
        $this->City  = $City;
        $this->State = $State;
        $this->Zip   = $Zip;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return \Spinen\ConnectWise\Library\Api\Generated\CountryCaption
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return \Spinen\ConnectWise\Library\Api\Generated\CountryCaption
     */
    public function setState($State)
    {
        $this->State = $State;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->Zip;
    }

    /**
     * @param string $Zip
     * @return \Spinen\ConnectWise\Library\Api\Generated\CountryCaption
     */
    public function setZip($Zip)
    {
        $this->Zip = $Zip;
        return $this;
    }

}
