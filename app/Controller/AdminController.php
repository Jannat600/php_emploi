<?php

namespace Controller;

use Entity\Emploi;
use View\ViewManager;
use Entity\Filiere;
use Entity\Horaire;
use Entity\Module;
use Entity\Salle;
use Entity\Semestre;
use Repository\Repository;

class AdminController{

public function index()
{      
        $viewManager= new ViewManager();
        $repo= new Repository();
        $con_emp = new EmploiController();
        $emp=new Emploi();
        $fil=new Filiere();
        $emplois= $repo->loadEmplois();
        $viewManager->render("\Admin\panel.view",['emplois'=>$emplois,'username'=>$_GET['username']]);
       
} 

public function create_table()
{
        $viewManager= new ViewManager();
        $repo=new Repository();
        $f = new Filiere();
        $h = new Horaire();
        $mod= new Module();
        $salle= new Salle();
        $sem=new Semestre();
        $col="nom_filiere";
        $enum= "niveau";
        $start="heure_debut";
        $fin="heure_fin";
        $s="code";
        $m= "nom_module";
        $seme= "code";
        $viewManager= new ViewManager();
        $heure_debut=$repo->loadInfo($h,$start);
        $heure_fin=$repo->loadInfo($h,$fin);
        $filiere= $repo->loadInfo($f,$col);
        $module= $repo->loadInfo($mod,$m);
        $semestre= $repo->loadInfo($sem,$seme);
        $niveau = $repo->loadEnum($f,$enum);
        $code= $repo->loadInfo($salle,$s);
        $viewManager->render("\Admin\create_table.view",['filiere'=>$filiere,'niveau'=>$niveau, 'heure_fin'=>$heure_fin,'heure_debut'=>$heure_debut,'code'=>$code,'module'=>$module, 'semestre'=>$semestre,'username'=>$_GET['username']]);
}


}