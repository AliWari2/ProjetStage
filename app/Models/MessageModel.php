<?php
namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table = 'Messages'; // Nom de la table ajusté
    protected $primaryKey = 'id'; // Définir la clé primaire
    protected $allowedFields = ['id', 'prenom', 'nom', 'email', 'sujet', 'message'];
    protected $useAutoIncrement = true; // Utiliser l'auto-increment pour l'ID
}
