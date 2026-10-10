<?php


$username = $_POST["username"];
$password = $_POST["password"];

$messaggi = array();

if (strlen($password) < 8) {
    $messaggi[] = "La password deve contenere almeno 8 caratteri.";
}

if (!preg_match("/[A-Z]/", $password)) {
    $messaggi[] = "La password deve contenere almeno una lettera maiuscola.";
}

if (!preg_match("/[0-9]/", $password)) {
    $messaggi[] = "La password deve contenere almeno una cifra numerica.";
}

if (count($messaggi) > 0) {
    echo "<h2>Password non valida</h2>";
    echo "<p>Non sono stati rispettati i seguenti requisiti:</p>";

    echo "<ul>";

    foreach ($messaggi as $messaggio) {
        echo "<li>$messaggio</li>";
    }

    echo "</ul>";

    echo '<br>';
    echo '<form action="login.php" method="GET">';
    echo '<input type="submit" value="Indietro">';
    echo '</form>';

} else {
    header("Location: area_riservata.php");
    exit();
}

