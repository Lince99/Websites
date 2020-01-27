<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calcolatore di ipotenuse</title>
    </head>
    <body>
        <div class="title">
            <h1>Inserisci la lunghezza dei cateti</h1>
        </div>
        <div class="user_form">
            <form class="" action="calcolacateti.php" method="post">
                Primo cateto (altezza):<input type="number" name="cat1" value="0"><br>
                Secondo cateto (lunghezza):<input type="number" name="cat2" value="0"><br>
                <button type="submit" name="submit">Invia</button>
            </form>
        </div>
        <div class="footer">
            <pre style="margin-top:200px; background-color:gray; max-width:100%; word-wrap: break-word;">Consegna:
                <?php
                // get contents of a file into a string
                $filename = "consegna.md";
                $handle = fopen($filename, "r");
                $contents = fread($handle, filesize($filename));
                if($contents)
                    echo $contents;
                fclose($handle);
                ?>
            </pre>
        </div>
    </body>
</html>
