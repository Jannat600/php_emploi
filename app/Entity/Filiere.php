<?php
namespace Entity;

class Filiere {
    private $id;
    private $nom_filiere;
    private $niveau;
    private $modules=[];
 
    
    function __construct($nom_fil, $niv,$mod) {
        $this->nom_filiere=$nom_fil;
         $this->niveau=$niv;
         $this->modules=$mod;
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
     * Get the value of nom_filiere
     */ 
    public function getNom_filiere()
    {
        return $this->nom_filiere;
    }

    /**
     * Set the value of nom_filiere
     *
     * @return  self
     */ 
    public function setNom_filiere($nom_filiere)
    {
        $this->nom_filiere = $nom_filiere;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of Modules
     */ 
    public function getModules()
    {
        return $this->Modules;
    }

    /**
     * Set the value of Modules
     *
     * @return  self
     */ 
    public function setModules($Modules)
    {
        $this->Modules = $Modules;

        return $this;
    }
}