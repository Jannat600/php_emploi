<?php
require '../vendor/autoload.php';
  // use Entity\Horaire;
  // use Entity\Emploi;
  // use Entity\Seance;
  // use Controller\SeanceController;
  // use Controller\EmploiController;
  // use Controller\UserController;
  // use Repository\UserRepository;
  // use Repository\Repository;
  // use Entity\jour;
use src\Router;
use src\Connexion;


//try{
  //   $h= new Horaire("4","5");
  //   $j= new jour("Mardi",7);

  //   $t = new Emploi();
  //   $t->setIntitule('HillowOOD');
  //   $t->setId_user(5);
  //  $t->setDate_ex("2002-09-27");
  //  $t->setId_filiere(1);
  //  // echo $t->getIntitule()."<br/>";
  //  // echo $t->getDate_ex()."<br/>";
  //  // echo  $t->getId_user()."<br/>";
  //  // echo  $t->getId_filiere()."<br/>";
  //  $tab =array(
  // "username"=>"Bog",
  // "password" =>"kdkgdjdjgghklj",
  // );
  // /* foreach($t as $key => $value) {
  //   echo "Clé=" . $key . ", Valeur=" . $value;
  //   echo "<br>";
  // }*/

  // $s =new  seance();
  // $seance= array(
  //   "intitule"=>"Java",
  //   "id_salle" =>2,
  //   "id_user"=>2,
  //   "id_prof" =>2,
  //   "id_jour"=>4,
  //   "id_horaire" =>4,
  //   "id_module"=>1
  //   );
  // $table = "emploi";
  //  $repo= new SeanceController();
  // $d =$repo->createSeance($seance);
  // print_r($d);echo "<br>";
  //   //var_dump($t);echo "<br>";
  //  // $i=get_object_vars($h);
  //  // var_dump($i);
    //var_dump($h);
     $router=new Router();
     $router->request();
    //echo "Bof";
    
// }
// catch(PDOException $e){
//     echo $e->getMessage();
// }
?>