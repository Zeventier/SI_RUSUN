<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertNotNull;

require_once __DIR__ . "/../../classes/Database.php";

class DatabaseTest extends TestCase

{
    public function testConnection()
    {
        $connection = Database::connection();
        self::assertNotNull($connection);
    }

    public function testgetConnectionSingleton()
    {
        $connection1 = Database::connection();
        $connection2 = Database::connection();
        self::assertSame($connection1, $connection2);
    }
}
