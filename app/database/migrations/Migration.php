<?php
namespace App\database\migrations;
require 'vendor/autoload.php';
class Migration
{
    public $pdo;
    protected $up;
    protected $down;
    protected $table;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function up()
    {
        echo $this->pdo->exec($this->up);
    }
    public function down()
    {
        echo $this->pdo->exec($this->down);
    }
}

