<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_login extends Model
{
    protected $table = "user";
    protected $primaryKey = "username";
    protected $allowedFields = ['username', 'password'];

}
