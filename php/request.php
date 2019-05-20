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
}

$db = DataBase::getInstance();
$days21data = $db->query("SELECT * FROM landing_21_days WHERE id = 1")->fetch(PDO::FETCH_LAZY);
$days7data = $db->query("SELECT * FROM landing_7_days WHERE id = 1")->fetch(PDO::FETCH_LAZY);