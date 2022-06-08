<?php

class Database
{
    public static $pdo;

    public static function connection(string $env = 'prod')
    {
        if (!isset(self::$pdo)) {
            require_once __DIR__ . '/../config/config.php';
            $config = getDatabaseConfig();
            try {
                self::$pdo = new PDO(
                    $config['database'][$env]['url'],
                    $config['database'][$env]['username'],
                    $config['database'][$env]['password']
                );
            } catch (PDOException $e) {
                echo "Connection Failed";
            }
        }
        return self::$pdo;
    }

    public static function prepared($sql)
    {
        return self::connection()->prepare($sql);
    }
}
