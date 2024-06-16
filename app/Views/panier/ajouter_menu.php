<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter des Menus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Couleur de fond légère */
            color: #333; /* Couleur de texte principale */
            font-family: 'Open Sans', sans-serif; /* Police de caractères */
            padding-top: 50px; /* Espace en haut de la page */
        }
        .container {
            background: white; /* Fond blanc pour le conteneur */
            border-radius: 8px; /* Coins arrondis */
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); /* Ombre subtile */
            padding: 20px; /* Padding interne */
            max-width: 600px; /* Largeur maximale */
            margin: auto; /* Centrage */
        }
        h1 {
            color: #007bff; /* Couleur de titre */
            text-align: center; /* Titre centré */
        }
        label {
            font-weight: bold; /* Texte en gras pour les labels */
        }
        .btn-primary {
            background-color: #007bff; /* Couleur principale pour le bouton */
            border: none; /* Pas de bordure */
        }
        .btn-secondary {
            margin-top: 20px; /* Marge au-dessus du bouton retour */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ajouter un Nouveau Menu</h1>
        <form action="<?= base_url('/panier/enregistrer_menu'); ?>" method="post">
            <div class="form-group">
                <label for="nom">Nom du Plat</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="text" class="form-control" id="prix" name="prix" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>
            <div class="form-group">
                <label for="categorie">Catégorie</label>
                <input type="text" class="form-control" id="categorie" name="categorie" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter au Menu</button>
            <a href="<?= base_url('/compte/compte_accueil'); ?>" class="btn btn-secondary">Retour à l'Accueil</a>
        </form>
    </div>
</body>
</html>
