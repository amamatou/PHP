<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire d'upload</title>
        <meta charset="UTF-8"/>
    </head>
    <body align="center">
        <h1 style="background-color: black; color: white">Formulaire d'upload d'un fichier</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <p><input type="hidden" name="MAX_file_SIZE" value='1024000'/></p>
            <p> 
                <input type="file" name="mesfichiers[]" />
            </p>
            <p> 
                <input type="file" name="mesfichiers[]" />
            </p>
            <p>  
                <input type="file" name="mesfichiers[]" />
            </p>
            <p> 
                <input type="file" name="mesfichiers[]" />
            </p>
            <p>  
                <input type="file" name="mesfichiers[]" />
            </p>
            <p><input type="submit" value="Envoyer"/></p>
        </form>
    </body>
</html>