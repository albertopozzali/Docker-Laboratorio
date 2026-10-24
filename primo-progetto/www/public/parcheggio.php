<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Hello world</title>
</head>
<body>
    <?php
    $veicolo = $_GET["veicolo"];
    echo "BRO IL TUO MEZZO è: " . $veicolo;
    ?>

    <form id="parcheggio" method="post">
    <label for="nome">COME TE CHIAMI:</label>
    <input type="text" id="nome" name="nome">
    <label for="ore">QUANTO CE VUOI STA:</label>
    <input type="number" id="nome" name="ore">
    <button type="submit" id="submit">CALCOLA</button>
    </form>

    <?php
    $nome = $_POST["nome"];
    $ore = $_POST["ore"];
    if (empty($nome) || empty($ore)) {
        echo "BRO INSERISCI TUTTI I DATI FIGA SONO 2 NON è DIFFICILE";
    } else if ($ore <= 0){
        echo "BRO ALMENO 1 ORA STACCI QUA DENTRO FIGA, TI IMPOSTO DI BASE 1 ORA";
        $ore = 1;
    }
    if ($veicolo == "Automobile"){
        echo "BRO MI DEVI";
        echo $ore*2 . "€";
    } else {
        echo "BRO MI DEVI";
        echo $ore*1 . "€";
    }
    ?>
</body>
</html>