<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener las opciones seleccionadas
  $selectedOptions = $_POST["option"];

  // Guardar las opciones seleccionadas en variables individuales
  $option1 = isset($selectedOptions["option1"]) ? $selectedOptions["option1"] : "";
  $option2 = isset($selectedOptions["option2"]) ? $selectedOptions["option2"] : "";
  $option3 = isset($selectedOptions["option3"]) ? $selectedOptions["option3"] : "";
  $option4 = isset($selectedOptions["option4"]) ? $selectedOptions["option4"] : "";
  $option5 = isset($selectedOptions["option5"]) ? $selectedOptions["option5"] : "";

  // Aquí puedes realizar cualquier procesamiento adicional con las opciones seleccionadas
  // ...
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
      var resultDiv = document.getElementById('result');

      checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
          var checkedCount = document.querySelectorAll('input[type="checkbox"]:checked').length;

          if (checkedCount > 2) {
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

      // Actualizar el elemento 'result' al enviar el formulario
      document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var checkedOptions = document.querySelectorAll('input[type="checkbox"]:checked');
        var selectedOptions = Array.from(checkedOptions).map(function(checkbox) {
          return checkbox.value;
        });
        resultDiv.textContent = "Opciones seleccionadas: " + selectedOptions.join(", ");
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

  <div id="result"></div>
</body>
</html>
