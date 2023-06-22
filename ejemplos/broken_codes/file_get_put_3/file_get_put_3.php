<?php
    //Codigo para listar archivos del directorio actual
    if ($handle = opendir('.')) {
        while (false !== ($file = readdir($handle)))
            {
                if (($file != ".") 
                && ($file != ".."))
                {
                    $thelist .= '<LI><a href="'.$file.'">'.$file.'</a>';
                 }
            }

        closedir($handle);
    }
    //-------Fin de codigo Listar-------
    $file = "Saludo.txt";
    if(isset($_GET["archivo"])){
        
        $file = $_GET['archivo'];
    
        if ($_GET['accion'] == 'Guardar'){
            file_put_contents($file, $_GET['texto']);
        }
        
    }
    
    // Reading the file:
    $file_last = file_get_contents($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File_get_put_3</title>
</head>
<body>
    <a href="index.php">Volver a la pagina INICIO</a>
    <h1>Cargar y Editar Archivo de Texto</h1></b>
    <h2>file_get_contents</h2>
    <h2>file_put_contents</h2>
    <h2>$_GET</h2></br></br>
    <p>
        En este ejemplo vamos a modificar un archivo de la lista, escribiendo el nombre del archivo y el contenido 
        que queremos cambiar del archivo cargado.
    </p>
    
    <form>
    <h4>Contenido Actual del Archivo</h4>
    <Label>Nombre del Archivo:</Label>
    <input type="text" name = "archivo" value = "<?=$file?>"/></br>

    <textarea readonly><?=$file_last?></textarea></br>
    <input type="submit" value="Cargar" name="accion"/>

        <h4>Escribe aqui el contenido que quieres reemplazar en el archivo </h4>
        <textarea name="texto"></textarea></br>
        <input type="submit" value="Guardar" name="accion"/>
        
    </form>

    <p>List de archivos:</p>
    <ul>
        <p><?=$thelist?></p>
    </ul>

    <style>
        textarea{
            margin: 0px; width: 307px; height: 184px;
        }

    </style>
</body>
</html>
