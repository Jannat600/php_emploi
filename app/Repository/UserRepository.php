<?php

namespace Repository;

use src\Connexion;
use PDO;
use Entity\User;
use PDOException;

class UserRepository{

    protected $pdo;

    public function __construct()
    {
        $this->pdo=Connexion::getInstance();
    
    }

    public function find($id){
        
    
    $stmt=$this->pdo->prepare("select * from user where id=:id");
    $stmt->execute([':id'=>$id]);
    $personnes=$stmt->fetchAll(PDO::FETCH_CLASS,'Entity\User');
    return $personnes;
    }

    public function findAll(){
        
    
        $stmt=$this->pdo->prepare("select * from user");
        $stmt->execute();
        $users=$stmt->fetchAll(PDO::FETCH_CLASS,'Entity\User');
        return $users;
        }
    
        public function ajouterUser(User $user){
            try
            {
            $stmt=$this->pdo->prepare("insert into user values(DEFAULT,".$user-> getUsername()."','".$user->getPassword()."','".$user->getId_upf()."','".$user->getRole().")");
            $stmt->execute();
            $users=$stmt->fetchAll(PDO::FETCH_CLASS,'Entity\User');
            return $users;
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        

        } 
        public function SupprimerUser(User $id){
            try
            {
            $stmt=$this->pdo->prepare("delete from user  where id=:id");
            $stmt->execute();
            $users=$stmt->fetchAll(PDO::FETCH_CLASS,'Entity\User');
            return $users;
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        

        } 

}