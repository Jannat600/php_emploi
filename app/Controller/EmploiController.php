<?php

namespace Controller;
use Entity\Emploi;
use Entity\Horaire;
use Entity\Jour;
use Entity\User;
use Repository\Repository;
use View\ViewManager;

class EmploiController extends Controller
{
    private static $pdo;
    public static function find($request)
    { 
        $e= new emploi();
        $Repo = new Repository();
     return  $Repo->find($e,$request);
        
       
        
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
    public function createEmploi()

    {  
        
         $f= new filiereController();
         $usr= new User();
         $empRepo = new Repository();
         $e = new Emploi();
        
        $arr= array('nom_filiere'=>$_POST['nom_filiere'],'niveau'=>(int)$_POST['niveau'],);
        
        
        $filiere= $f-> findFiliere($arr);
    
        $id_fil= $filiere["id"];

        $intitule=$_POST['nom_filiere'];
        $intitule .=$_POST['niveau'];
        $user= $empRepo->findBy($usr,(array)$_POST['username']);
        $id_user= $user["id"];
        
         $e->setIntitule($intitule);
         $e->setDate_ex($_POST['date_ex']);
         $e->setId_filiere($id_fil);
         $e->setId_user($id_user);
         
            $empRepo->create($e);
        
         $vm= new ViewManager();
         $vm->render("\Admin\create_table.view",['emploi'=>$e]);
    } 

    public function Delete($id)
    {   
        
       $e=new Emploi();
       $repo= new Repository();
       return $repo->delete($e, $id);
    }
}
