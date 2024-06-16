<?php

namespace App\Models;

use CodeIgniter\Model;

class Db_model extends Model
{
    protected $table = 'Utilisateurs';
    protected $primaryKey = 'utilisateur_id';
    protected $allowedFields = ['nom', 'email', 'mot_de_passe'];
}
