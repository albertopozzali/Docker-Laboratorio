<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Prenota da myPizza</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: inline-block;
            margin-bottom: 5px;
        }
        .error {
            color: red;
            font-weight: bold;
            margin-top: 15px;
        }
        .success {
            color: green;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<h2>Prenota da myPizza</h2>

<?php
// Inizializzazione delle variabili per i messaggi
$messaggio = "";
$classe_messaggio = "";

// Verifica se il form è stato inviato tramite metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupero dei dati inviati dal form
    $sistemazione = isset($_POST['sistemazione']) ? trim($_POST['sistemazione']) : "";
    $pizza = isset($_POST['pizza']) ? trim($_POST['pizza']) : "";
    $impasto = isset($_POST['impasto']) ? trim($_POST['impasto']) : "";
    $aggiunte = isset($_POST['aggiunte']) ? $_POST['aggiunte'] : [];

    // Controllo dei campi obbligatori (sistemazione, pizza, impasto)
    if (empty($sistemazione) || empty($pizza) || empty($impasto)) {
        $messaggio = "inserire tutti i dati";
        $classe_messaggio = "error";
    } else {
        // Gestione delle eventuali aggiunte
        $testo_aggiunte = "";
        if (!empty($aggiunte)) {
            $testo_aggiunte = " e aggiunte di " . implode(", ", $aggiunte);
        }

        // Messaggio di successo con il riepilogo dell'ordine
        $messaggio = "La pizza {$pizza} con impasto {$impasto}{$testo_aggiunte}, e' stata correttamente prenotata con sistemazione {$sistemazione}";
        $classe_messaggio = "success";
    }
}
?>

<form method="POST" action="">
    <div class="form-group">
        <label for="sistemazione">tipo di sistemazione</label><br>
        <select name="sistemazione" id="sistemazione">
            <option value=""> </option>
            <option value="veranda">veranda</option>
            <option value="sala interna">sala interna</option>
            <option value="giardino">giardino</option>
        </select>
    </div>

    <div class="form-group">
        <label for="pizza">pizza</label><br>
        <select name="pizza" id="pizza">
            <option value=""> </option>
            <option value="margherita">margherita</option>
            <option value="capricciosa">capricciosa</option>
            <option value="diavola">diavola</option>
            <option value="quattro stagioni">quattro stagioni</option>
        </select>
    </div>

    <div class="form-group">
        <label>seleziona le eventuali aggiunte:</label><br>
        <input type="checkbox" name="aggiunte[]" value="prosciutto" id="prosciutto"

        <input type="checkbox" name="aggiunte[]" value="ricotta" id="ricotta"
        <label for="ricotta">ricotta</label><br>

        <input type="checkbox" name="aggiunte[]" value="salsiccia" id="salsiccia"
        <label for="salsiccia">salsiccia</label>
    </div>

    <div class="form-group">
        <label>Seleziona tipo di impasto:</label><br>
        <input type="radio" name="impasto" value="senza glutine" id="senza_glutine"
        <label for="senza_glutine">senza glutine</label>

        <input type="radio" name="impasto" value="normale" id="normale"
        <label for="normale">normale</label>
    </div>

    <button type="submit">prenota</button>
</form>

<?php if (!empty($messaggio)): ?>
    <div class="<?php echo $classe_messaggio; ?>">
        <?php echo $messaggio; ?>
    </div>
<?php endif; ?>

</body>
</html>