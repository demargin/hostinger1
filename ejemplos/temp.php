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
  <form>
    <input type="checkbox" name="option" value="option1"> Opción 1<br>
    <input type="checkbox" name="option" value="option2"> Opción 2<br>
    <input type="checkbox" name="option" value="option3"> Opción 3<br>
    <input type="checkbox" name="option" value="option4"> Opción 4<br>
    <input type="checkbox" name="option" value="option5"> Opción 5<br>
  </form>
</body>
</html>
