<?php

namespace App\Models;

use CodeIgniter\Model;

class PanierProduitsModel extends Model
{
    protected $table = 'Panier_Produits';
    protected $primaryKey = ['panier_id', 'produit_id'];
    protected $allowedFields = ['panier_id', 'produit_id', 'quantite'];
}
