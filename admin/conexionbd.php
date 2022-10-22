<?php

$host = "localhost";
$bd = "mascosalud";
$usuario = "root";
$contraseña = "";

try {
  $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $contraseña);
} catch (Exception $err) {
  echo $err->getMessage();
}
