<?php
$file = $_FILES['monfichier']; //création d’une variable contenant toutes les infos utiles
$dir = 'upload';
$name = 'monfichier1';
$ext = 'txt';                                       
if($file || ($file != "none")) // si un fichier a bel et bien été envoyé :
    {
        $file_tmp = basename($file['tmp_name']); // extraction du nom du fichier temporaire sur le serveur :

        if(($file['size'] <= 1024000) || ereg("gif",$file['type'])) // vérification de la taille et du type MIME
        {
            $file_def = $dir.'/'.$name.'.'.$ext; // nouveau nom, emplacement et extension du fichier :
            $moveOK= copy($file_tmp, $file_def); // copie du fichier temporaire dans son nouvel emplacement : 
            if($moveOK)
                echo 'Le fichier a été uploadé dans'.$file_def;
            else 
            echo "Le fichier n'a pas été uploadé";
        }
        else
            echo "fichier introuvable";
    }
?>