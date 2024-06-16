<?php

namespace App\Controllers;

use App\Models\ProduitModel;
use CodeIgniter\Controller;

class Panier extends Controller
{
    public function index()
    {
        $session = session();
        $panier = $session->get('panier') ?? [];
        return view('panier/afficher', ['panier' => $panier]);
    }


    public function ajouter()
{
    $session = session();
    $model = new ProduitModel();
    $produit_id = $this->request->getPost('produit_id');
    $quantite = $this->request->getPost('quantite');

    if (empty($produit_id) || empty($quantite) || $quantite < 1) {
        return $this->response->setJSON(['error' => 'Paramètres invalides pour l’ajout au panier.']);
    }

    $produit = $model->find($produit_id);
    if (!$produit) {
        return $this->response->setJSON(['error' => 'Produit non trouvé.']);
    }

    $panier = $session->get('panier') ?? [];
    if (isset($panier[$produit_id])) {
        // Produit déjà dans le panier, augmentez la quantité
        $panier[$produit_id]['quantite'] += $quantite;
    } else {
        // Nouveau produit, créez une nouvelle entrée
        $panier[$produit_id] = [
            'id' => $produit_id,
            'nom' => $produit['nom'],
            'prix' => $produit['prix'],
            'quantite' => $quantite
        ];
    }

    $session->set('panier', $panier);
    return $this->response->setJSON(['success' => 'Produit ajouté au panier avec succès.']);
}

       
public function retirer($cartItemId)
{
    $session = session();
    $panier = $session->get('panier');

    if (isset($panier[$cartItemId])) {
        unset($panier[$cartItemId]);
        $session->set('panier', $panier);
        return redirect()->to('/panier')->with('success', 'Produit retiré du panier.');
    } else {
        return redirect()->to('/panier')->with('error', 'Produit non trouvé dans le panier.');
    }
}

    public function vider()
    {
        $session = session();
        $session->remove('panier');
        $session->setFlashdata('success', 'Le panier a été vidé.');
        return redirect()->to('/panier');
    }
    public function afficher()
    {
        return view('panier/afficher');
    }
    public function commander()
{
    $session = session();
    $panier = $session->get('panier');
    $db = \Config\Database::connect();

    if (!empty($panier)) {
        $db->transStart();

        $dataCommande = [
            'utilisateur_id' => $session->has('user_id') ? $session->get('user_id') : null,
            'email' => $this->request->getPost('email'),  // Assurez-vous que ces noms correspondent à ceux du formulaire
            'nom' => $this->request->getPost('nom'),
            'prenom' => $this->request->getPost('prenom'),
            'date_commande' => date('Y-m-d H:i:s'),
            'statut' => 'commandé'
        ];
        $db->table('Commandes')->insert($dataCommande);
        $commandeId = $db->insertID();

        foreach ($panier as $item) {
            $dataProduit = [
                'commande_id' => $commandeId,
                'produit_id' => $item['id'],
                'quantite' => $item['quantite']
            ];
            $db->table('Commande_Produits')->insert($dataProduit);
        }

        $db->transComplete();

        if ($db->transStatus() === false) {
            $db->transRollback();
            return redirect()->to('/panier')->with('error', 'Erreur lors de la commande.');
        } else {
            $session->remove('panier');
            return redirect()->to('/panier')->with('success', 'Votre commande a été placée avec succès.');
        }
    } else {
        return redirect()->to('/panier')->with('error', 'Votre panier est vide.');
    }
}
    public function afficherCommandes()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM Commandes ORDER BY date_commande DESC');
        $commandes = $query->getResult();

        echo view('panier/afficher_commandes', ['commandes' => $commandes]);
    }
    public function ajouterMenu()
    {
        // Afficher le formulaire pour ajouter des menus
        echo view('panier/ajouter_menu');
    }
    public function enregistrerMenu()
    {
        $db = \Config\Database::connect();
        $data = [
            'nom' => $this->request->getPost('nom'),
            'description' => $this->request->getPost('description'),
            'prix' => $this->request->getPost('prix'),
            'stock' => $this->request->getPost('stock'),
            'categorie' => $this->request->getPost('categorie')
        ];

        $db->table('Produits')->insert($data);
        return redirect()->to('/panier/ajouter_menu')->with('success', 'Menu ajouté avec succès.');
    }
    public function mettre_a_jour()
    {
        $session = session();
        $produit_id = $this->request->getPost('produit_id');
        $quantite = $this->request->getPost('quantite');

        $panier = $session->get('panier');
        if (isset($panier[$produit_id]) && $quantite >= 1) {
            $panier[$produit_id]['quantite'] = $quantite;
            $session->set('panier', $panier);
            return redirect()->to('/panier')->with('success', 'Quantité mise à jour.');
        } else {
            return redirect()->to('/panier')->with('error', 'Erreur lors de la mise à jour de la quantité.');
        }
    }
    public function voirCommande($commande_id)
{
    $db = \Config\Database::connect();
    $sql = "SELECT cp.quantite, p.produit_id, p.nom, p.description, p.prix, p.categorie
            FROM Commande_Produits cp
            JOIN Produits p ON cp.produit_id = p.produit_id
            WHERE cp.commande_id = ?";
    $query = $db->query($sql, [$commande_id]);
    $detailsCommande = $query->getResult();

    // Passez les détails à la vue
    echo view('panier/details_commande', ['details' => $detailsCommande]);
}



}
