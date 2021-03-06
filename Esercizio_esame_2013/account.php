<?php
	include_once 'frontend/header.php';
	include_once 'frontend/footer.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Account personale</title>
        <?php import_js_css(); ?>
    </head>
    <body>
        <?php
			include_once 'backend/dbconnect.php';
			print_account_title();
			print_menu();
		?>

		<div class="container sm-4 mt-4">
			<h1 class="text-center">Registrazione/Login</h1>
		</div>
        <div class="container">
			<div class="login-form">
				<form action="backend/register_user.php" method="post">
					<h2>Log in</h2>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" required="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" required="required">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Log in</button>
					</div>
					<div class="clearfix">
						<label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label><br>
						<a href="#" class="pull-right">Forgot Password?</a>
					</div>
				</form>
				<!-- TODO -->
				<p class="text-center"><a href="#">Create an Account</a></p>
			</div>
        </div>

        <?php print_footer() ?>
    </body>
</html>

<?php
    //automatic database disconnection
    if($conn)
        $conn->close();
?>
