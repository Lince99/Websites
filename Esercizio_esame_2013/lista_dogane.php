<?php
	include_once 'frontend/header.php';
	include_once 'frontend/footer.php';
	include_once 'frontend/table_menu.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Lista delle dogane</title>
        <?php import_js_css(); ?>
    </head>
    <body>
        <?php
			include_once 'backend/dogane_management.php';
			print_lista_dogane_title();
			print_menu();
		?>

        <div class="container">
			<div class="container" style="margin-top:1em;">
				<div class="panel panel-default">
					<div class="panel-body">
						<h1>Dogane / Punti di Controllo</h1>
						<!-- controlli -->
						<?php print_buttons_general("#tabella_lista_dogane"); ?>
					</div>
				</div>
				<hr>
				<div class="container">
					<!-- tabella riassuntiva -->
					<div class="table-responsive table-fixed Custom_table_scrollable">
						<table class="table table-striped table-borderless table-hover" cellspacing="0" width="100%">
							<thead class="thead-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nome del punto di controllo</th>
								</tr>
							</thead>
							<tbody id="tabella_lista_dogane" class="collapse out">
								<?php
									print_dogane();
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="container" style="margin-top:1em;">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3>Durata media dei controlli</h3>
						<!-- controlli -->
						<?php print_buttons_general("#tabella_lista_durata_media_controlli"); ?>
					</div>
				</div>
				<hr>
				<div class="container">
					<!-- tabella riassuntiva -->
					<div class="table-responsive table-fixed Custom_table_scrollable">
						<table class="table table-striped table-borderless table-hover" cellspacing="0" width="100%">
							<thead class="thead-dark">
								<tr>
									<th scope="col">Nome del punto di controllo</th>
									<th scope="col">Durata media (in minuti)</th>
								</tr>
							</thead>
							<tbody id="tabella_lista_durata_media_controlli" class="collapse out">
								<?php
									print_durata_media_controlli();
								?>
							</tbody>
						</table>
					</div>
				</div>
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
