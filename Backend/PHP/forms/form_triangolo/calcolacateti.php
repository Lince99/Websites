<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Triangolazione del triangolo...</title>
    </head>
    <body>
        <div class="output">
            <h1>Dati ricevuti:</h1>
            <?php
                $cat1 = $_POST["cat1"];
                $cat2 = $_POST["cat2"];
                $ris = sqrt(pow($cat1,2)+pow($cat2,2));
                echo "<hr><p>Ipotenusa =".$ris."</p>";
                echo "<p>Altezza: ".$cat1."</p>";
                echo "<p>Larghezza: ".$cat2."</p>";
            ?>
        </div>
    </body>
</html>
