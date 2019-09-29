<?php
	require_once("config.php");
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
		<meta name = "keywords" content = "mdc, computer, museo, ITIS"/>
		<meta name = "description" content = "Old PC's Museum"/>
        <title>Galleria MdC</title>
        <link rel="stylesheet" href="default_style.css">
    </head>
    <body>
        <div class="navbar">
            <a href="index.php" class="btn">Home</a><a href="#" class="btn active">Galleria</a><a href="news.php" class="btn">News</a><a href="contacts.php" class="btn">Contatti</a>
        </div>
        <div class="section">
            <div class="article">
                <div class="title">
                    PC presenti nel nostro museo:
                </div>
                <div class="content">
                    <h1>Inventory</h1>
                </div>
            </div>
        </div>
        <div class="footer">
            <a href="#" class="return-top"> RETURN TOP </a>
            <p class="content">
                <span> (C) Copyright </span><br>e link esterni<br>
                <?php echo $error ?>
            </p>
        </div>

    </body>
</html>
