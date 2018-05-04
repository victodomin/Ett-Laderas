<?php


class employee{
    private $dni;
    private $SS;
    private $account;
    private $name;
    private $surname;
    private $email;
    private $address;

    function __construct($dni,$SS,$account,$name,$surname,$email,$address){
        $this->dni=$dni;
        $this->SS=$SS;
        $this->account=$account;
        $this->name=$name;
        $this->surname=$surname;
        $this->email=$email;
        $this->address=$address;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSS()
    {
        return $this->SS;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }
}