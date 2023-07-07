<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de HTML, JavaScript y PHP con checkboxes</title>
</head>
<body>

<h1>Ejemplo de HTML, JavaScript y PHP con checkboxes</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="checkbox" name="opcion[]" value="Opción 1"> Opción 1<br>
    <input type="checkbox" name="opcion[]" value="Opción 2"> Opción 2<br>
    <input type="checkbox" name="opcion[]" value="Opción 3"> Opción 3<br>
    <br>
    <input type="submit" name="submit" value="Enviar">
</form>

<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['opcion'])) {
        echo "<h2>Opciones seleccionadas:</h2>";
        foreach ($_POST['opcion'] as $opcion) {
            echo $opcion . "<br>";
        }
    } else {
        echo "<h2>No se ha seleccionado ninguna opción.</h2>";
    }
}
?>

</body>
</html>
