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
            <form class="" action="cambiacolore.php" method="post">
                R: <input type="text" name="red" value="0" maxlength="2"><br>
                G: <input type="text" name="green" value="0" maxlength="2"><br>
                B: <input type="text" name="blue" value="0" maxlength="2"><br>
                <button type="submit" name="submit">Invia</button>
            </form>
        </div>
        <div class="footer">
            <p>Consegna:</p>
            <div class="parsed_mardown" style="width:50%;">
                <?php
                    include __DIR__ . "/../../Parsedown.php";
                    $Parsedown = new Parsedown();
                    // get contents of a file into a string
                    $filename = "consegna.md";
                    $handle = fopen($filename, "r");
                    $contents = fread($handle, filesize($filename));
                    //print parsed markdown
                    if($contents)
                        echo $Parsedown->text($contents);
                    fclose($handle);
                ?>
            </div>
        </div>
    </body>
</html>
