<?php
    function multiplication($NbrLignes, $NbrColonnes)
    {
        for($j=1; $j<=$NbrColonnes; $j++)
        {
            echo "<th>$j</th>";
        }

        echo "</tr></thead><tbody>";

        for($i=2; $i<=$NbrLignes; $i++)
        {
            echo "<tr>";
            echo "<th>$i</th>";
            for($j=2; $j<=$NbrColonnes; $j++)
            {
                echo "<td align=center>".$i*$j."</td>";
            }
            
        }
    }
?>