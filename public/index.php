<?php
require '../vendor/autoload.php';
use Entity\Horaire;
use Entity\Emploi;
use Controller\EmploiController;
use Repository\UserRepository;
use Repository\EmploiRepository;
use src\Connexion;


try{
    //$t = new Emploi();
   // $t->setIntitule('GE6');
     //$t->setId_user(5);
    //$t->setDate_ex("2042-09-27");
   // $t->setId_filiere(1);
    //echo $t->getIntitule()."<br/>";
    //echo $t->getDate_ex()."<br/>";
    //echo  $t->getId_user()."<br/>";
   // echo  $t->getId_filiere()."<br/>";
   $t=array(
    "intitule"  =>"GEINHO",
    "date_ex "=> "2042-09-27",
    "id_filiere" =>2,
    "id_user" =>3,
    "horaires"=>[],
    "jour"=>[]
   );
   foreach($t as $key => $value) {
    echo "Clé=" . $key . ", Valeur=" . $value;
    echo "<br>";
  }
    $repo= new EmploiController();
    $repo->storeEmploi($t);
    var_dump($t);echo "<br>";
    
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>