<?php
$dir = 'upload/';
$extension = substr(strrchr($_FILES['monfichier']['name'], "."), 1);
$newName = $_POST['filename'].'.'.$extension;

$file = $_FILES['monfichier'];
$file_tmp = basename($file['tmp_name']);
$file_def = $dir.$newName;

$moveOK = move_uploaded_file($file_tmp, $file_def);
if($moveOK)
{
    $message = "Le fichier a ete uploadé dans ".$cheminEtNomDefinitif;
}
else 
{
    $message = "Le fichier n'a pas ete uploadé";
}

/*if($file || $file!="none")
{

}
else 
    echo "Aucun fichier envoyé";*/
?>