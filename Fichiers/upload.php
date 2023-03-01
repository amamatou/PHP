<?php
// var_dump($_POST);
// var_dump($_FILES);

//le fichier a t il ete envoye ?
if(!empty($_FILES['monfichier']['tmp_name']))
{    //a t il ete correctement uploade ?
    if(is_uploaded_file($_FILES['monfichier']['tmp_name']))
    {
        // a t il un type autorise ?
        $typeMime = mime_content_type($_FILES['monfichier']['tmp_name']);

        if($typeMime == 'application/pdf')
        {
           // respecte t il la taille limite ?
           $size = filesize($_FILES['monfichier']['tmp_name']); 
            if($size > 10240000)
            {
                $message = "Le fichier ne doit pas depasser 10240000 octets";
            }
            else 
            {
                //Nettoyage du nom de fichier
                $nomAvantNettoyage = $_POST['filename'];
                //Remplacer les caracteres qui ne sont ni des lettres ni des nombres par un tiret
                $nomEnCoursDeNettoyage = preg_replace('~[^\\pL\d]=~u', '-', $nomAvantNettoyage);
                //Retire les tirets en debut et en fin de chaine
                $nomEnCoursDeNettoyage = trim($nomEnCoursDeNettoyage, '-');
                //Passer d'un encodage UTF-8 a un encodage
                $nomEnCoursDeNettoyage = iconv('utf-8', 'us-ascii//TRANSLIT', $nomEnCoursDeNettoyage);
                //On met le nom en minuscules
                $nomEnCoursDeNettoyage = strtolower($nomEnCoursDeNettoyage);
                //Suppression des caracteres indesirables
                $nomNettoye = preg_replace('~[^\w]=+~', '', $nomEnCoursDeNettoyage);

                //chemin complet de destination avec l'extension
                $extension = substr (strrchr($_FILES['monfichier']['name'], "."), 1);
                $cheminDeDestination = 'upload/'.$nomNettoye.'.'.$extension;

                //on peut maintenant deplacer le fichier avec le nouveau nom
                $moveIsOk = move_uploaded_file($_FILES['monfichier']['name'], $cheminDeDestination);

                if($moveIsOk)
                {
                    $message = "Le fichier a ete uploadé dans ".$cheminDeDestination;
                }
                else 
                {
                    $message = "Le fichier n'a pas ete uploadé";
                }
            }
        }
        else 
        {
            $message = "Il faut obligatoirement proposer un fichier pdf";
        }
    }
    else 
    {
        $message = "Aucun fichier a telecharger";
    }
}
else
{
    echo $message = "Aucun fichier envoyé";
}
    
    

// $extension = substr (strrchr($_FILES['monfichier']['name'], "."), 1);
// $nouveauNom = $_POST['filename'].'.'.$extension;

// $cheminEtNomTemporaire = $_FILES['monfichier']['tmp_name'];
// $cheminEtNomDefinitif ='upload/'.$nouveauNom;

// $moveIsOk = move_uploaded_file($cheminEtNomTemporaire, $cheminEtNomDefinitif);

// if($moveIsOk)
// {
//     $message = "Le fichier a ete uploadé dans ".$cheminEtNomDefinitif;
// }
// else 
// {
//     $message = "Le fichier n'a pas ete uploadé";
// }
// ?>

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