<?php

namespace Repository;

use src\Connexion;
use PDO;
use Entity\Model;
use PDOException;

class Repository
{
    protected $table;
    private $pdo;

    public function columns($table)

    {
        $this->pdo = Connexion::getInstance();
        $result = $this->pdo->query('select * from ' . $table . ' limit 1');
        $fields = array_keys($result->fetch(PDO::FETCH_ASSOC));
        return $fields;
    }



    public function requete(string $sql, array $attributs = null)
    {
        $this->pdo = Connexion::getInstance();
        if ($attributs !== null) {
            $query = $this->pdo->prepare($sql);
            $query->execute($attributs);
            return $query;
        } else {
            return $this->pdo->query($sql);
        }
    }

    public function get_fields(Model $model)
    {
        $t = $model->getProperty();
        unset($t["id"]);
        foreach ($t as $champ => $valeur) {
            $keys[] = $champ;
        }
        $fields = Repository::columns($model->table);
        $tab_champs = (array_intersect($fields, $keys));
        return $tab_champs;
    }
    public function findAll(Model $model)

    {
        $q = "select * from " . $model->table;
        $query = $this->requete($q);
        return $query->fetchAll();
    }

    public function findBy(Model $model, array $criteres)
    {
        $champs = [];
        $valeurs = [];

        foreach ($criteres as $champ => $valeur) {
            $champs[] = "$champ = ?";
            $valeurs[] = $valeur;
        }
        $liste_champs = implode(' AND ', $champs);
        $q = "select * from " . $model->table . " WHERE " . $liste_champs;
        // print_r($liste_champs);
        // print_r($valeurs);
        return $this->requete($q, $valeurs)->fetchColumn();
    }

    public function find($model, int $id)
    {
        $q = "select * from " . $model->table . " WHERE id =" . $id;
        $p = $this->requete($q)->fetch();
    }

    public function create(Model $model)

    {
        $t = $model->getProperty();
        $tab_champs = Repository::get_fields($model);
        $pts = [];
        // print_r($t);
        // print_r($tab_champs);

        foreach ($tab_champs as $champ) {
            $valeurs[] = $t[$champ];
            $pts[] = "?";
        }
        $liste_champs = implode(', ', $tab_champs);
        $liste_inter = implode(', ', $pts);
        $query = "insert into " . $model->table . " (" . $liste_champs . ")VALUES(" . $liste_inter . ")";

        return $this->requete($query, $valeurs);
    }

    public function update(Model $model, int $id)
    {
        $t = $model->getProperty();
        $tab_champs = Repository::get_fields($model);

        foreach ($tab_champs as $champ) {
            $valeurs[] = $t[$champ];
            $pts[] = "?";
        }
        $valeurs[] = $id;
        $liste_champs = implode(', ', $tab_champs);

        $q = "update" . $model->table . " set " . $liste_champs . " WHERE id = ?";
        return $this->requete($q, $valeurs);
    }

    public function delete(Model $model, int $id)

    {
        $q = "delete from {$model->table} WHERE id = ?";
        return $this->requete($q, [$id]);
    }



    public function loadInfo(Model $model, string $col)
    {

        $q = "select DISTINCT " . $col . " from " . $model->table;
        $query = $this->requete($q);

        return  $query->fetchAll(PDO::FETCH_COLUMN);
    }

    public function loadEnum(Model $model, string $col)
    {

        $q = "select column_type as PossibleEnumValues FROM INFORMATION_SCHEMA.COLUMNS WHERE
        TABLE_SCHEMA = 'emploi'  AND TABLE_NAME = '" . $model->table . "' AND COLUMN_NAME = '" . $col . "'";
        $query = $this->requete($q);
        $row = $query->fetch(PDO::FETCH_COLUMN);
        preg_match('/enum\((.*)\)$/', $row, $matches);
        $vals = explode(',', $matches[1]);
        return $vals;
    }
    public function loadSemestre($id)
    {

        $q = "select code from semestre s, filiere f where f.id=s.id and f.id =" . $id;
        $query = $this->requete($q);
        return  $query->fetch();
    }

    public function loadEmplois()
    {

        $q = "select e.id, nom_filiere, date_ex from filiere f, emploi e where f.id=e.id ";
        $query = $this->requete($q);
        return $query->fetchAll();
    }


    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {

            $setter = 'set' . ucfirst($key);

            if (method_exists($this, $setter)) {

                $this->$setter($value);
            }
        }
        return $this;
    }
}
