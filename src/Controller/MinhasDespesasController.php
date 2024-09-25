<?php


namespace Code\Controller;
use Code\DB\Connection;
use Code\Entity\Despesa;
use Code\View\View;

class MinhasDespesasController
{
    public function index()
    {
        var_dump((new Despesa(Connection::getInstance()))->findAll());
    }

    public function inserir()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST'){
            $data = $_POST;
            $gasto = new Despesa(Connection::getInstance());
            $gasto->insert($data);
            return header('Location: ' . HOME . '/minhasdespesas');
        }
        $view = new View('despesas/novadespesa.php');
        return $view->render();
    }

}