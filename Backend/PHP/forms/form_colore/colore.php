<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Colori tuttigusti!</title>
    </head>
    <body>
        <div class="title">
            <h1>Inserisci un colore (da 0 a 255):</h1>
        </div>
        <div class="user_form">
            <form class="" action="calcolastipendio.php" method="post">
                R: <input type="number" name="red" value="0"><br>
                G: <input type="number" name="green" value="0"><br>
                B: <input type="number" name="blue" value="0"><br>
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
