<?php
namespace App\Controllers;

use App\Models\ProduitModel;

class MenuController extends BaseController
{
    public function supprimer()
    {
        $model = new ProduitModel();
        $data['menus'] = $model->findAll();

        return view('menu/supprimer', $data);  // Assurez-vous de créer cette vue
               
    }

    public function effacer($id)
    {
        $model = new ProduitModel();
        $model->delete($id);
        return redirect()->to('/menu/supprimer')->with('success', 'Menu supprimé avec succès');
    }
}
