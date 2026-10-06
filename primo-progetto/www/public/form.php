<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recupero e sanificazione dei dati
    $cognome = trim($_POST['cognome'] ?? '');
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $corso = $_POST['corso'] ?? '';
    $livello = $_POST['livello'] ?? '';
    $orario = $_POST['orario'] ?? [];
    $richieste = trim($_POST['richieste'] ?? '');

    // Validazione dei dati obbligatori e dell'email
    if (empty($cognome) || empty($nome) || empty($email) || empty($corso) || empty($livello)) {
        die("Errore: Compilare tutti i campi obbligatori.");
    }

    // Gestione visualizzazione richieste opzionali
    if (empty($richieste)) {
        $richieste = "nessuna";
    }

    // Formattazione lista orari scelti
    $orari_selezionati = !empty($orario) ? implode(", ", $orario) : "Nessuna preferenza espressa";

    ?>
    <!DOCTYPE html>
    <html lang="it">
    <head>
        <meta charset="UTF-8">
        <title>Riepilogo Richiesta</title>
    </head>
    <body>

    <p>Gentile <?php echo htmlspecialchars($cognome) . " " . htmlspecialchars($nome); ?></p>

    <p>Lei ha richiesto l'iscrizione al corso <?php echo htmlspecialchars($corso); ?> livello <?php echo htmlspecialchars($livello); ?> con orari:</p>

    <p><?php echo htmlspecialchars($orari_selezionati); ?></p>

    <p><strong>Altre richieste:</strong><br>
        <?php echo nl2br(htmlspecialchars($richieste)); ?></p>

    <p>Stiamo verificando tutti i dati, le invieremo la risposta a <?php echo htmlspecialchars($email); ?></p>

    </body>
    </html>
    <?php
} else {
    // Reindirizza al form se si tenta di accedere alla pagina direttamente via GET
    header("Location: index.html");
    exit();
}
?>