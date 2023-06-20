<?php
    // Create file:
    file_put_contents('people.txt', 'person1, person2, person3');
    // Read file:
    $file = file_get_contents('people.txt');
    echo $file . "\n\n";
    // Add data to the file, using FILE_APPEND as the flag to add it to the end of the file
    file_put_contents('people.txt', ', person4', FILE_APPEND);
    $file = file_get_contents('people.txt');
    echo $file;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File_get_put</title>
</head>
<body>
    <h1>Ejemplo sobre el uso de las funciones:</h1></br>
    <h2>file_get_contents</h2>
    <h2>file_put_contents</h2></br></br>


</body>
</html>