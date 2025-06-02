<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Promedio</title>
</head>
<body>

<h2>Resultado</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c1 = $_POST["cantidad1"];
    $c2 = $_POST["cantidad2"];
    $c3 = $_POST["cantidad3"];

    $promedio = ($c1 + $c2 + $c3) / 3;

    echo "<h3>El promedio es: $promedio</h3>";
} else {
    echo "<p>No se han enviado datos.</p>";
}
?>

<a href="Form.html">Volver al formulario</a>

</body>
</html>
