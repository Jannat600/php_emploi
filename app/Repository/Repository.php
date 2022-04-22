<?php

namespace Repository;

use src\Connexion;
use PDO;
use Entity\Model;
use PDOException;

class Repository
{
    // Table de la base de données
    protected $table;

    // Instance de Db
    private $pdo;

    public function columns($table)

    {
        $this->pdo = Connexion::getInstance();
        $result = $this->pdo->query('select * from '.$table.' limit 1');
        $fields = array_keys($result->fetch(PDO::FETCH_ASSOC));
        return $fields;
    }



    public function requete(string $sql, array $attributs = null)
    {
        // On récupère l'instance de pdo;
        $this->pdo = Connexion::getInstance();

        // On vérifie si on a des attributs
        if ($attributs !== null) {
            // Requête préparée
            $query = $this->pdo->prepare($sql);
            $query->execute($attributs);
            return $query;
        } else {
            // Requête simple
            return $this->pdo->query($sql);
        }
    }

    public function get_fields(Model $model)
    {
        $t=$model->getProperty();
        unset($t["id"]);
        foreach ($t as $champ => $valeur) 
        {   
            $keys[] = $champ;
        }
        $fields = Repository::columns($model->table);
        $tab_champs=(array_intersect($fields, $keys));
        return $tab_champs;
    }
    public function findAll(Model $model)

    {
        $q = "select * from " . $model->table;
        $query = $this->requete($q);
        return $query->fetchAll();
    }

    public function findBy(Model $model,array $criteres)
    {
        $champs = [];
        $valeurs = [];

        // On boucle pour éclater le tableau
        foreach ($criteres as $champ => $valeur) {
            // SELECT * FROM emploi WHERE id= ? AND id_filiere = 9
            // bindValue(1, valeur)
            $champs[] = "$champ = ?";
            $valeurs[] = $valeur;
        }

        // On transforme le tableau "champs" en une chaine de caractères
        $liste_champs = implode(' AND ', $champs);

        // On exécute la requête
        $q = "select * from ". $model->table ." WHERE ". $liste_champs;
        print_r($liste_champs);
        print_r($valeurs);
        return $this->requete($q, $valeurs)->fetchAll();
        
    }

    public function find($model, int $id)
    {   $q = "select * from ". $model->table ." WHERE id =". $id;
        $p= $this->requete($q)->fetch();
        var_dump($p);

    }

    public function create(Model $model)

    {    $t=$model->getProperty();
        $tab_champs= Repository::get_fields($model);
        $pts = [];
         
        foreach ($tab_champs as $champ) 
        {   
            $valeurs[] = $t[$champ];
            $pts[] = "?";
        }

        // On transforme le tableau "champs" en une chaine de caractères
        $liste_champs = implode(', ', $tab_champs);
        $liste_inter = implode(', ', $pts);
         
        // On exécute la requête
       // echo "insert into " . $model->table . " (" . $liste_champs . ")VALUES(" . $liste_inter . ")";
       $query = "insert into " . $model->table . " (" . $liste_champs . ")VALUES(" . $liste_inter . ")";
       
       return $this->requete( $query,$valeurs);
        //var_dump($liste_champs);
       // var_dump($liste_inter);
        //var_dump($valeurs);


    }

    public function update( Model $model,int $id)
    {
        $t=$model->getProperty();
        $tab_champs= Repository::get_fields($model);

        // On boucle pour éclater le tableau
        foreach ($tab_champs as $champ) 
        {   
            $valeurs[] = $t[$champ];
            $pts[] = "?";
        }
        $valeurs[] = $id;

        // On transforme le tableau "champs" en une chaine de caractères
        $liste_champs = implode(', ', $tab_champs);

        // On exécute la requête
        $q= "update".$model->table . " set ". $liste_champs . " WHERE id = ?";
        return $this->requete($q, $valeurs);
    }

    public function delete(Model $model,int $id)

    {    $q= "delete from {$model->table} WHERE id = ?";
        return $this->requete($q, [$id]);
    }


    public function fill(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            // On récupère le nom du setter correspondant à la clé (key)
            // titre -> setTitre
            $setter = 'set' . ucfirst($key);

            // On vérifie si le setter existe
            if (method_exists($this, $setter)) {
                // On appelle le setter
                $this->$setter($value);
            }
        }
        return $this;
    }

    public function loadInfo(Model $model, $col)
    {


        $q = "select distinct".$col."from " . $model->table;
        $query = $this->requete($q);
        return $query->fetchAll();
      
    }
}


// foreach ($t as $champ => $valeur) {
           
//     foreach ($fields as $num=> $col) {
//        $test = strcmp($champ, $col);
//        //var_dump($test);
//         //INSERT INTO emploi (intitule, filiere, user) VALUES (?, ?, ?)
//         if ($valeur != null && $col != null && $test == 1) {
//             $champs[] = $champ;
//             $pts[] = "?";
//             $valeurs[] = $valeur;
//         }