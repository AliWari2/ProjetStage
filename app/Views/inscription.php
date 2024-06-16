<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            background-color: #f4f4f8; /* Couleur de fond plus sobre */
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15); /* Ombre plus douce */
            max-width: 500px;
            margin: auto;
        }
        h1 {
            color: #007bff; /* Bleu Bootstrap standard */
            margin-bottom: 25px;
        }
        label, .input-label {
            font-weight: bold;
            color: #333;
        }
        .form-control, input, textarea {
            border-radius: 5px; /* Bords moins arrondis */
            margin-bottom: 15px;
        }
        .btn-primary {
            width: 100%; /* Bouton en pleine largeur */
            padding: 10px;
            font-size: 16px;
        }
        .btn-back {
            margin-top: 20px;
            background-color: #6c757d; /* Gris Bootstrap */
            border: none;
        }
        .btn-back:hover {
            background-color: #5a6268; /* Gris foncé au survol */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Inscription</h1>
        <form action="<?= base_url('compte/register') ?>" method="post">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe:</label>
                <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
        <a href="<?= base_url('/compte/compte_accueil'); ?>" class="btn btn-back">Retour à l'Accueil</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
