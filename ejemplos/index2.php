<?php
<<<<<<< HEAD
    /* $archivo = 'vacio.txt';
    //Funcion PHP para leer archivos
    $texto = file_get_contents($archivo);
    
    //Funcion de PHP para modificar un archivo*/
    //file_put_contents($archivo, 'El texto vacio.txt ha sido modificado con este contenido');

    //echo file_get_contents('vacio.txt');
    //echo file_put_contents('vacio.txt', "Texto Modificado en el archivo.txt");

    // Create file:
    file_put_contents('vacio.txt', 'person1, person2, person3');
    // Read file:
    $file = file_get_contents('vacio.txt');
    echo $file . "\n\n";
    // Add data to the file, using FILE_APPEND as the flag to add it to the end of the file
    file_put_contents('vacio.txt', ', person4', FILE_APPEND);
    $file = file_get_contents('vacio.txt');
    echo $file;
=======

echo "Hello mundo de php";

>>>>>>> 1df7a322681099a2d0ca3696dfb5344eaa4df6cf
?>
