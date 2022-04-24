<?php

namespace Controller;
use Entity\horaire;
use Repository\Repository;


class HoraireController
{
    private static $pdo;
    public static function find($request)
    { 
        $e= new Horaire();
        $Repo = new Repository();
     return  $Repo->find($e,$request);
        
       
        
    }

    public static function findHoraire(array $request)
    { 
        $e= new Horaire();
        $Repo = new Repository();
        $Horaire= $Repo->findBy($e, $request);
          return $Horaire;
        
    }

    public  function showHoraire(Horaire $e){
     $empRepo = new Repository();
     $Horaires = $empRepo->findAll($e);
     return $Horaires;  


    }
    public function createHoraire()

    {   echo "je suis dans Horaire";
        $e = new Horaire();
        $input = [
            'heure_debut' => $_POST['heure_debut'],
            'heure_fin' => $_POST['heure_fin'],
        ];
        $e->setHeure_debut($input['heure_debut']);
        $e->setHeure_fin($input['heure_fin']);
        print_r($e);
         $Repo = new Repository();
        return $Repo->create($e);
      

    }
}
        
