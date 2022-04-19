<?php
require '../vendor/autoload.php';
use Entity\Horaire;
use Entity\Emploi;
use Repository\UserRepository;
use Repository\EmploiRepository;
use src\Connexion;


try{
    $tab = new Emploi();
    $tab->setIntitule('GE4');
    $tab->setId_user(2);
    $tab->setDate_ex("2022-05-24");
    $tab->setId_filiere(2);
    $test=$tab->getIntitule();

  
   // $repo= new EmploiRepository();
   // $object = $repo->ajouterEmploi($tab);
    var_dump($test);
    
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>