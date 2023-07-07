<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener las opciones seleccionadas
  $selectedOptions = $_POST["option"];

  // Guardar las opciones seleccionadas en una variable
  $selected = implode(", ", $selectedOptions);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Opciones Checkbox</title>
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
  <form id="myForm" method="POST">
    <input type="checkbox" name="option[option1]" value="Opción 1"> Opción 1<br>
    <input type="checkbox" name="option[option2]" value="Opción 2"> Opción 2<br>
    <input type="checkbox" name="option[option3]" value="Opción 3"> Opción 3<br>
    <input type="checkbox" name="option[option4]" value="Opción 4"> Opción 4<br>
    <input type="checkbox" name="option[option5]" value="Opción 5"> Opción 5<br>
    <br>
    <input type="submit" value="Enviar">
  </form>

  <?php if (isset($selected)): ?>
    <div>
      Opciones seleccionadas: <?php echo $selected; ?>
    </div>
  <?php endif; ?>

  <div id="result"></div>
</body>
</html>
