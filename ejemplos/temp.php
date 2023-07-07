<?php
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['opcion']) && count($_GET['opcion']) === 2) {
      $opcionesSeleccionadas = $_GET['opcion'];
      
      // Mostrar las opciones seleccionadas
      echo "Opción 1 seleccionada: " . $opcionesSeleccionadas[0] . "<br>";
      echo "Opción 2 seleccionada: " . $opcionesSeleccionadas[1];
    } else {
      echo "Debes seleccionar exactamente dos opciones.";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Selección de opciones</title>
  <script>
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var maxSelections = 2;

    checkboxes.forEach(function(checkbox) {
      checkbox.addEventListener('change', function() {
        var numSelected = document.querySelectorAll('input[type="checkbox"]:checked').length;
        
        if (numSelected > maxSelections) {
          this.checked = false;
        }
      });
    });
  </script>
</head>
<body>
  <form action="" method="GET">
    <input type="checkbox" name="opcion[]" value="opcion1"> Opción 1<br>
    <input type="checkbox" name="opcion[]" value="opcion2"> Opción 2<br>
    <input type="checkbox" name="opcion[]" value="opcion3"> Opción 3<br>
    <input type="checkbox" name="opcion[]" value="opcion4"> Opción 4<br>
    <input type="checkbox" name="opcion[]" value="opcion5"> Opción 5<br>
    
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
