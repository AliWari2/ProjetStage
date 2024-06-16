<!DOCTYPE html>
<html lang="en">
<head>
    <title>M'hira &mdash; Boulangerie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- External CSS -->
    <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: 'Mukta', sans-serif;
        }
        .site-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
        .img-fluid.rounded {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .img-fluid.rounded-circle {
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .text-black {
            color: #333;
            font-size: 2rem;
            font-weight: bold;
        }
        .lead {
            font-size: 1.25rem;
            color: #555;
            line-height: 1.6;
        }
        .text-center {
            text-align: center;
            font-weight: bold;
        }
        .pl-md-5, .pr-md-5 {
            padding-left: 3rem;
            padding-right: 3rem;
        }
        .container {
            max-width: 1100px;
            margin: auto;
        }
        .row .col-6 {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .row .col-6 img {
            margin-bottom: 10px;
        }
        .site-navbar {
            background: rgba(0, 0, 0, 0.8);
        }
        .site-navbar .site-logo img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        .site-navbar .site-menu a {
            color: #fff;
            padding: 10px 20px;
            display: block;
            text-transform: uppercase;
            font-weight: bold;
        }
        .site-navbar .site-menu a:hover {
            color: #ffd700;
        }
        .site-blocks-cover {
            background-size: cover;
            background-attachment: fixed;
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .site-blocks-cover.overlay {
            background-size: cover;
            background-attachment: fixed;
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .site-blocks-cover .container {
            position: relative;
            z-index: 2;
        }
        .site-blocks-cover .text-center,
        .site-blocks-cover .text-md-left {
            color: #fff;
        }
        .img-enhanced {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .img-enhanced img {
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .img-enhanced:hover img {
            transform: scale(1.05);
        }
        .img-enhanced:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .img-circle-enhanced img {
            border-radius: 50%;
            transition: transform 0.3s ease;
        }
        .img-circle-enhanced:hover img {
            transform: scale(1.1);
        }
        .img-circle-enhanced:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .site-mobile-menu {
            display: none;
        }
        @media (max-width: 768px) {
            .site-mobile-menu {
                display: block;
            }
            .site-navbar .site-menu {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-logo">
                    <a href="#"><img src="sport/images/cookie.jpg" alt="Image"></a>
                </div>
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar absolute transparent" role="banner">
            <div class="py-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-3"></div>
                        <div class="col-6 col-md-9 text-right">
                            <div class="d-inline-block">
                                <a href="#" class="text-secondary p-2 d-flex align-items-center"></a>
                            </div>
                            <div class="d-inline-block">
                                <a href="#" class="text-secondary p-2 d-flex align-items-center"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
                <div class="container position-relative">
                    <div class="site-logo">
                        <a href="index.html">
                            <img src="sport/images/cookie.jpg" alt="Logo Cookie">
                        </a>
                    </div>
                    <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3">
                        <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
                    </div>
                    <ul class="site-menu js-clone-nav d-none d-md-block">
                        <li><a href="<?php echo base_url('/'); ?>">Accueil</a></li>
                        <li><a href="<?php echo base_url('/menu'); ?>">Menu</a></li>
                        <li><a href="<?php echo base_url('/galerie')?>">Galerie</a></li>
                        <li><a href="<?php echo base_url('/contact'); ?>">Contact</a></li>
                        <li><a href="<?php echo base_url('/compte'); ?>">Connexion</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="site-blocks-cover overlay" style="background-image: url('sport/images/mhira.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                        <!-- Ajoutez ici votre contenu pour la section de couverture -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
