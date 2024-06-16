<?php
namespace App\Models;

use CodeIgniter\Model;

class GalerieModel extends Model
{
    protected $table = 'galerie';
    protected $allowedFields = ['titre', 'description', 'image'];
}
