<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <title>Document</title>
</head>
<body>
<header class="sticky">
    <a href="logout.php" role="button">Logout</a>
</header>
<p>add per aggiungere,remove per rimuovere</p>
<div class="container">
         <div class="row">
             <div class="col-sm">
             <?php
             function add(){
                require_once('config.php');
                 $sql = "SELECT ID,ingressi FROM controllo WHERE ID = (SELECT MAX(ID) FROM controllo)";
                 $stmt = $pdo->query($sql);
                 $row = $stmt -> fetch();
 
                 $id = $row['ID'];
                 $ingressi = $row['ingressi'];
                 $add_ingressi = $ingressi + 1;
 
                 $sql = "UPDATE controllo SET ingressi = :ingressi WHERE ID = :id";
                 $stmt = $pdo ->prepare($sql);
                 $stmt->execute(
                 [
                     "ingressi" => $add_ingressi,
                     "id" => $id
                 ]
                 );
             }
?>
<?php
    function remove(){
        require_once('config.php');
                 $sql = "SELECT ID,uscite FROM controllo WHERE ID = (SELECT MAX(ID) FROM controllo)";
                 $stmt = $pdo->query($sql);
                 $row = $stmt -> fetch();
 
                 $id = $row['ID'];
                 $uscite = $row['uscite'];
                 $add_uscite = $uscite + 1;
 
                 $sql = "UPDATE controllo SET uscite = :uscite WHERE ID = :id";
                 $stmt = $pdo ->prepare($sql);
                 $stmt->execute(
                 [
                     "uscite" => $add_uscite,
                     "id" => $id
                 ]
                 );
             }
             ?>
             <?php
             function visualizza(){
                require_once('config.php');
                 $sql = "SELECT ingressi,uscite FROM controllo WHERE ID = (SELECT MAX(ID) FROM controllo)";
                 $stmt = $pdo->query($sql);
                 $row = $stmt -> fetch();
                 $uscite = $row['uscite'];
                 $ingressi = $row['ingressi'];
                 $persone = $ingressi - $uscite;
                 echo "<p>".$persone." persone sono all'interno del supermercato</p>";
}
?>
             <?php if(array_key_exists('buttonAdd', $_POST)) { 
                 add(); 
             } 
             ?>
             <?php if(array_key_exists('buttonRemove', $_POST)) { 
                 remove(); 
             } 
             ?>
             <?php if(array_key_exists('buttonVisualizza', $_POST)) { 
                 visualizza(); 
             } 
             ?>
         <form method="post"> 
             <input type="submit" name="buttonAdd" class="button" value="add" />
             <input type="submit" name="buttonRemove" class="button" value="remove" />
             <input type="submit" name="buttonVisualizza" class="button" value="visualizza" />
         </form>
     </div>
   </div>
 </div>
 <hr>
</body>
</html>