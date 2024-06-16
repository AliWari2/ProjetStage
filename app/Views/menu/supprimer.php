<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer des Menus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f8;
            padding-top: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: auto;
        }
        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 25px;
        }
        .table {
            margin-top: 20px;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0056b3;
            border-color: #004085;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Supprimer des Menus</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th> 
                    <th>Stock</th>
                    <th>Catégorie</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menus as $menu): ?>
                    <tr>
                        <td><?= $menu['nom'] ?></td>
                        <td><?= $menu['description'] ?></td>
                        <td><?= $menu['prix'] ?> €</td>
                        <td><?= $menu['stock'] ?></td>
                        <td><?= $menu['categorie'] ?></td>
                        <td>
                            <a href="#" class="btn btn-danger" onclick="confirmSuppression('<?= base_url("menu/effacer/{$menu['produit_id']}") ?>')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="<?= base_url('/compte/compte_accueil'); ?>" class="btn btn-primary">Retour à l'accueil</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function confirmSuppression(url) {
            if (confirm("Êtes-vous sûr de vouloir supprimer ce menu ? Cette action est irréversible.")) {
                window.location.href = url;
            }
        }
    </script>
</body>
</html>
