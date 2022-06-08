<?php

function getDatabaseConfig(): array
{
    return [
        "database" => [
            "test" => [
                "url" => "mysql:host=localhost;dbname=db_rusun_test",
                "username" => "root",
                "password" => ""
            ],
            "prod" => [
                "url" => "mysql:host=localhost;dbname=db_rusun",
                "username" => "root",
                "password" => ""
            ]
        ]
    ];
}
