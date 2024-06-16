<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Commandes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1 {
            margin-bottom: 20px;
            color: #0056b3;
        }
        .table {
            background-color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        thead th {
            background-color: #007bff;
            color: white;
            border-bottom: none;
        }
        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tbody tr:hover {
            background-color: #e9ecef;
        }
        td, th {
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }
        .btn-info {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-info:hover {
            color: #fff;
            background-color: #138496;
            border-color: #117a8b;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Commandes</h1>
        <a href="<?= base_url('/compte/compte_accueil'); ?>" class="btn btn-primary mb-3">Retour à l'Accueil</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Commande ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Date Commande</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($commandes as $commande): ?>
                <tr>
                    <td><?= $commande->commande_id ?></td>
                    <td><?= $commande->nom ?></td>
                    <td><?= $commande->prenom ?></td>
                    <td><?= $commande->email ?></td>
                    <td><?= $commande->date_commande ?></td>
                    <td><?= $commande->statut ?></td>
                    <td>
                        <a href="<?= base_url('/panier/voir_commande/' . $commande->commande_id); ?>" class="btn btn-info">Voir Détails</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
