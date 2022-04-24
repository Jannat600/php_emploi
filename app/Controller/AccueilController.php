<?php

namespace Controller;
use View\ViewManager;

class AccueilController{

public function index()
{
        $viewManager= new ViewManager();
        $viewManager->render("\Auth\login.view");
}

}