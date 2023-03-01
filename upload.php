<?php
$file = $_FILES['monfichier']; //création d’une variable contenant toutes les infos utiles
$dir = 'upload';
$name = 'monfichier1';
$ext = 'txt';                                       
if($file || ($file != "none")) // si un fichier a bel et bien été envoyé :
    {
        $file_tmp = basename($file['tmp_name']); // extraction du nom du fichier temporaire sur le serveur :
        $file_def = $dir.'/'.$name.'.'.$ext;
        $moveOK= move_uploaded_file($file_tmp, $file_def);
            if($moveOK)
                echo 'Le fichier a été uploadé dans'.$file_def;
            else 
            echo "Le fichier n'a pas été uploadé";
    }
            else
            echo "Aucun fichier envoyé";

?>