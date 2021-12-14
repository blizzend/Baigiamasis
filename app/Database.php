<?php

namespace Imones;

use PDO;
use PDOException;

class Database {
    private static $connection = 'mysql:host=78.62.60.128';
    private static $user = 'robertas';
    private static $password = 'ropke';
    private static $database = 'robertas';
    private static $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ];
    public static function connect() {
        try {
            return new PDO(
                self::$connection. ';dbname='.self::$database,
                self::$user,
                self::$password,
                self::$options
            );
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
}