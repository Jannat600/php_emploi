<?php

namespace Controller;
use Entity\filiere;
use Entity\Semestre;
use Controller\FiliereController;
use Repository\Repository;


class SemestreController
{
    private static $pdo;
    public static function findSemestres($request)
    {   
        $filcon = new FiliereController();
        $fil= $filcon->findFiliere($request);
        $id= $fil['id'];
        $repo = new Repository();
        return  $repo->loadSemestre($id);
        
       
        
    }

    public static function findFiliere(array $request)
    { 
        $e= new Filiere();
        $Repo = new Repository();
        $Filiere= $Repo->findBy($e, $request);
        return $Filiere;
        
    }
}