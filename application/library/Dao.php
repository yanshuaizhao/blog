<?php

class Dao
{
    protected static $instance;

    protected function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function db()
    {
        $config = Yaf_Application::app()->getConfig();
        $database = new Medoo([
            // required
            'database_type' => 'mysql',
            'database_name' => $config['mysql']['dbname'],
            'server' => $config['mysql']['host'],
            'username' => $config['mysql']['root'],
            'password' => $config['mysql']['passwd'],

            // [optional]
            'charset' => 'utf8',
            'port' => $config['mysql']['port'],

            // [optional] Table prefix
            //'prefix' => 'PREFIX_',

            // [optional] Enable logging (Logging is disabled by default for better performance)
            'logging' => true,

            // [optional] MySQL socket (shouldn't be used with server and port)
            //'socket' => '/tmp/mysql.sock',

            // [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
            'option' => [
                PDO::ATTR_CASE => PDO::CASE_NATURAL
            ],

            // [optional] Medoo will execute those commands after connected to the database for initialization
            'command' => [
                'SET SQL_MODE=ANSI_QUOTES'
            ]
        ]);

        return $database;
    }

}
