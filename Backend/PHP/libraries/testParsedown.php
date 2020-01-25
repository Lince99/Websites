<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Test parsedown</title>
    </head>
    <body>
        <div class="title">
            <h1>Test <a href="https://github.com/erusev/parsedown">Parsedown</a></h1>
        </div>
        <div class="test">
			<?php
				include_once 'Parsedown.php';
				$Parsedown = new Parsedown();
				echo $Parsedown->text('Hello _Parsedown_!'); # prints: <p>Hello <em>Parsedown</em>!</p>
			?>
        </div>
    </body>
</html>
