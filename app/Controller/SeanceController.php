<?php

namespace Controller;
use Entity\Seance;
use Entity\Horaire;
use Entity\Jour;
use Repository\Repository;


class SeanceController extends Controller
{
    private static $pdo;
    public static function find($request)
    { 
        $e= new Seance();
        $Repo = new Repository();
        return $Repo->find($e,$request);
        
       
        
    }

    public static function findSeance(array $request)
    { 
        $e= new Seance();
        $Repo = new Repository();
        $Seance= $Repo->findBy($e, $request);
          return $Seance;
        
    }

    public  function showSeance(Seance $e){
     $Repo = new Repository();
     $Seances = $Repo->findAll($e);
     return $Seances;  


    }
    public function createSeance(array $request)

    {    
        $e = new Seance();
        $e->setIntitule($request['intitule']);
         $e->setId_jour($request['Id_jour']);
        $e->setId_horaire($request['Id_horaire']);
        $e->setId_prof($request['Id_prof']);
        $e->setId_Salle($request['id_Salle']);
        $e->setId_module($request['id_module']);
        $empRepo = new Repository();
       return $empRepo->create($e);

    }
}
