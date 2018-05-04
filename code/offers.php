<?php
/**
 * Created by PhpStorm.
 * User: victo
 * Date: 04/05/2018
 * Time: 12:47
 */

class offers{

    private $idoffer;
    private $idclient;
    private $sector;
    private $duration;
    private $salary;
    private $description;
    function  __construct($idoffer,$idclient,$sector,$duration,$salary,$description){

        $this->idoffer=$idoffer;
        $this->idclient=$idclient;
        $this->sector=$sector;
        $this->duration=$duration;
        $this->salary=$salary;
        $this->description=$description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return mixed
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * @return mixed
     */
    public function getIdoffer()
    {
        return $this->idoffer;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @return mixed
     */
    public function getSector()
    {
        return $this->sector;
    }



}