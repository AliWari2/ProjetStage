<?php

namespace App\Controllers;

use App\Models\Db_model;
use App\Models\ProduitModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    public function index(): string
    {
        return view('templates/haut.php')
            .view('affichage_home')
            .view('templates/bas.php');
    }

    public function galerie(): string
    {
        return view('templates/haut.php')
            .view('affichage_galerie')
            .view('templates/bas.php');
    }

    public function contact(): string
    {
        return view('templates/haut.php')
            .view('affichage_contact')
            .view('templates/bas.php');
    }
    public function menu() : string
    {
        $model = new ProduitModel();
        $data['produits'] = $model->findAll();
        
        return view('templates/haut.php')
               .view('affichage_menu', $data)
               .view('templates/bas.php');
    }    
}
