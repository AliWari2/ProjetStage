<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="/compte/store" method="post">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="mot_de_passe">Mot de passe:</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required>
        <br>
        <button type="submit">Register</button>
    </form>
    <a href="/compte">Login</a>
</body>
</html>
