<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Biglietti</title>
</head>
<body>
    <h1>Acquista Biglietto: </h1>
    <form method="post">
    <label for="nome">Nome: </label>
    <input type="text" id="nome" name="nome">
<br><br>
<label for="zona">Zona: </label>
<select id="zona" name="zona">
    <option value="1" selected>Zona 1</option>
    <option value="2">Zona 2</option>
    <option value="3">Zona 3</option>
</select>
    <br><br>
        <label for="tipo">Tipo Biglietto: </label>
        <select id="tipo" name="tipo">
            <option value="corsa-singola" selected>Corsa Singola</option>
            <option value="durata-oraria">Durata Oraria</option>
            <option value="giornaliero">Giornaliero</option>
        </select>
        <br><br>
        <label for="qta">Quantità: </label>
        <select id="qta" name="qta">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br><br>
<input type="submit" >
    </form>
</body>
</html>