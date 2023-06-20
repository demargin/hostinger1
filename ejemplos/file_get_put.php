<?php
    //creating variables
    $file = 'people.txt';
    // Create file:
    file_put_contents($file, 'person1, person2, person3');
    // Read file:
    $file_initial = file_get_contents($file);
    //echo $file_initial . "\n\n";
    
    // Add data to the file, using FILE_APPEND as the flag to add it to the end of the file
    file_put_contents($file, ', person4', FILE_APPEND);
    $file_modified = file_get_contents($file);
    //echo $file;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File_get_put</title>
</head>
<body>
    <a href="index.php">Volver a la pagina INICIO</a>
    <h1>Ejemplo sobre el uso de las funciones:</h1></b>
    <h2>file_get_contents</h2>
    <h2>file_put_contents</h2></br></br>

    <h4>Contenido del archivo al ser creado y su contenido</h4>
    <textarea>
        <?=$file_initial?>    
    </textarea></br>

    <h4>Contenido del archivo al ser modificado y agregando datos al final del contenido del archivo</h4>
    <textarea>
        <?=$file_modified?>    
    </textarea></br> 
</body>
</html>