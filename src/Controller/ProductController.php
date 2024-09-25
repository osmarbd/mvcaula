<?php


namespace Code\Controller;
use Code\DB\Connection;
use Code\Entity\Product;
use Code\View\View;

class ProductController
{
    public function index()
    {
        $pdo = Connection::getInstance();
        $view = new View('site/products.php');
        $view->products = (new Product($pdo))->findAll();

        return $view->render();

    }

    public function show($id)
    {
        //$id = (int)$id;
        $pdo = Connection::getInstance();
        $view = new View('site/product.php');
        $view->product = (new Product($pdo))->find($id);
        //var_dump((new Product($pdo))->find($id));
        return $view->render();
    }

    public function insert()
    {
        $pdo = Connection::getInstance();
        var_dump((new Product($pdo))->insert(
            [
                'name' => 'Teste',
                'price' => 99.99,
                'amount' => 10,
                'description' => 'Teste Teste',
                'img' => 'default.png'
            ]
        ));
    }

    public function update()
    {
        $pdo = Connection::getInstance();
        var_dump((new Product($pdo))->update(
            [
                'id' => 15,
                'name' => 'Teste2',
                'price' => 199.99,
                'amount' => 12,
                'description' => 'Teste2 Teste2',
                'img' => 'default2.png'
            ]
        ));
    }

    public function delete()
    {
        $pdo = Connection::getInstance();
        var_dump((new Product($pdo))->delete(15));
    }


}