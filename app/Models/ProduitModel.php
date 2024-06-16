<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduitModel extends Model
{
    protected $table = 'Produits';
    protected $primaryKey = 'produit_id';
    protected $allowedFields = ['nom', 'description', 'prix', 'stock'];
}
