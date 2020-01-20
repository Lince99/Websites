<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dati verificati!</title>
    </head>
    <body>
        <h2>Welcome</h2>
        <?php
            echo $_GET["surname"]." ".$_GET["name"];
        ?>
        <br>
        <p>Your email address is:
            <?php
                echo $_GET["email"];
            ?>
        </p>
        <hr>
        <p>GET list:<?php echo implode("|",$_GET); ?></p>
        <p>POST list:<?php echo implode("|",$_POST); ?></p>
    </body>
</html>
