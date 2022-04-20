<?php

namespace Controller;
use Entity\horaire;
use Repository\HoraireRepository;


class HoraireController
{
    private static $pdo;

    public static function showheure()
    {
        $heureRepo = new HoraireRepository();
        $heure = $heureRepo->find(1);
        var_dump($heure);
    }

    public  function showheures(){
        $heureRepo = new HoraireRepository();
    $heure2=$ $heureRepo->findAll();
     var_dump($heure2);

    }
    public  function ajouterHeure($REQUEST){
         $p =new heure();
         
         $p->setHeure_debut($REQUEST['heure_d']);
         $p->setHeure_fin($REQUEST['heure_f']);
        $heureRepo = new HoraireRepository();
        if(isset($REQUEST)){
        $heureRepo->ajouterheure($p);
        }
        $heureRepo->ModifierHeure($p);
    }
}
        
