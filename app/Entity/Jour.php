<?php
namespace Entity;

class Jour extends Model  {
    private $id;
    private $nom;
    private $id_emploi;
    private $horaires=[];
    private $seances =[];

    function __construct($name, $id_emp) {
        $this->nom=$name;
         $this->id_emploi=$id_emp;
         $this->table = 'jour';
        }
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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of id_emploi
     */ 
    public function getId_emploi()
    {
        return $this->id_emploi;
    }

    /**
     * Set the value of id_emploi
     *
     * @return  self
     */ 
    public function setId_emploi($id_emploi)
    {
        $this->id_emploi = $id_emploi;

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
     * Get the value of seances
     */ 
    public function getSeances()
    {
        return $this->seances;
    }

    /**
     * Set the value of seances
     *
     * @return  self
     */ 
    public function setSeances($seances)
    {
        $this->seances = $seances;

        return $this;
    }
}