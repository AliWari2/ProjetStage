<?php
namespace App\Controllers;

use App\Models\GalerieModel;

class Galerie extends BaseController
{
    public function index()
    {
        $model = new GalerieModel();
        $data['menus'] = $model->findAll();

        return view('templates/haut.php')
        .view('affichage_galerie', $data);
    }
    public function ajouter()
    {
        echo view('galerie/ajouter_galerie');
    }

    public function enregistrer() {
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName(); // Crée un nom de fichier unique
            $file->move('uploads', $newName);
    
            $data = [
                'titre' => $this->request->getPost('titre'),
                'description' => $this->request->getPost('description'),
                'image' => $newName
            ];
    
            $db = \Config\Database::connect();
            $db->table('galerie')->insert($data);
    
            return redirect()->to(base_url('galerie/ajouter'))->with('success', 'Image ajoutée avec succès.');
        } else {
            return redirect()->to(base_url('galerie/ajouter'))->with('error', 'Erreur lors de l\'upload de l\'image.');
        }
    }
    public function gerer()
    {
        $model = new GalerieModel();
        $data['galerie'] = $model->findAll();

        return view('galerie/gerer_galerie', $data);
    }

    public function supprimer($id)
    {
        $model = new GalerieModel();
        $model->delete($id);

        return redirect()->to(base_url('galerie/gerer'))->with('success', 'Image supprimée avec succès.');
    }
}
