<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt); //pour ecrire $txt dans le fichier $myfile
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile); //when we open an existing file for writing. All the existing data will be ERASED and we start with an empty file.
?>