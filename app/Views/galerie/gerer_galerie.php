<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gérer la Galerie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f8;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 20px;
        }
        .table {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .table thead th {
            background-color: #007bff;
            color: white;
        }
        .table tbody td {
            vertical-align: middle;
        }
        img {
            width: auto;
            max-height: 100px;
            border-radius: 5px;
        }
        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="mb-4">Gérer la Galerie</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($galerie as $item): ?>
            <tr>
                <td><img src="<?= base_url('uploads/') . $item['image'] ?>" alt="Image de galerie"></td>
                <td><?= esc($item['titre']) ?></td>
                <td><?= esc($item['description']) ?></td>
                <td>
                    <a href="<?= base_url("galerie/supprimer/{$item['id']}") ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette image ?');">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url('/compte/compte_accueil'); ?>" class="btn btn-primary">Retour à l'Accueil</a>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
