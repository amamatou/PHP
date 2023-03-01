<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire d'upload</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <form action="upload_2.php" method="POST" enctype="multipart/form-data">
            <p><input type="text" name="filename" /></p>
            <p><input type="hidden" name="MAX_file_SIZE" value='1024000'/></p>
            <p><input type="file" name="monfichier" /></p>
            <p><input type="submit" value="Envoyer"/></p>
        </form>
    </body>
</html>