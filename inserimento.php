<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php require_once('config.php') ?>
<body>
<header class="sticky">
        <a href="logout.php" role="button">Logout</a>
</header>
<?php
$giorno = $_POST['giorno'];
    $ingressi = 0;
    $uscite = 0;
    $sql = "INSERT INTO controllo(giorno,ingressi,uscite)VALUES(:giorno,:ingressi,:uscite)";
    $stmt = $pdo ->prepare($sql);
    $stmt->execute(
    [
        "giorno" => $giorno,
        "ingressi" => $ingressi,
        "uscite" => $uscite
    ]
    );
    ?>
    <h1>Gestisci ingressi e uscite</h1> <hr>
    <a href="ingressi_uscite.php" role="button">Inizia la gestione</a>
</body>
</html>