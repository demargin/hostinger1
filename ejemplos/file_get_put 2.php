<?php
    //creating variables
    $file = 'archivo.txt';
    
    //Adding the text from the textarea to the file = archivo.txt
    $file_new = file_put_contents($file, $_GET['texto']);
    
    // Reading the file:
    $file_last = file_get_contents($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File_get_put2</title>
</head>
<body>
    <a href="index.php">Volver a la pagina INICIO</a>
    <h1>Ejemplo sobre el uso de las funciones y $_GET</h1></b>
    <h2>file_get_contents</h2>
    <h2>file_put_contents</h2>
    <h2>$_GET</h2></br></br>
    <p>
        En este ejemplo vamos a pasar el texto del text area al archivo, 
        de esta manera modificaremos el archivo con el contenidon del texto del textarea
    </p>
    <h4>Archivo (archivo.txt) con la ultima modificacion</h4>
    <textarea readonly><?=$file_last?></textarea></br>

    <form>
        <h4>Escribe aqui el contenido que quieres reemplazar en el archivo (archivo.txt)</h4>
        <textarea name="texto"></textarea></br>
        <input type="submit" value="Guardar" />
    </form>
</body>
</html>