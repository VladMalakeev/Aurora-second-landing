<?php
class DataBase
{
    private static $instance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$instance == null) {
            $host = 'localhost';
            $db = 'myhealth_aurora';
            $user = 'myhealth_aurora';
            $pass = 'whaterisalife';
            $charset = 'utf8';
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $db = new PDO($dsn, $user, $pass);
            $db->query("SET NAMES utf8");
            self::$instance = $db;
        }
        return self::$instance;
    }

    public static function createTables()
    {
        $db = self::getInstance();
        $webinar = "CREATE TABLE IF NOT EXISTS webinar(
         id_admin int(11) AUTO_INCREMENT primary key,
         name varchar (255),
         email varchar (255),
         phone varchar (255)";
        $db->exec($webinar);
    }
}