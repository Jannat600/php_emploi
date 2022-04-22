<?php
namespace Entity;

class Seance  extends Model{
    private $id;
    private $intitule;
    private $id_horaire;
    private $id_jour;
    private $id_prof;
    private $id_salle;
    private $id_module;

    
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
     * Get the value of intitule
     */ 
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set the value of intitule
     *
     * @return  self
     */ 
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

   
    /**
     * Get the value of id_jour
     */ 
    public function getId_jour()
    {
        return $this->id_jour;
    }

    /**
     * Set the value of id_jour
     *
     * @return  self
     */ 
    public function setId_jour($id_jour)
    {
        $this->id_jour = $id_jour;

        return $this;
    }

    

    /**
     * Get the value of id_horaire
     */ 
    public function getId_horaire()
    {
        return $this->id_horaire;
    }

    /**
     * Set the value of id_horaire
     *
     * @return  self
     */ 
    public function setId_horaire($id_horaire)
    {
        $this->id_horaire = $id_horaire;

        return $this;
    }

    /**
     * Get the value of id_prof
     */ 
    public function getId_prof()
    {
        return $this->id_prof;
    }

    /**
     * Set the value of id_prof
     *
     * @return  self
     */ 
    public function setId_prof($id_prof)
    {
        $this->id_upfien = $id_prof;

        return $this;
    }

    /**
     * Get the value of id_salle
     */ 
    public function getId_salle()
    {
        return $this->id_salle;
    }

    /**
     * Set the value of id_salle
     *
     * @return  self
     */ 
    public function setId_salle($id_salle)
    {
        $this->id_salle = $id_salle;

        return $this;
    }

    /**
     * Get the value of id_module
     */ 
    public function getId_module()
    {
        return $this->id_module;
    }

    /**
     * Set the value of id_module
     *
     * @return  self
     */ 
    public function setId_module($id_module)
    {
        $this->id_module = $id_module;

        return $this;
    }
   
    function __construct( ) {
    
        $this->table = 'seance';
        
    }
    public function getproperty()
    {
        return get_object_vars($this);
    }
}

  