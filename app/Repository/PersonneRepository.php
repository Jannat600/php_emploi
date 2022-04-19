<?php

namespace Repository;

use src\Connexion;
use PDO;
use Entity\Personne;
use PDOException;

class PersonneRepository{

    protected $pdo;

    public function __construct()
    {
        $this->pdo=Connexion::getInstance();
    
    }

    public function find($id){
        
    
    $stmt=$this->pdo->prepare("select * from personne where id=:id");
    $stmt->execute([':id'=>$id]);
    $personnes=$stmt->fetchAll(PDO::FETCH_CLASS,'Entity\Personne');
    return $personnes;
    }

    public function findAll(){
        
    
        $stmt=$this->pdo->prepare("select * from personne");
        $stmt->execute();
        $personnes=$stmt->fetchAll(PDO::FETCH_CLASS,'Entity\Personne');
        return $personnes;
        }
    
        public function ajouterPersonne(Personne $personne){
            try
            {
            $stmt=$this->pdo->prepare("insert into personne values(DEFAULT,".$personne->getNom()."','".$personne->getPrenom()."','".$personne->getAdresse()."','".$personne->getEmail().")");
            $stmt->execute();
            $personnes=$stmt->fetchAll(PDO::FETCH_CLASS,'Entity\Personne');
            return $personnes;
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        

        } 

}