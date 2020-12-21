<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use App\Libraries\MySql;

$mysql = new MySql;

var_dump($mysql->index());
