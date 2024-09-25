<?php


namespace Code\Controller;


use Code\View\View;

class AboutController
{
    private $id;

    public function index()
    {
        $view = new View('site/about.php');
        $view->name = "Sobre a Empresa";
        return $view->render();
    }

    public function show($id)
    {
        $view = new View('site/about.php');
        $view->id = $id;
        return $view->render();
    }
}