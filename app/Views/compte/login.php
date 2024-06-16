<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #333645; /* Dark background for an elegant look */
            margin: 0;
            padding-top: 60px; /* Space for fixed navbar */
        }
        .navbar-custom {
            background-color: #ffffff; /* White background for the navbar */
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 0 20px; /* Horizontal padding */
            z-index: 1000;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .navbar-nav a {
            color: #007bff; /* Bootstrap primary color */
            padding: 10px 15px; /* Padding for larger touch targets */
            transition: color 0.3s;
        }
        .navbar-nav a:hover {
            color: #0056b3; /* Darker blue on hover */
            text-decoration: none; /* No underline on hover */
        }
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            margin: auto;
            text-align: center;
        }
        .form-control, .btn {
            border-radius: 10px; /* Rounded borders for inputs and buttons */
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none; /* No border */
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?= base_url('/'); ?>">Accueil</a>
                <a class="nav-item nav-link" href="<?= base_url('/menu'); ?>">Menu</a>
                <a class="nav-item nav-link" href="<?= base_url('/galerie'); ?>">Galerie</a>
                <a class="nav-item nav-link" href="<?= base_url('/contact'); ?>">Contact</a>
            </div>
        </div>
    </nav>
    <div class="login-container">
        <h1>Login</h1>
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('compte/login'); ?>" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe:</label>
                <input type="password" class="form-control" name="mot_de_passe" id="mot_de_passe" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
