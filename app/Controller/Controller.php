<?php

namespace Controller;
use Repository\Repository;
use Entity\Model;
use View\ViewManager;

class Controller
{

    
    protected function showErreur($message, $page)
    {
        $ViewManager= new ViewManager();
        echo '<script type="text/javascript">';
        echo 'alert("' . $message . '");';
        echo '</script>';
        $ViewManager->render($page);
    }
    
 

}