<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calcolato</title>
    </head>
    <body>
        <div class="output">
            <h1>Dati ricevuti:</h1>
            <?php
                $red = $_POST["red"];
                $green = $_POST["green"];
                $blue = $_POST["blue"];
                echo "<p>R: ".$red."</p>";
                echo "<p>G: ".$green."</p>";
                echo "<p>B: ".$blue."</p>";
            ?>
        </div>
        <?php
            if($red < 0 || $red > 255)
                echo "<h2 style=\"color:red\">ROSSO INVALIDO!</h2>";
            if($green < 0 || $green > 255)
                echo "<h2 style=\"color:red\">VERDE INVALIDO!</h2>";
            if($blue < 0 || $blue > 255)
                echo "<h2 style=\"color:red\">BLU INVALIDO!</h2>";
            echo "<div style=\"background-color: #".
                $red.$green.$blue."\">";
            echo "<h1 style=\"color:black; text-shadow: 2px 2px 4px white;\">
                SFONDO COLORATO</h1></div>";
        ?>
    </body>
</html>
