<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>



<body>

    <h1>Tabla de multiplicar</h1>
    Introduce un número:
    <form method="GET" action=""> <!-- He visto en internet que si no pones nada en "action", busca en el mismo código -->
        <input type="number" name="numero" value="0">
        <input type="submit" name="Enviar">
        <br>
    </form>


</body>

</html>

<?php

if (isset($_GET["numero"])) {
    $num1 = $_GET["numero"];
} else {
    $num1 = 0;
}

$num2 = 0;
$resultado = 0;

function multiplicar($x, $y)
{
    $z = $x * $y;
    return $z;
}

print ("<br><table border style='text-align: center;'>
            <tr>
                <td><strong>Multiplicación</strong></td>
                <td><strong>Resultado</strong></td>
            </tr>");


for ($i = 0; $i < 11; $i++) {
    $num2 = $i;
    $resultado = multiplicar($num1, $num2);
    //print ("El resultado es: ".$resultado. "<br>");
    print ("<tr>
                <td>" . $num1 . " * " . $num2 . "</td>
                <td>" . $resultado . "</td>
            </tr>");

}

print ("</table>");

?>