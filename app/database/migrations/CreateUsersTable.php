<?php
namespace App\database\migrations;
require 'vendor/autoload.php';
require_once('app/database/migrations/Migration.php');
use \App\database\migrations\Migration;
class CreateUsersTable extends Migration
{
    protected $up = "
        CREATE TABLE if not exists users (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(200),
            password VARCHAR(200),
            name VARCHAR(100),
            lastname VARCHAR(100),
            token VARCHAR(200) 
        );
    ";

    protected $down = "
        DROP TABLE if exists users;
    ";
}