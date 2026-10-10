<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h2>Accesso all'area riservata</h2>
<form action="controllo.php" method="POST">
    <p>
        <label for="username">Username: </label><br>
        <input type="text" id="username" name="username" required>
    </p>

    <p>
        <label for="password">Password: </label><br>
        <input type="password" id="password" name="password" required>
    </p>

    <p>
        <input type="submit" value="Accedi">
    </p>
</form>

</body>