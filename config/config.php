<?php

function getDatabaseConfig(): array
{
    return [
        "database" => [
            "test" => [
                "url" => "mysql:host=localhost;dbname=noveldb_test",
                "username" => "root",
                "password" => ""
            ],
            "prod" => [
                "url" => "mysql:host=localhost;dbname=noveldb",
                "username" => "root",
                "password" => ""
            ]
        ]
    ];
}
