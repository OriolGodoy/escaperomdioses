<?php
session_start();

if ($_SESSION["current_page"] == 2) {
  $solucion = $_POST["capa1"];
  if ($solucion == "poseidón") {
    $_SESSION["capa1"] = $solucion;
    header("Location: capa3.php");
    exit();
  } else {
    $_SESSION["error"] = "La respuesta es incorrecta. Inténtalo de nuevo.";
    header("Location: capa1.php");
    exit();
  }
} elseif ($_SESSION["current_page"] == 3) {
  $solucion2 = $_POST["capa3"];
  if ($solucion2 == "hades") {
    $_SESSION["capa3"] = $solucion2;
    header("Location: capa4.php");
    exit();
  } else {
    $_SESSION["error"] = "La respuesta es incorrecta. Inténtalo de nuevo.";
    header("Location: capa3.php");
    exit();
  }
} elseif ($_SESSION["current_page"] == 4) {
  $solucion3 = $_POST["capa4"];}
  if ($solucion3 == "atenea") {
    $_SESSION["capa4"] = $solucion3;
    header("Location: felicitaciones.php");
    exit();
  } else {
    // La respuesta es incorrecta, mostrar mensaje de error
    $_SESSION["error"] = "La respuesta es incorrecta. Inténtalo de nuevo.";
    header("Location: capa4.php");
    exit();
  } 
session_destroy();
?>