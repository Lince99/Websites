<?php
	include_once 'frontend/header.php';
	include_once 'frontend/footer.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Lista delle dogane</title>
        <?php import_js_css(); ?>
    </head>
    <body>
        <?php
			include_once 'backend/dbconnect.php';
			print_lista_dogane_title();
			print_menu();
		?>

        <div class="container">

        </div>

        <?php print_footer() ?>
    </body>
</html>

<?php
    //automatic database disconnection
    if($conn)
        $conn->close();
?>
