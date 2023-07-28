<?php
namespace App\models;
require('config/database.php');
    
class Model
{
    protected $table;
    protected $pdo;
    protected array $fillable = ['*'];
    protected $fields;
    public function __construct()
    {     
        $this->pdo= $pdo;
    }
    public function all()
    {

        echo implode(',',$this->fillable);
    }  
}