<?php

namespace Controller;
use Entity\Emploi;
use Entity\Horaire;
use Entity\Jour;
use Repository\EmploiRepository;


class PersonneController
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
    public function storeEmploi($_REQUEST)
    {     $e = new Emploi();
         $e->setIntitule($intitule);
         $e->setHoraires($horaires);
         $e->setJour($jour);
         $e->setDate_ex($date_ex);
         $empRepo = new EmploiRepository();
        $empRepo->ajouterEmploi($e);
        }
}
