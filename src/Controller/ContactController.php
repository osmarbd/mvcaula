<?php


namespace Code\Controller;

use Code\View\View;

class ContactController
{
    public function index()
    {
        $view = new View('site/contact.php');
        $view->name = "Controller do Contato";
        return $view->render();
    }
}