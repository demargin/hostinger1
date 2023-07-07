<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener las opciones seleccionadas
  $selectedOptions = $_POST["option"];

  // Almacenar las opciones seleccionadas en un array
  $selected = [];

  foreach ($selectedOptions as $option) {
    $selected[] = $option;
  }
}

$igualdad = ($selected[0] == $selected[1]) ? "Los valores son iguales" : "Los valores son diferentes";
$identico = ($selected[0] === $selected[1]) ? "Los valores son identicos" : "Los valores son diferentes";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Operadores de Igualdad </title>
  <script>
    // Código JavaScript aquí
    window.onload = function() {
      var checkboxes = document.querySelectorAll('input[type="checkbox"]');

      checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
          var checkedCount = document.querySelectorAll('input[type="checkbox"]:checked').length;

          if (checkedCount > 1) {
            checkboxes.forEach(function(checkbox) {
              if (!checkbox.checked) {
                checkbox.disabled = true;
              }
            });
          } else {
            checkboxes.forEach(function(checkbox) {
              checkbox.disabled = false;
            });
          }
        });
      });
    }
  </script>
</head>
<body>
  <h3>Seleccione dos valores de la lista</h3>
  <form method="POST">
    <input type="checkbox" name="option[]" value=3> 3<br>
    <input type="checkbox" name="option[]" value=5> 5<br>
    <input type="checkbox" name="option[]" value="5"> "5"<br>
    <input type="checkbox" name="option[]" value=7> 7<br>
    <input type="checkbox" name="option[]" value=11> 11<br>
    <br>
    <input type="submit" value="Seleccionar">
  </form>
    <div>
    <ul>
      <li><h4>Igualdad (==) ::</h4>
          <?echo $selected[0] . " == " . $selected[1] . " ?:: " . $igualdad ?>
      </li>

      <li><h4>Identico (===) >> es decir si son iguales y del mismo tipo ::</h4>
          <?echo $selected[0] . " === " . $selected[1] . " ?:: " . $identico ?>
      </li>

      <li><h4>Igualdad (==) ::</h4>
          <?echo $selected[0] . " == " . $selected[1] . " ?:: " . $igualdad ?>
      </li>
    </ul>  
    </div>
</body>
</html>
