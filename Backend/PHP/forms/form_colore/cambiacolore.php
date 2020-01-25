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
                echo "<hr><p>Stipendio calcolato =".($_POST["paga_oraria"]*$_POST["ore_mensili"])."</p>";
                echo "<p>Nome: ".$_POST["nome"]."</p>";
                echo "<p>Ore mensili: ".$_POST["ore_mensili"]."</p>";
                echo "<p>Paga: ".$_POST["paga_oraria"]."</p>";
            ?>
        </div>
    </body>
</html>
