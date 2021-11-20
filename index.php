<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa en PHP</title>
</head>

<body style="background-color: #DAF7A6;">

</body>

</html>



<?php

# Crear un programa en PHP en el cual muestre nombre, apellido, edad, hobbie, editor de código preferido, sistema operativo que utiliza
$nombre  =  "Héctor Fabián";
$apellido  =  "Alvarez";
$edad  =  "46";
$hobbie  =  "Jugar y ver partidos de fútbol";
$editor  =  "Visual Studio Code";
$SO = "Windows 10"; 

#Indicar Nombre y Apellido
echo "<h3>".$nombre." ".$apellido."</h3>";

#Este es un párrafo únicamente visual para ver el uso de la etiqueta hr (línea horizontal)
echo "<hr>";

#Indicar Edad y Hobbie
$anios = "<span><b>Edad: </b></span> $edad años";
echo "<p>".$anios."</p>";

$text = "<span><b>Hobbie: </b></span> $hobbie";
echo "<p>".$text."</p>";

#Indicar el Editor de Código preferido
$code = "<span><b>Editor de Código: </b></span> $editor";
echo "<p>".$code."</p>";

#Indicar el Sistema Operativo utilizado
$code = "<span><b>Sistema Operativo: </b></span> $SO";
echo "<p>".$code."</p>";

?>