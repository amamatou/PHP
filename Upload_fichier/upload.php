<?php
    if(isset($_POST))
    {
        function rearrange(&$tab_fichiers) 
        {
            $nouveau_tab_fichiers = array();
            $nbr_fichiers = count($tab_fichiers['name']);
            $cle_fichiers = array_keys($tab_fichiers);
            for ($i=0; $i<$nbr_fichiers; $i++) 
            {
                foreach ($cle_fichiers as $cle) 
                {
                    $nouveau_tab_fichiers[$i][$cle] = $tab_fichiers[$cle][$i];
                }
            }
        
            return $nouveau_tab_fichiers;
        }
        if(!empty($_FILES['mesfichiers']['tmp_name']))
        {
            $tab_fichiers = rearrange($_FILES['mesfichiers']);
            foreach ($tab_fichiers as $file) 
            {
                $file_tmp = $file['tmp_name'];
                //a t il ete correctement uploade ?
                if(is_uploaded_file($file_tmp))
                {
                    // Verification de la taille et du type MIME
                    $typeMime = mime_content_type($file_tmp);

                    if($typeMime != 'text/plain' && $typeMime != 'image/gif' && $typeMime != 'image/jpg' && $typeMime != 'image/jpeg' && $typeMime != 'image/png')
                    {
                        echo "<p> Les types autorises sont txt, jpg, jpeg, png et gif </p>";
                    }
                    else 
                    {
                        $size = filesize($file_tmp); 
                        if($size > 1024000)
                        {
                          echo '<p>Le fichier "'.$file['name'].'" depasse 1024000 octets </p>';
                        }
                        else 
                        {
                            $dir = 'Uploaded/';
                            $name = basename($file['name']);
                            $file_def = $dir.$name;

                            //Copie du fichier temporaire dans le nouvel emplacement
                            $moveIsOk = move_uploaded_file($file_tmp, $file_def);

                            if($moveIsOk)
                            {
                                echo '<p>Le fichier "'.$file['name'].'" a ete uploade</p>' ;
                            }
                            else 
                            {
                                echo '<p>Fichier non pas uploadé </p>';
                            }
                        } 
                        
                    }   
                }
            }
        }
        else 
        {
            echo 'Aucun fichier envoyé <br/>';
        }       
    }
?>