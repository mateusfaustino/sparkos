<?php 
namespace App\database\migrations;
// require 'vendor/autoload.php';
require_once('app/database/migrations/Migration.php');
require_once('app/database/migrations/CreateUsersTable.php');
use \App\database\migrations\Migration;
use \App\database\migrations\CreateUsersTable;
class AllMigrations extends Migration
{
    public function upAllMigrations()
    {
        (new CreateUsersTable($this->pdo))->up();
    }
    public function downAllMigrations()
    {
        (new CreateUsersTable($this->pdo))->down();
    }

}