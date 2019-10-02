<?php
$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$direccion = $_GET["direccion"];
$numero = $_GET["numero"];


if (strlen($nombre) > 10) {
  echo  "Nombre: ";
  echo  strtoupper( $nombre);
  echo "<br>";
}
if (strlen($nombre) < 10) {
    echo "Nombre: ";
    echo strtolower($nombre);
    echo "<br>";
}
if (strlen($apellido) > 10) {
    echo "Apellido: ";
    echo strtoupper( $apellido);
    echo "<br>";
 }
if (strlen($apellido) < 10) {
      echo "Apellido: ";
      echo strtolower($apellido);
      echo "<br>";
}
if (strstr ( $direccion, 'CRA')) {
    echo "Direccion: ";
    echo strtolower($direccion);
    echo "<br>";
}
else {
     echo "Direccion: ";
     echo strtoupper ($direccion);
     echo "<br>";
}
echo "Numero : $numero";
?>