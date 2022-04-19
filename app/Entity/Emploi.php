<?php

namespace Entity;

class Emploi
{
    protected $id;
    private $intitule;
    private $jours = [];
    private $horaires = [];
    private $date_ex;
    private $id_user;
    private $id_filiere;
    

    
    function __construct() {
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
     * Get the value of nom
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

   

    /**
     * Get the value of horaires
     */ 
    public function getHoraires()
    {
        return $this->horaires;
    }

    /**
     * Set the value of horaires
     *
     * @return  self
     */ 
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;

        return $this;
    }

    /**
     * Get the value of jour
     */ 
    public function getJour()
    {
        return $this->jours;
    }

    /**
     * Set the value of jour
     *
     * @return  self
     */ 
    public function setJour($jour)
    {
        $this->jours = $jour;

        return $this;
    }

    /**
     * Get the value of date_ex
     */ 
    public function getDate_ex()
    {
        return $this->date_ex;
    }

    /**
     * Set the value of date_ex
     *
     * @return  self
     */ 
    public function setDate_ex($date_ex)
    {
        $this->date_ex = $date_ex;

        return $this;
    }

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

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


    /**
     * Get the value of activite
     */ 
   
}
