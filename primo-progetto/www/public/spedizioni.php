<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Spedizione</title>
</head>
<body>
<?php
if (!empty($_GET["tipo"])) {
    $tipo = $_GET["tipo"];
    if ($tipo != "Standard" && $tipo != "Espressa"){
        echo "Impostata di default la spedizione standard visto il mancato o l'errato inserimento dei dati";
        $tipo = "Standard";
    }
} else {
    echo "Impostata di default la spedizione standard visto il mancato o l'errato inserimento dei dati";
    $tipo = "Standard";
}
?>
<h1>Richiesta di spedizione</h1>
<p>Tipologia di spedizione selezionata: <?php echo $tipo?></p>
<form method="post">
    <label>Nome cliente:</label>
    <input type="text" name="nome">
    <br><br>
    <label>Peso del pacco:</label>
    <select name="peso">
        <option value="">--</option>
        <option value="1">1 kg</option>
        <option value="2">2 kg</option>
        <option value="3">3 kg</option>
        <option value="4">4 kg</option>
        <option value="5">5 kg</option>
        <option value="6">6 kg</option>
    </select>
    <br><br>
    <label>Invio aereo:</label>
    <input type="checkbox" name="aereo" value="Si">
    <br><br>
    <button type="submit">CALCOLA</button>
</form>
<br>
<a href="home-spedizioni.php">Torna alla home</a>
<br><br>
<?php
if (isset($_POST["nome"]) && isset($_POST["peso"])) {
    $nome = $_POST["nome"];
    $peso = $_POST["peso"];
    if (empty($nome) || empty($peso)) {
        echo "Inserisci tutti i dati obbligatori per calcolare la spedizione!";
    } else {
        if ($tipo == "Standard") {
            $costo = 3;
        } else {
            $costo = 5;
        }
        $totale = $costo*$peso;
        ?>

        <h2>Riepilogo spedizione</h2>

        <table>
            <tr>
                <td>Nome cliente:</td>
                <td><?php echo $nome?></td>
            </tr>
            <tr>
                <td>Tipo spedizione:</td>
                <td><?php echo $tipo?></td>
            </tr>
            <tr>
                <td>Peso:</td>
                <td><?php echo $peso . "kg"?></td>
            </tr>
            <tr>
                <td>Costo per kg:</td>
                <td><?php echo $costo . "€"?></td>
            </tr>
            <tr>
                <td>Costo totale:</td>
                <td><?php echo $totale . "€"?></td>
            </tr>
        </table>

        <p>Richiesta di spedizione effettuata correttamente!</p>

        <?php
    }
}
?>

</body>
</html>