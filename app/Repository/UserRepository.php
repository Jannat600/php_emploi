<?php

namespace Repository;

use src\Connexion;
use PDO;
use Entity\User;
use PDOException;

class UserRepository extends Repository{

    protected $pdo;

    public function __construct()
    {
        $this->pdo=Connexion::getInstance();
    
    }

    public function findByEmailOrUserName($input){
        
    
        $q = "select * from user WHERE username= '". $input."' OR email= '". $input."'";
        $p= $this->requete($q)->fetch();
        return $p;
    }

    // public function findAll(){
        
    
    //     $stmt=$this->pdo->prepare("select * from user");
    //     $stmt->execute();
    //     $users=$stmt->fetchAll(PDO::FETCH_CLASS,'Entity\User');
    //     return $users;
    //     }
    
    //     public function ajouterUser(User $user){
    //         try
    //         {
    //         $stmt=$this->pdo->prepare("insert into user values(DEFAULT,".$user-> getUsername()."','".$user->getPassword()."','".$user->getId_upf()."','".$user->getRole().")");
    //         $stmt->execute();
    //         $users=$stmt->fetchAll(PDO::FETCH_CLASS,'Entity\User');
    //         return $users;
    //         }
    //         catch(PDOException $e){
    //             echo $e->getMessage();
    //         }
        

    //     } 
    //     public function SupprimerUser(User $id){
    //         try
    //         {
    //         $stmt=$this->pdo->prepare("delete from user  where id=:id");
    //         $stmt->execute();
    //         $users=$stmt->fetchAll(PDO::FETCH_CLASS,'Entity\User');
    //         return $users;
    //         }
    //         catch(PDOException $e){
    //             echo $e->getMessage();
    //         }
        

    //     } 

}