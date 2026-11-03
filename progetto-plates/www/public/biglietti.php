<?php

require '../vendor/autoload.php';

use League\Plates\Engine;

$template = new Engine('../templates','tpl');

echo $template -> render('biglietti',
    []
);
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST["nome"];
    $zona = $_POST["zona"];
    $tipo = $_POST["tipo"];
    $qta = $_POST["qta"];
    $costoTotale = 0.0;
    $costo_per_zona = 0.0;
    if($zona == 1){
        $costo_per_zona += 1.4;
    } else if ($zona == 2){
        $costo_per_zona += 1.8;
    } else if ($zona == 3){
        $costo_per_zona += 2.2;
    }

    if ($tipo == "durata-oraria"){
        $costo_per_zona *= 1.5;
    } else if ($tipo == "giornaliero"){
        $costo_per_zona *= 2;
    }

    $costoTotale = $costo_per_zona+$qta;

    echo "Nome Acquirente: " . $nome . "<br>";
    echo "Zona: " . $zona . "<br>";
    echo "Tipologia Biglietto: ". $tipo . "<br>";
    echo "Quantità Biglietti Acquistati: " . $qta . "<br>";
    echo "Prezzo Totale: " . $costoTotale . "€" . "<br>";
}