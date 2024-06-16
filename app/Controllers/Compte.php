<?php

namespace App\Controllers;

use App\Models\Db_model;
use App\Models\Utilisateur_model;
use CodeIgniter\Controller;

class Compte extends Controller
{
    public function index()
    {
        return view('compte/login'); // Charge la vue de connexion
    }

    public function login()
{
    $session = session();
    $model = new Db_model();
    $email = $this->request->getVar('email');
    $mot_de_passe = $this->request->getVar('mot_de_passe');

    try {
        if (empty($email) || empty($mot_de_passe)) {
            throw new \Exception('Email ou mot de passe manquant.');
        }

        $data = $model->where('email', $email)->first();

        if (!$data) {
            throw new \Exception('Email non trouvé.');
        }

        // Log pour débogage
        log_message('debug', 'Data Retrieved: ' . json_encode($data));

        if (!password_verify($mot_de_passe, $data['mot_de_passe'])) {
            throw new \Exception('Mot de passe incorrect.');
        }

        // Initialise les données de session
        $ses_data = [
            'utilisateur_id' => $data['utilisateur_id'],
            'nom' => $data['nom'],
            'email' => $data['email'],
            'logged_in' => TRUE
        ];
        $session->set($ses_data);

        return redirect()->to('compte/compte_accueil');
    } catch (\Exception $e) {
        echo "Erreur: " . $e->getMessage();
        exit;
    }
}


    public function compte_accueil()
    {
        return //view('templates/haut.php')
            view('compte/compte_accueil');
            // Charge la vue 'compte_accueil'
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/compte');
    }
    public function loadMessages()
{
    $model = new \App\Models\MessageModel();
    $messages = $model->findAll();
    return $this->response->setJSON($messages);
}
public function inscription() {
     return view('inscription');
}

public function register() {
    $model = new Utilisateur_model();
    $data = [
        'nom' => $this->request->getPost('nom'),
        'email' => $this->request->getPost('email'),
        'mot_de_passe' => password_hash($this->request->getPost('mot_de_passe'), PASSWORD_DEFAULT)
    ];

    $result = $model->insert_user($data);

    if ($result) {
        $viewData = ['message' => 'Inscription réussie!'];
        return view('inscription_reussi', $viewData);
    } else {
        return "Erreur lors de l'inscription. Vue non chargée.";
    }
}

}
