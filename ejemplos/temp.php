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

  <?php if (isset($selected) && !empty($selected)): ?>
    <div>
      Opciones seleccionadas:<br>
      <?php foreach ($selected as $option): ?>
        <?php echo $option; ?><br>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</body>
</html>
