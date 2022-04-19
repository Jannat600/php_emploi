<?php

namespace Controller;
use Entity\Personne;
use Repository\PersonneRepository;


class PersonneController
{
    private static $pdo;

    public static function showPersonne()
    {
        $personneRepo = new PersonneRepository();
        $personnes = $personneRepo->find(6);
        var_dump($personnes);
    }

    public  function showPersonnes(){
    $personneRepo = new PersonneRepository();
    $personnes2=$personneRepo->findAll();
     var_dump($personnes2);

    }
    public  function ajouterPersonne(){
         $p =new Personne();
         $p->setNom("Balou");
         $p->setPrenom("Sherkan");
         $p->setAdresse("Fes_Narjiss");
         $p->setEmail("balousherkan@mogli.com");
        $personneRepo = new PersonneRepository();
        $personneRepo->ajouterPersonne($p);
        }
}
