<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table         = 'users';
    protected $allowedFields = [
        'username', 'login', 'password','role','id'
    ];
    protected $returnType    = 'App\Entities\User';
    protected $useTimestamps = true;
}