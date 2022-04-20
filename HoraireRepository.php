<?php

namespace Repository;

use src\Connexion;
use PDO;
use Entity\Horaire;
use PDOException; 

class HoraireRepositry {


    
    protected $pdo;

    public function __construct()
    {
        $this->pdo = Connexion::getInstance();
    }

    public function find($id)
    {


        $stmt = $this->pdo->prepare("select * from horaire where id=:id");
        $stmt->execute([':id' => $id]);
        $personnes = $stmt->fetchAll(PDO::FETCH_CLASS, 'Entity\horaire');
        return $personnes;
    }

    public function findAll()
    {


        $stmt = $this->pdo->prepare("select * from Horaire");
        $stmt->execute();
        $horaires = $stmt->fetchAll(PDO::FETCH_CLASS, 'Entity\Horaire');
        return $horaires;
    }
   
public function ajouterHeure( Horaire $horaire){
  if (isset($_POST['submit'])){

    if ((!empty($_POST['heure_d'])) && (!empty($_POST['heure_f']))	)
    {
       $heure_d=$_POST['heure_d'];
       $heure_f=$_POST['heure_f'];
      
       $Ajouterheure="INSERT INTO horaire ( H_d, H_f) VALUES ( '$heure_d', '$heure_f')";
    
    
       mysqli_query($db, $Ajouterheure) or die('Erreur SQL !'.$Ajouterheure.'<br>'.mysqli_error($db));;
    }
   
}

  }



public function ModifierHoraire($request)
{ 
    try { 
        $sql = "UPDATE horaire SET H_d=?, H_f=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        $heure_debut=$request->heure_deb;
        $heure_f =$request->heure_f;
     
        $stmt->execute(array_values($request));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
    
public function SupprimerHoraire(Horaire $id)
{
    try {
        $stmt = $this->pdo->prepare("DELETE * from horaire where id =:id");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_CLASS, 'Entity\horaire');
        return $users;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} 
  

    






}
