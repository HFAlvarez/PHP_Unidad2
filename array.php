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

#Crear un programa en PHP en el cual muestre nombre, apellido, edad, hobbie, editor de código preferido, sistema operativo que utiliza
$array = ["Héctor Fabián","Alvarez","46","Jugar y ver partidos de fútbol","Visual Studio Code","Windows 10"];
echo "<br>";

#Indicar Nombre y Apellido
echo "<h3>".$array[0]." ".$array[1]."</h3>";

#Este es un párrafo únicamente visual para ver el uso de la etiqueta hr (línea horizontal)
echo "<hr>";

#Indicar la Edad
$anios = "<span><b>Edad: </b></span>";
echo "<p>".$anios." "."<i>".$array[2]." años </i> </p>";

#Indicar Hobbie
$text = "<span><b>Hobbie: </b></span>";
echo "<p>".$text." "."<i>".$array[3]."</i></p>";

#Indicar el Editor de Código preferido
$code = "<span><b>Editor de Código: </b></span>";
echo "<p>".$code." "."<i>".$array[4]."</i></p>";

#Indicar el Sistema Operativo utilizado
$code = "<span><b>Sistema Operativo: </b></span>";
echo "<p>".$code." "."<i>".$array[5]."</i></p>";

?>