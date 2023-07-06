<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporal para pruebas</title>

  <script>
    // Coloca aquí el código JavaScript
    var radioButtons = document.querySelectorAll('input[type="radio"]');
    var maxSelections = 2;
    
    radioButtons.forEach(function(radioButton) {
      radioButton.addEventListener('click', function() {
        var selectedRadios = document.querySelectorAll('input[type="radio"]:checked');
        
        if (selectedRadios.length > maxSelections) {
          this.checked = false;
        }
      });
    });
  </script>
</head>
<body>
  <!-- Contenido de tu página -->
  <form action="procesar.php" method="GET">
    <input type="radio" name="opcion[]" value="opcion1"> Opción 1<br>
    <input type="radio" name="opcion[]" value="opcion2"> Opción 2<br>
    <input type="radio" name="opcion[]" value="opcion3"> Opción 3<br>
    <input type="radio" name="opcion[]" value="opcion4"> Opción 4<br>
    <input type="radio" name="opcion[]" value="opcion5"> Opción 5<br>
    
    <input type="submit" value="Enviar">
  </form>
</body>
</html