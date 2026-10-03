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
<?php if (empty($_GET["valore"])): ?>

    <h1>INSERIRE UN VALORE</h1>

<?php else: ?>

    <?php $valore = (int)$_GET["valore"]; ?>

    <table>
        <thead>
        <tr>
            <th>Tabellina del <?php echo $valore; ?></th>
        </tr>
        </thead>
        <tbody>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <td>
                    <?php echo $valore; ?> * <?php echo $i; ?> = <?php echo $valore * $i; ?>
                </td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>

<?php endif; ?>
<a href="hello-world.php">Vai alla tavola pitagorica</a>
</body>
</html>