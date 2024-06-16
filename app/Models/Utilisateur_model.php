<?php
namespace App\Models;

use CodeIgniter\Model;

class Utilisateur_model extends Model {
    protected $table = 'utilisateurs';  // Assurez-vous que le nom de la table est correct
    protected $allowedFields = ['nom', 'email', 'mot_de_passe'];

    public function insert_user($data) {
        if ($this->insert($data)) {
            return $this->insertID();  // Retourne l'ID de l'insertion
        } else {
            return false;
        }
    }
}

