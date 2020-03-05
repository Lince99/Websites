<?php
	include_once 'frontend/header.php';
	include_once 'frontend/footer.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<title>Home page Gestione dogane</title>
		<?php import_js_css(); ?>
	</head>

	<body>
		<?php
			include_once 'backend/dbconnect.php';
			print_index_title();
			print_menu();
		?>

		<div class="container">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<?php print_footer() ?>
	</body>
</html>

<?php
    //automatic database disconnection
    if($conn)
        $conn->close();
?>
