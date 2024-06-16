<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'ajout</title>
</head>
<body>
    <h1>Confirmation d'ajout au panier</h1>
    <p><?= esc($nom) ?> a été ajouté à votre panier.</p>
    <p>Quantité: <?= esc($quantite) ?></p>
    <p>Total: <?= esc($total) ?> €</p>
    <a href="<?= site_url('/panier') ?>">Voir le panier</a> | <a href="<?= site_url('/') ?>">Continuer vos achats</a>
</body>
</html>
