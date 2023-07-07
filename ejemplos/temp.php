<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener las opciones seleccionadas
  $selectedOptions = $_POST["option"];

  // Almacenar las opciones seleccionadas en variables individuales
  foreach ($selectedOptions as $key => $value) {
    ${"option" . ($key + 1)} = $value;
  }
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
  <form method="POST">
    <input type="checkbox" name="option[]" value="Opción 1"> Opción 1<br>
    <input type="checkbox" name="option[]" value="Opción 2"> Opción 2<br>
    <input type="checkbox" name="option[]" value="Opción 3"> Opción 3<br>
    <input type="checkbox" name="option[]" value="Opción 4"> Opción 4<br>
    <input type="checkbox" name="option[]" value="Opción 5"> Opción 5<br>
    <br>
    <input type="submit" value="Enviar">
  </form>

  <?php if (isset($option1)): ?>
    <div>
      Opción 1: <?php echo $option1; ?><br>
      Opción 2: <?php echo $option2; ?><br>
      Opción 3: <?php echo $option3; ?><br>
      Opción 4: <?php echo $option4; ?><br>
      Opción 5: <?php echo $option5; ?><br>
    </div>
  <?php endif; ?>
  </body>
</html>
