<?php
$thelist = ""; // Inicializar la variable $thelist

if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
        if (($file != ".") && ($file != "..")) {
            $thelist .= '<LI><a href="'.$file.'">'.$file.'</a>';
        }
    }

    closedir($handle);
}
?>

<P>List de archivos:</p>
<UL>
<P><?=$thelist?></p>
</UL>