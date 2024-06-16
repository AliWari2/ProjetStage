<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages des clients</title>
    <link rel="stylesheet" href="<?= base_url('sport/css/bootstrap.min.css'); ?>">
</head>
<body>
<div class="container">
    <h1>Messages des clients</h1>
    <?php if (!empty($messages)): ?>
        <div class="list-group">
            <?php foreach ($messages as $message): ?>
                <div class="list-group-item">
                    <!-- Ajout des détails supplémentaires -->
                    <h4 class="list-group-item-heading"><?= esc($message['prenom']) ?> <?= esc($message['nom']) ?></h4>
                    <p><strong>Email:</strong> <?= esc($message['email']) ?></p>
                    <p><strong>Sujet:</strong> <?= esc($message['sujet']) ?></p>
                    <p class="list-group-item-text"><?= esc($message['message']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Aucun message à afficher.</p>
    <?php endif; ?>
    <a href="<?= base_url('/compte/compte_accueil'); ?>" class="btn btn-primary">Retour</a>
</div>
<script src="<?= base_url('sport/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
