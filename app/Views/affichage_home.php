<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M'hira - Boulangerie Pâtisserie Chocolaterie</title>
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
            color: #333;
            line-height: 1.6;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .site-section {
            padding: 60px 0;
        }
        .site-section h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        .site-section p {
            font-size: 18px;
        }
        .img-enhanced {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .img-enhanced img {
            transition: transform 0.3s ease;
        }
        .img-enhanced img:hover {
            transform: scale(1.05);
        }
        .img-circle-enhanced {
            text-align: center;
            margin-bottom: 20px;
        }
        .img-circle-enhanced img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .img-circle-enhanced img:hover {
            transform: scale(1.1);
        }
        .img-circle-enhanced p {
            margin-top: 10px;
            font-weight: bold;
            font-size: 18px;
            color: #555;
        }
        .site-blocks-cover {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 400px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .text-black {
            color: #2c3e50 !important;
        }
        .lead {
            font-size: 20px;
            font-weight: 300;
            color: #7f8c8d;
        }
    </style>
</head>
<body>

    <div class="site-section" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="img-enhanced">
                        <img src="<?php echo base_url('sport/images/hira.jpg'); ?>" alt="Image" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5">
                    <h2 class="text-black">QUI SOMMES-NOUS ?</h2>
                    <p class="lead">
                        <strong>M'hira</strong> est une boulangerie, pâtisserie, chocolaterie artisanale située à 
                        <strong>64 Rue de Glasgow à BREST</strong>.
                        <br><br>Chez nous, tout est fait maison, chaque produit que nous réalisons est conçu avec toute la passion de nos métiers d’artisans :
                        <br> à découvrir sur notre site et à déguster chez nous !
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2">
                    <div class="site-blocks-cover" style="background-image: url('<?php echo base_url('uploads/hambur.jpg'); ?>');" data-aos="fade"></div>
                </div>
                <div class="col-md-6 pr-md-5">
                    <h2 class="text-black">NOS PRESTATIONS</h2>
                    <div class="row">
                        <div class="col-6 col-md-6 mb-4 img-circle-enhanced">
                            <img src="<?php echo base_url('uploads/sandwich.jpg'); ?>" alt="Boulangerie" class="img-fluid rounded-circle">
                            <p class="text-center">Boulangerie</p>
                        </div>
                        <div class="col-6 col-md-6 mb-4 img-circle-enhanced">
                            <img src="<?php echo base_url('uploads/creme.jpg'); ?>" alt="Pâtisserie" class="img-fluid rounded-circle">
                            <p class="text-center">Pâtisserie</p>
                        </div>
                        <div class="col-6 col-md-6 mb-4 img-circle-enhanced">
                            <img src="<?php echo base_url('uploads/trompeJaune.jpg'); ?>" alt="Pâtisserie" class="img-fluid rounded-circle">
                            <p class="text-center">Pâtisserie</p>
                        </div>
                        <div class="col-6 col-md-6 mb-4 img-circle-enhanced">
                            <img src="<?php echo base_url('uploads/cake.jpg'); ?>" alt="Cake" class="img-fluid rounded-circle">
                            <p class="text-center">Cake</p>
                        </div>
                    </div>
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
</body>
</html>
