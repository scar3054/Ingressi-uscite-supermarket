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
  <a href="index.php" role="button">Home</a>
  <a href="accedi.php" role="button">Accedi</a>
</header>
<h1>Registrazione effettuata con successo!</h1>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$password = password_hash($password,PASSWORD_DEFAULT);
$sql = "INSERT INTO impiegato(username,password) VALUES (:username,:password)";
$stmt = $pdo ->prepare($sql);
$stmt->execute(
    [
        "username" => $username,
        "password" => $password
    ]
);
?>
    </body>
</html>