<?php

namespace Controller;
use Entity\filiere;
use Repository\Repository;


class FiliereController
{
    private static $pdo;
    public static function find($request)
    { 
        $e= new Filiere();
        $Repo = new Repository();
     return  $Repo->find($e,$request);
        
       
        
    }

    public static function findFiliere(array $request)
    { 
        $e= new Filiere();
        $Repo = new Repository();
        $Filiere= $Repo->findBy($e, $request);
        return $Filiere;
        
    }

    public static function findNiveau(array $request)
    { 
        $e= new Filiere();
        $Repo = new Repository();
        $enum= "niveau";
        $Filiere= $Repo->findBy($e, $request);


        $niveau = $Repo->loadEnum($e,$enum);
        return $niveau;
        
    }

    public  function showFiliere(Filiere $e){
     $empRepo = new Repository();
     $Filieres = $empRepo->findAll($e);
     return $Filieres; 

    }
  
}
        
