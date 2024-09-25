<?php

namespace Code\Controller;

use Code\View\View;

class HomeController
{
    public function index()
    {
        $view = new View('site/index.php');
        $view->name = "Controller do Home2";
        return $view->render();
    }

}