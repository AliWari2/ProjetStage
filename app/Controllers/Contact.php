<?php

namespace App\Controllers;

use App\Models\MessageModel;
use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        // Affiche la page de contact
        echo view('/contact');
    }

    public function saveMessage()
    {
        $model = new \App\Models\MessageModel();

        $data = [
            'prenom' => $this->request->getPost('prenom', FILTER_SANITIZE_STRING),
            'nom' => $this->request->getPost('nom', FILTER_SANITIZE_STRING),
            'email' => $this->request->getPost('email', FILTER_SANITIZE_EMAIL),
            'sujet' => $this->request->getPost('sujet', FILTER_SANITIZE_STRING),
            'message' => $this->request->getPost('message', FILTER_SANITIZE_STRING),
        ];

        if ($model->save($data)) {
            return redirect()->to('contact')->with('success', 'Message envoyé avec succès.');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de lenvoi du message.');
        }
    }

    // Dans le contrôleur Compte ou Contact
    public function showMessages()
{
    $model = new \App\Models\MessageModel();
    $data['messages'] = $model->findAll();

    return view('compte/detail_message', $data);
}

    

}
