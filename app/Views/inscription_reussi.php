<!-- app/Views/inscription_reussie.php -->
<html>
<body>
    <h1><?= esc($message) ?></h1> <!-- Assurez-vous que $message est bien passé à la vue -->
    <a href="<?= base_url('/compte/compte_accueil'); ?>" class="btn btn-primary">Retour à l'Accueil</a>
</body>
</html>
