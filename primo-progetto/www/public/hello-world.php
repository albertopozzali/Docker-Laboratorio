<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tavola Pitagorica</title>
    <style>
        table {
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        td, th {
            border: 2px solid black;
            width: 40px;
            height: 40px;
        }
        th {
            background-color: #002163;
            font-weight: bold;
            color: white;
        }

        /* Evidenzia i quadrati perfetti sulla diagonale (opzionale) */
        tr:nth-child(even) { background-color: #f9f9f9; }
    </style>
</head>
<body>

<h2>Tavola Pitagorica</h2>

<table>
    <!-- Intestazione colonne (1 - 10) -->
    <tr>
        <th>×</th>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <th><?php echo $i; ?></th>
        <?php endfor; ?>
    </tr>

    <!-- Righe della tabella -->
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <tr>
            <!-- Intestazione riga -->
            <th><?php echo $i; ?></th>

            <!-- Calcolo delle moltiplicazioni -->
            <?php for ($j = 1; $j <= 10; $j++): ?>
                <td><?php echo $i * $j; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>