<?php
namespace Entity;

class Horaire {
    private $id;
    private $heure_debut;
    private $heure_fin;


    function __construct($heure_deb, $heure_f) {
        $this->heure_fin=$heure_f;
         $this->heure_debut=$heure_deb;
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
     * Get the value of heure_debut
     */ 
    public function getHeure_debut()
    {
        return $this->heure_debut;
    }

    /**
     * Set the value of heure_debut
     *
     * @return  self
     */ 
    public function setHeure_debut($heure_debut)
    {
        $this->heure_debut = $heure_debut;

        return $this;
    }

    /**
     * Get the value of heure_fin
     */ 
    public function getHeure_fin()
    {
        return $this->heure_fin;
    }

    /**
     * Set the value of heure_fin
     *
     * @return  self
     */ 
    public function setHeure_fin($heure_fin)
    {
        $this->heure_fin = $heure_fin;

        return $this;
    }

}