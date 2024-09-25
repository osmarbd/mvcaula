<?php


namespace Code\DB;


class Connection
{
    private static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(is_null(self::$instance)){
            self::$instance = new \PDO('mysql:dbname=sitecatalogo;host=127.0.0.1;port=3307',
                'root',
                'obtz76');
            self::$instance->exec('SET NAMES UTF8');
        }
        return self::$instance;
    }
}