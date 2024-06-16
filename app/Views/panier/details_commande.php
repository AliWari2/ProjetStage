<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de la Commande</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f7f7f7;
            padding-top: 40px;
            padding-bottom: 40px;
            color: #333;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            font-weight: 700;
            color: #0056b3;
        }
        .table {
            margin-top: 20px;
        }
        .table th {
            background-color: #007bff;
            color: #fff;
        }
        .table td {
            vertical-align: middle;
        }
        .btn-back {
            background-color: #6c757d;
            color: white;
            font-weight: 600;
        }
        .btn-back:hover {
            color: white;
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Détails de la Commande</h1>
        <a href="<?= base_url('/panier/afficher_commandes'); ?>" class="btn btn-back">Retour à la liste des commandes</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Produit ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Catégorie</th>
                    <th>Quantité</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($details as $detail): ?>
                    <tr>
                        <td><?= $detail->produit_id ?></td>
                        <td><?= esc($detail->nom) ?></td>
                        <td><?= esc($detail->description) ?></td>
                        <td><?= number_format($detail->prix, 2) ?> €</td>
                        <td><?= esc($detail->categorie) ?></td>
                        <td><?= $detail->quantite ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
