<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calcolato</title>
    </head>
    <?php
        $red = $_POST["red"];
        $green = $_POST["green"];
        $blue = $_POST["blue"];
        $bgcolor = $red.$green.$blue;
    ?>
    <body style="background-color:#<?php echo $bgcolor ?>">
        <div class="output">
            <h1>Dati ricevuti:</h1>
            <?php
                echo "<p>R: ".$red."</p>";
                echo "<p>G: ".$green."</p>";
                echo "<p>B: ".$blue."</p>";
                echo "<p><strong>codice colore: ".$red.$green.$blue."</strong></p>";
            ?>
        </div>
        <div class="error">
            <!-- TODO -->
        </div>
    </body>
</html>
