<?php
session_start();
$_SESSION["current_page"] = 3;

if (!isset($_SESSION["capa1"]) || $_SESSION["capa1"] != "poseidón") {
  header("Location: capa2.php");
  exit();
}

if (isset($_SESSION["capa3"]) && $_SESSION["capa3"] == "hades") {
  header("Location: capa4.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style3.css">
    <title>PREGUNTA2</title>
</head>

<body>
    <div class="box">
        <h1>Pregunta 2</h1>
        <img src="./IMG/hades.jpg" alt="" class="img">
        <p>Quién és el dios/a griego de la imágen de arriba?</p>
        <p class="letra">Es considerada la diosa de la sabiduría</p>
        <p class="letras">Escriba la respuesta en minúscula</p>
        <form action="nocheat.php" method="post">
            <input type="text" name="capa3"></input>
            <br>
            <br>
            <input type="submit" value="RESPONDER" class="boton">
        </form>
    </div>

</body>

</html>