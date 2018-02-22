<?php
namespace App\config;
include "config.php";
class database{
    static $pdo;
    static function connection(){
        if (!isset(self::$pdo))
        {
            try
            {
                self::$pdo = new \PDO("mysql: host=".DB_HOST."; dbname=".DB_NAME,DB_USER,DB_PASSWORD);
                echo "connection successfull";
            }
            catch (\PDOException $exception)
            {
                echo "connection fail".$exception->getMessage();
            }
        }
        return self::$pdo;
    }
    static function prepare($sql){
        return self::connection()->prepare($sql);
    }
}