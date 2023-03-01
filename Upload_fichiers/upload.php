<?php

$extension = substr(strrchr($_FILES['monfichier']['name'], "."), 1);
$newName = $_POST['filename'].'.'.$extension;

$file = $_FILES['monfichier'];
$file_tmp = $file['tmp_name'];
$file_def = 'upload/'.$newName;

$moveOK = move_uploaded_file($file_tmp, $file_def);

if($moveIsOk)
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

<!DOCTYPE html>
<html>
    <head>
        <title>Traitement upload</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <p>
        <?php echo $message; ?>
        </p>
    </body>
</html>

