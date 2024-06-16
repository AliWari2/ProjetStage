<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Panier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f5f5f5;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .container {
            background: white;
            padding: 20px 25px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        h1 {
            color: #343a40;
            margin-bottom: 30px;
            font-weight: 700;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #e9ecef;
            font-weight: 600;
        }
        .alert {
            margin-top: 20px;
        }
        .btn {
            margin-top: 10px;
            transition: all 0.3s ease;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Votre Panier</h1>
    <?php if (!empty($panier)) : ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($panier as $produit_id => $item) : ?>
                <tr>
                    <td><?= esc($item['nom']) ?></td>
                    <td><?= esc($item['prix']) ?> €</td>
                    <td>
                        <form action="<?= site_url('panier/mettre_a_jour') ?>" method="post" class="form-inline">
                            <input type="hidden" name="produit_id" value="<?= esc($produit_id) ?>">
                            <input type="number" name="quantite" value="<?= esc($item['quantite']) ?>" min="1" class="form-control-sm" style="width: 60px;">
                            <button type="submit" class="btn btn-info btn-sm">Mettre à jour</button>
                        </form>
                    </td>
                    <td><?= esc($item['prix'] * $item['quantite']) ?> €</td>
                    <td>
                        <a href="<?= site_url('panier/retirer/' . $produit_id) ?>" class="btn btn-danger">Retirer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <p><strong>Total : <?= array_sum(array_map(function ($item) { return $item['prix'] * $item['quantite']; }, $panier)) ?> €</strong></p>
        <form id="commandForm" action="<?= site_url('panier/commander') ?>" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="btn-group">
                <a href="<?= base_url('menu'); ?>" class="btn btn-secondary">Retour au Menu</a>
                <a href="<?= site_url('panier/vider') ?>" class="btn btn-warning">Vider le Panier</a>
                <button type="submit" class="btn btn-success">Commander</button>
            </div>
        </form>
    <?php else : ?>
        <p>Votre panier est vide.</p>
        <div class="btn-group">
            <a href="<?= base_url('menu'); ?>" class="btn btn-secondary">Retour au Menu</a>
        </div>
    <?php endif; ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
