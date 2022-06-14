<?php        
        $date = $row['date'];
        $file = fopen($date'.html', "a") or die("No se pudo crear el post");
        fwrite($file, "<h2>$row[uid]<h2>");
        fclose($file);
?>        