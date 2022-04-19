<?php

namespace Controller;
use Entity\Emploi;
use Entity\Horaire;
use Entity\Jour;
use Repository\EmploiRepository;


class EmploiController
{
    private static $pdo;

    public static function showEmploi()
    {
        $empRepo = new EmploiRepository();
        $emplois = $empRepo->find(6);
        var_dump($emplois);
    }

    public  function showEmplois(){
     $empRepo = new EmploiRepository();
     $emplois = $empRepo->findAll();
        var_dump($emplois);

    }
    public function storeEmploi($request)

    {    
        $e = new Emploi();
         $e->setIntitule($request['intitule']);
         $e->setHoraires($request['horaires']);
         $e->setJour($request['jour']);
         $e->setDate_ex($request['date_ex']);
         $e->setId_filiere($request['id_filiere']);
         $e->setId_user($request['id_user']);
         $empRepo = new EmploiRepository();
         if (isset($request))
         {
            $empRepo->ajouterEmploi($e);
        }

            $empRepo->modifierEmploi($e);

    }
}
