<?php
namespace Entity;

class Module {
    private $id;
    private $nom_module;
    private $id_filiere;
    private $id_semestre;
    

    function __construct($name, $id_fil, $hor,$sem) {
        $this->nom_module=$name;
         $this->id_filière=$id_fil;
         $this->semestre=$sem;
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
     * Get the value of nom_module
     */ 
    public function getNom_module()
    {
        return $this->nom_module;
    }

    /**
     * Set the value of nom_module
     *
     * @return  self
     */ 
    public function setNom_module($nom_module)
    {
        $this->nom_module = $nom_module;

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
     * Get the value of id_semestre
     */ 
    public function getId_semestre()
    {
        return $this->id_semestre;
    }

    /**
     * Set the value of id_semestre
     *
     * @return  self
     */ 
    public function setId_semestre($id_semestre)
    {
        $this->id_semestre = $id_semestre;

        return $this;
    }
}