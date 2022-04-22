<?php

namespace Controller;
use Entity\Emploi;
use Entity\Horaire;
use Entity\Jour;
use Repository\Repository;


class EmploiController extends Controller
{
    private static $pdo;
    public static function find($request)
    { 
        $e= new emploi();
        $Repo = new Repository();
        return $Repo->find($e,$request);
        
       
        
    }

    public static function findEmploi(array $request)
    { 
        $e= new emploi();
        $Repo = new Repository();
        $emploi= $Repo->findBy($e, $request);
          return $emploi;
        
    }

    public  function showEmploi(Emploi $e){
     $empRepo = new Repository();
     $emplois = $empRepo->findAll($e);
     return $emplois;  


    }
    public function createEmploi(array $request)

    {    
        $e = new Emploi();
         $e->setIntitule($request['intitule']);
         $e->setHoraires($request['horaires']);
         $e->setJour($request['jour']);
         $e->setDate_ex($request['date_ex']);
         $e->setId_filiere($request['id_filiere']);
         $e->setId_user($request['id_user']);
         $empRepo = new Repository();
       return $empRepo->create($e);

    }
}
