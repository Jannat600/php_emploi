<?php

namespace Repository;

use src\Connexion;
use PDO;
use Entity\Emploi;
use PDOException;

class EmploiRepository
{

    protected $pdo;

    public function __construct()
    {
        $this->pdo = Connexion::getInstance();
    }

    public function find($id)
    {


        $stmt = $this->pdo->prepare("select * from emploi where id=:id");
        $stmt->execute([':id' => $id]);
        $personnes = $stmt->fetchAll(PDO::FETCH_CLASS, 'Entity\Emploi');
        return $personnes;
    }

    public function findAll()
    {


        $stmt = $this->pdo->prepare("select * from emploi");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_CLASS, 'Entity\Emploi');
        return $users;
    }

    public function ajouterEmploi(Emploi $emploi)
    {
        try {
            $stmt = $this->pdo->prepare("insert into emploi values(DEFAULT,".$emploi->getIntitule()."','".$emploi->getDate_ex()."','".$emploi->getId_user()."','" .$emploi->getId_filiere().")");
            $stmt->execute();
            $emplois = $stmt->fetchAll(PDO::FETCH_CLASS, 'Entity\Emploi');
            return $emplois;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function storeEmploi($request)
    { 
        
        try {
            
            $sql = "UPDATE emploi SET intitule=?, date_ex=?, id_user =? ,id_filiere=? WHERE id=?";
            $stmt = $this->pdo->prepare($sql);
            $intitule=$request->intitule;
            $date_ex =$request->date_ex;
            $id_user=$request->id_user;
            $id_filière=$request->id_filiere;
            $stmt->execute(array_values($request));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function SupprimerEmploi(Emploi $id)
    {
        try {
            $stmt = $this->pdo->prepare("delete from user  where id=:id");
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_CLASS, 'Entity\User');
            return $users;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
