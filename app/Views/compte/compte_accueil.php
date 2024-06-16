<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Compte</title>
    <link rel="stylesheet" href="<?php echo base_url('sport/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/jquery-ui.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/aos.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/style.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .site-navbar {
            background-color: #333;
            padding: 10px 0;
        }
        .site-logo a {
            color: #fff;
            font-size: 24px;
            font-weight: 700;
            text-decoration: none;
        }
        .site-menu {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
        }
        .site-menu li {
            margin: 0 10px;
        }
        .site-menu a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            padding: 5px 10px;
            transition: background-color 0.3s;
        }
        .site-menu a:hover {
            background-color: #555;
            border-radius: 5px;
        }
        .site-section {
            padding: 50px 0;
            text-align: center;
        }
        .welcome-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin: auto;
            max-width: 600px;
        }
        .welcome-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .welcome-container h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }
        .welcome-container p, .welcome-message {
            font-size: 18px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="site-wrap">
        <header class="site-navbar" role="banner">
            <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                <ul class="site-menu">
                    <li><a href="<?php echo base_url('/panier/ajouter_menu'); ?>">Ajouter des Menus</a></li>
                    <li><a href="<?php echo base_url('/panier/afficher_commandes'); ?>">Commandes</a></li>
                    <li><a href="<?php echo base_url('/galerie/ajouter'); ?>">Ajouter Une Galerie</a></li>
                    <li><a href="<?= base_url('/menu/supprimer'); ?>">Supprimer des Menus</a></li>
                    <li><a href="<?= base_url('galerie/gerer'); ?>">Gérer Galerie</a></li>
                    <li><a href="<?= base_url('compte/detail_message'); ?>">Voir les messages des clients</a></li>
                    <li><a href="<?php echo base_url('/compte/inscription'); ?>">Inscription</a></li>
                    <li><a href="<?php echo base_url('/compte/logout'); ?>">Déconnexion</a></li>
                </ul>

        </header>

        <div class="site-section">
            <div class="container">
                <div class="text-center welcome-container" data-aos="fade-up">
                    <h1>Bienvenue à votre compte</h1>
                    <p>Vous êtes maintenant connecté.</p>
                    <?php if (session()->get('logged_in')): ?>
                        <h2 class="welcome-message">Session ouverte ! Bienvenue <?= esc(session()->get('nom')) ?> !</h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- External JS -->
    <script src="<?php echo base_url('sport/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/jquery-migrate-3.0.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/jquery-ui.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/jquery.stellar.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/jquery.countdown.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/aos.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/main.js'); ?>"></script>
    <script>
        AOS.init();
    </script>
    <script>
    document.getElementById('loadMessages').addEventListener('click', function() {
    fetch('/compte/loadMessages')
    .then(response => response.json())
    .then(data => {
        const container = document.getElementById('messagesContainer');
        container.innerHTML = ''; // Clear previous messages
        data.forEach(msg => {
            const messageDiv = document.createElement('div');
            messageDiv.innerHTML = `<strong>Message ID ${msg.id} - ${msg.prenom} ${msg.nom}</strong>: ${msg.message} <br><small>${msg.email}</small>`;
            container.appendChild(messageDiv);
        });
    });
});
</script>

</body>
</html>
