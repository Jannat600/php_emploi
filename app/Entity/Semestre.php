<?php
namespace Entity;

class Semestre extends Model{
    private $id;
    private $code;
    private $id_filiere;
    
    public function getproperty()
    {
        return get_object_vars($this);
    }
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;

    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of id_filiere
     */ 
    public function getId_filiere()
    {
        return $this->id_filiere;
    }

    /**
     * Set the value of id_filiere
     *
     * @return  self
     */ 
    public function setId_filiere($id_filiere)
    {
        $this->id_filiere = $id_filiere;

        return $this;
    }
    function __construct( ){
        $this->table = 'semestre';
    }
}