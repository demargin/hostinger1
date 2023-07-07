<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de HTML, JavaScript y PHP con restricción de dos checkboxes</title>
    <style>
        .checkbox-container {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h1>Ejemplo de HTML, JavaScript y PHP con restricción de dos checkboxes</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="checkbox-container">
        <input type="checkbox" name="opcion[]" value="Opción 1"> Opción 1
    </div>
    <div class="checkbox-container">
        <input type="checkbox" name="opcion[]" value="Opción 2"> Opción 2
    </div>
    <div class="checkbox-container">
        <input type="checkbox" name="opcion[]" value="Opción 3"> Opción 3
    </div>
    <br>
    <input type="submit" name="submit" value="Enviar">
</form>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['opcion'])) {
        $opcionesSeleccionadas = $_POST['opcion'];
        $cantidadSeleccionada = count($opcionesSeleccionadas);

        if ($cantidadSeleccionada == 2) {
            echo "<h2>Opciones seleccionadas:</h2>";
            foreach ($opcionesSeleccionadas as $opcion) {
                echo $opcion . "<br>";
            }
        } else {
            echo "<h2>Debe seleccionar exactamente dos opciones.</h2>";
        }
    } else {
        echo "<h2>No se ha seleccionado ninguna opción.</h2>";
    }
}
?>

</body>
</html>
