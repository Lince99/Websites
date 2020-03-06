<?php
	include_once 'frontend/header.php';
	include_once 'frontend/footer.php';
	include_once 'frontend/table_menu.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Gestione addetti aeroportuali</title>
        <?php import_js_css(); ?>
    </head>
    <body>
        <?php
			include_once 'backend/addetti_management.php';
			print_lista_addetti_title();
			print_menu();
		?>

        <div class="container">
			<div class="container" style="margin-top:1em;">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3>Lista degli addetti aeroportuali presenti oggi <?php echo $QIN_data_inizio_controllo_addetti ?></h3>
						<!-- controlli -->
						<?php print_buttons_general("#tabella_lista_addetti_presenti"); ?>
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
									<th scope="col">Cognome</th>
									<th scope="col">Nome</th>
									<th scope="col">Punto di Controllo</th>
								</tr>
							</thead>
							<tbody id="tabella_lista_addetti_presenti" class="collapse out">
								<?php
									print_lista_addetti_presenti();
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="container" style="margin-top:1em;">
				<div class="panel panel-default">
					<div class="panel-body">
						<h1>Lista degli addetti aeroportuali</h1>
						<!-- controlli -->
						<?php print_buttons_general("#tabella_lista_addetti"); ?>
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
									<th scope="col">Cognome</th>
									<th scope="col">Nome</th>
									<th scope="col">Ruolo</th>
									<th scope="col">Email</th>
								</tr>
							</thead>
							<tbody id="tabella_lista_addetti" class="collapse out">
								<?php
									print_lista_addetti();
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
