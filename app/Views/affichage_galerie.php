<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie - M'hira</title>
    <link rel="stylesheet" href="<?php echo base_url('sport/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/jquery-ui.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/aos.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/style.css'); ?>">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .menu-container {
            padding: 50px 0;
        }
        .menu-item {
            text-align: center;
            margin-bottom: 30px;
            transition: transform 0.3s;
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .menu-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .menu-item img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            transition: transform 0.3s;
        }
        .menu-item img:hover {
            transform: scale(1.1);
        }
        .menu-item h3 {
            font-size: 24px;
            margin-top: 15px;
            color: #333;
        }
        .menu-item p {
            font-size: 16px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="site-section menu-container" data-aos="fade-up">
        <div class="container">
            <div class="row">
            <?php foreach ($menus as $menu) : ?>
                <div class='col-md-4'>
                    <div class='menu-item' data-aos='fade-up' data-aos-delay='100'>
                        <!-- Construction du chemin de l'image directement dans l'attribut src -->
                        <img src="<?= base_url('uploads/') . $menu['image'] ?>" alt="<?= esc($menu['titre']); ?>">
                        <h3><?= esc($menu['titre']); ?></h3>
                        <p><?= esc($menu['description']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>


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
</body>
</html>
