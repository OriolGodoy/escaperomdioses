<?php
session_start();
$_SESSION["current_page"] = 4;

if (isset($_SESSION["capa4"]) && $_SESSION["capa4"] == "atenea") {
  header("Location: felicitaciones.php");
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
    <link rel="stylesheet" href="CSS/style4.css">
    <title>PREGUNTA3</title>
</head>

<body>
    <div class="box">
        <h1>Pregunta 3</h1>
        <img src="./IMG/atenea.jpg" alt="" class="img">
        <p>Quién és el dios/a griego de la imágen de arriba?</p>
        <p class="letra">Es considerado el dios del inframundo</p>
        <p class="letras">Escriba la respuesta en minúscula</p>
        <form action="nocheat.php" method="post">
            <input type="text" name="capa4"></input>
            <br>
            <br>
            <input type="submit" value="RESPONDER" class="boton">
        </form>
    </div>
</body>

</html>