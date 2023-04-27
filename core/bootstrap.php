<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

session_start();

require "functions.php";
use App\Core\App;

App::bind('config',require "config.php");

App::bind('database',
    new QueryBuilder(
        Connector::make(App::get('config')['database'])
    )
);