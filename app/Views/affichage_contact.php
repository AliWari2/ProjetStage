<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - M'hira</title>
    <link rel="stylesheet" href="<?php echo base_url('sport/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/jquery-ui.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/style.css'); ?>">
    <style>
        /* Styles personnalisés */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        .container.contact-section {
            padding: 60px 0;
        }
        .contact-info h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }
        .contact-info p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .contact-form h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .contact-form .form-control {
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .contact-form button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .opening-hours h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }
        .opening-hours table {
            width: 100%;
            border-collapse: collapse;
        }
        .opening-hours th, .opening-hours td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .opening-hours th {
            background-color: #f1f1f1;
            font-weight: bold;
            text-align: left;
        }
        /* Carte Google Maps */
        #map {
            height: 400px;
            margin-top: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container contact-section" data-aos="fade-up">
    <div class="row">
        <div class="col-md-6 contact-info">
            <h3>Contactez-nous</h3>
            <p><strong>Adresse :</strong> 64 Rue de Glasgow, Brest</p>
            <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
            <p><strong>Email :</strong> contact@mira.fr</p>
        </div>
        <div class="col-md-6 contact-form">
            <h3>Envoyez-nous un message</h3>
            <form action="<?= base_url('contact/saveMessage') ?>" method="POST">
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="sujet">Sujet</label>
                    <input type="text" id="sujet" name="sujet" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit">Envoyer le message</button>
            </form>
        </div>
    </div>

    <div class="opening-hours">
        <h3>Horaires d'ouverture</h3>
        <table>
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Horaires</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lundi</td>
                    <td>7h00 - 21h00</td>
                </tr>
                <tr>
                    <td>Mardi</td>
                    <td>7h00 - 21h00</td>
                </tr>
                <tr>
                    <td>Mercredi</td>
                    <td>7h00 - 21h00</td>
                </tr>
                <tr>
                    <td>Jeudi</td>
                    <td>7h00 - 21h00</td>
                </tr>
                <tr>
                    <td>Vendredi</td>
                    <td>7h00 - 21h00</td>
                </tr>
                <tr>
                    <td>Samedi</td>
                    <td>7h00 - 21h00</td>
                </tr>
                <tr>
                    <td>Dimanche</td>
                    <td>7h00 - 21h00</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Carte Google Maps -->
<div id="map"></div>

<!-- External JS -->
<script src="<?php echo base_url('sport/js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?php echo base_url('sport/js/jquery-migrate-3.0.1.min.js'); ?>"></script>
<script src="<?php echo base_url('sport/js/jquery-ui.js'); ?>"></script>
<script src="<?php echo base_url('sport/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('sport/js/aos.js'); ?>"></script>
<script>
    AOS.init();

    // Fonction d'initialisation de la carte Google Maps
    function initMap() {
        // Coordonnées du lieu
        var location = {lat: 48.390394, lng: -4.486076};
        
        // Création de la carte
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15, // Niveau de zoom
            center: location // Centre de la carte sur les coordonnées spécifiées
        });
        
        // Ajout d'un marqueur pour indiquer l'emplacement sur la carte
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
<!-- Charger l'API Google Maps -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API&callback=initMap"></script>
</body>
</html>

