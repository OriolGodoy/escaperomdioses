<?php
session_start();
$_SESSION["current_page"] = 2;

if (isset($_SESSION["capa1"]) && $_SESSION["capa1"] == "poseidón") {
  header("Location: capa3.php");
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
    <link rel="stylesheet" href="CSS/style2.css">
    <title>PREGUNTA1</title>
</head>

<body>
    <div class="box">
        <h1>Pregunta 1</h1>
        <img src="./IMG/poseidon.jpg" alt="" class="img">
        <p>Quién és el dios/a griego de la imágen de arriba?</p>
        <p>Es considerado el dios de los mares y oceanos</p>
        <p class="letras">Escriba la respuesta en minúscula</p>
        <form action="nocheat.php" method="post">
            <input type="text" name="capa1"></input>
            <br>
            <br>
            <input type="submit" value="RESPONDER" class="boton">
        </form>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  </a>
  <div class="topnav">
  
  </div>
</body>

</html>