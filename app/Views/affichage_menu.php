<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Boulangerie M'hira</title>
    <link rel="stylesheet" href="<?php echo base_url('sport/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/jquery-ui.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/aos.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('sport/css/style.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> <!-- FontAwesome -->
    <style>
        body {
            font-family: 'Mukta', sans-serif;
            background-color: #fafafa;
            padding: 20px;
        }
        .header {
            padding: 10px 0;
            text-align: center;
            background: #e1e1e1;
            margin-bottom: 20px;
        }
        .menu-section {
            margin-bottom: 60px;
        }
        .menu-section h2 {
            font-family: 'Georgia', serif;
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 30px;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        .menu-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
            border: 1px solid #cccccc;
            border-radius: 10px;
            margin: 20px;
            background-color: #fff;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .menu-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .menu-item h3 {
            font-family: 'Georgia', serif;
            font-size: 1.6rem;
            color: #333;
            margin: 0 0 10px;
        }
        .menu-item p {
            margin: 0 0 10px;
            font-size: 1rem;
            color: #777;
            text-align: center;
            line-height: 1.5;
        }
        .menu-item span {
            font-size: 1.5rem;
            color: #333;
            font-weight: bold;
        }
        .menu-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: space-between;
        }
        .btn-panier {
            background-color: #3498db;
            border: none;
            color: white;
            padding: 10px 20px;
            text-transform: uppercase;
            border-radius: 5px;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
        }
        .btn-panier:hover {
            background-color: #2980b9;
        }
        .btn-panier i {
            margin-right: 5px;
        }
        @media (max-width: 768px) {
            .menu-grid {
                flex-direction: column;
            }
            .menu-item {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="<?= site_url('panier'); ?>" class="btn-panier"><i class="fas fa-shopping-cart"></i>Voir Panier</a>
    </div>
    <div class="container">
        <div class="menu-section">
            <h2>Nos Pâtisseries</h2>
            <div class="menu-grid">
                <?php foreach ($produits as $produit) : ?>
                <div class="menu-item" data-aos="fade-up">
                    <h3><?= esc($produit['nom']) ?></h3>
                    <p><?= esc($produit['description']) ?></p>
                    <span><?= number_format($produit['prix'], 2) ?> €</span>
                    <form action="<?= site_url('panier/ajouter') ?>" method="post">
                        <input type="hidden" name="produit_id" value="<?= esc($produit['produit_id']) ?>">
                        <input type="number" name="quantite" value="1" min="1">
                        <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                    </form>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('sport/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/jquery-ui.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/aos.js'); ?>"></script>
    <script src="<?php echo base_url('sport/js/custom.js'); ?>"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
