<?php
namespace App\models;
require_once('app/models/Model.php');
require 'vendor/autoload.php';
use app\models\Model;
class UserModel extends Model
{
    protected $table = 'users';
    protected array $fillable = array(
        'lastname',
        'nome',
        'email',
    );
}