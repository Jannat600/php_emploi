<?php

namespace src;

class Router{
    public function request(){
        $path=__DIR__ . '/config/routes.json';
        $routes= file_get_contents($path);
        $routes=json_decode($routes);
      
        if(isset($_GET['action'])){
            
            foreach ($routes as $route)
            {
                if($route->action == $_GET['action'])
                {  
                    $route->Controller;
                    $Controller = $route->Controller;
                    $Controller=explode('::',$Controller);
                    $Controller_class = $Controller[0];
                    $Controller_class = "Controller\\".$Controller[0];
                    $Controller_method = $Controller[1];
                    $Controller_Obj= new $Controller_class();

                    return $Controller_Obj-> $Controller_method;
                    //l'idee est de faire une instantiation dynamique d'une classe
                }
            }
        }
    }
}