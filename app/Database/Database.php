<?php

namespace App\Database;
use Medoo\Medoo;


class Database
{

    public static function connect()
    {
        $config = require __DIR__ . '/config.php';
        return new Medoo($config);
    }

}