<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporal para pruebas</title>
</head>
<body>

<form action="procesar.php" method="GET">
  <select name="opciones[]" multiple>
    <option value="opcion1">Opción 1</option>
    <option value="opcion2">Opción 2</option>
    <option value="opcion3">Opción 3</option>
    <option value="opcion4">Opción 4</option>
    <option value="opcion5">Opción 5</option>
  </select>

  <input type="submit" value="Enviar">
</form>

<script>
  var selectElement = document.querySelector('select');
  var maxSelections = 2;

  selectElement.addEventListener('change', function(event) {
    var selectedOptions = Array.from(this.selectedOptions);
    if (selectedOptions.length > maxSelections) {
      selectedOptions.shift().selected = false;
    }
  });
</script>

</body>
</html>