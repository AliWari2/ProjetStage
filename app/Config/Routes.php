<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\Compte;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/galerie', 'Galerie::index'); 
$routes->get('/contact', 'Home::contact');
$routes->get('/menu', 'Home::menu');

// Routes pour le contrôleur Compte
$routes->get('/compte', 'Compte::index');
$routes->post('/compte/login', 'Compte::login');
$routes->get('/compte/logout', 'Compte::logout');
$routes->get('/compte/compte_accueil' , 'Compte::compte_accueil');

// Ajout des routes pour la page d'inscription
$routes->get('/compte/inscription', 'Compte::inscription'); // Afficher le formulaire d'inscription
$routes->post('/compte/register', 'Compte::register'); // Traiter les données du formulaire d'inscription

$routes->get('/panier', 'Panier::index');
$routes->get('panier/retirer/(:segment)', 'Panier::retirer/$1');
$routes->get('/panier/vider', 'Panier::vider');
$routes->post('/panier/ajouter', 'Panier::ajouter');
$routes->get('/panier/afficher', 'Panier::afficher');
$routes->post('/panier/commander', 'Panier::commander');
$routes->get('/panier/afficher_commandes', 'Panier::afficherCommandes');
$routes->get('/panier/ajouter_menu', 'Panier::ajouterMenu');
$routes->post('/panier/enregistrer_menu', 'Panier::enregistrerMenu');
$routes->post('/panier/mettre_a_jour', 'Panier::mettre_a_jour');
$routes->get('/galerie/ajouter', 'Galerie::ajouter');
$routes->post('/galerie/enregistrer', 'Galerie::enregistrer');
$routes->get('/panier/voir_commande/(:num)', 'Panier::voirCommande/$1');
$routes->get('contact', 'Contact::index');
$routes->post('contact/saveMessage', 'Contact::saveMessage');
$routes->get('/compte/loadMessages', 'Compte::loadMessages');

$routes->get('/compte/detail_message', 'Contact::showMessages');
$routes->get('/menu/supprimer', 'MenuController::supprimer');
$routes->get('/menu/effacer/(:num)', 'MenuController::effacer/$1');
$routes->get('/galerie/gerer', 'Galerie::gerer');
$routes->get('/galerie/supprimer/(:segment)', 'Galerie::supprimer/$1');
