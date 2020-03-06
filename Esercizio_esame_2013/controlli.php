<?php
	include_once 'frontend/header.php';
	include_once 'frontend/footer.php';
	include_once 'frontend/table_menu.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Controlli doganali</title>
        <?php import_js_css(); ?>
    </head>
    <body>

        <?php
			include_once 'backend/controlli_management.php';
			print_controlli_title();
			print_menu();
		?>

        <div class="container" style="margin-top:30px">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#controlli_home">Controlli</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#controlli_passeggeri">Passeggeri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#controlli_merce">Merce</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#controlli_contestazioni">Contestazioni</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#controlli_aperti">Rapporti aperti</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane container active" id="controlli_home">
					<div class="container" style="margin-top:1em;">
						<div class="panel panel-default">
							<div class="panel-body">
								<h2>Lista di tutti i controlli effettuati finora</h2>
								<!-- controlli -->
								<?php print_buttons_general("#tabella_riassunto_controlli"); ?>
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
											<th scope="col">Dogana</th>
											<th scope="col">Addetto</th>
											<th scope="col">Soggetto controllato</th>
											<th scope="col">Data_inizio</th>
											<th scope="col">Data_fine</th>
											<th scope="col">Stato</th>
										</tr>
									</thead>
									<tbody id="tabella_riassunto_controlli" class="collapse out">
										<?php
											print_riassunto_controlli();
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<hr>
					<div class="container" style="margin-top:1em;">
						<div class="panel panel-default">
							<div class="panel-body">
								<h3>Dazi doganali appplicati in ogni punto di controllo</h3>
								<!-- controlli -->
								<?php print_buttons_general("#tabella_dazi_doganali"); ?>
							</div>
						</div>
						<hr>
						<div class="container">
							<!-- tabella riassuntiva -->
							<div class="table-responsive table-fixed Custom_table_scrollable">
								<table class="table table-striped table-borderless table-hover" cellspacing="0" width="100%">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Punto di controllo</th>
											<th scope="col">Totale dei dazi</th>
										</tr>
									</thead>
									<tbody id="tabella_dazi_doganali" class="collapse out">
										<?php
											print_dazi_doganali();
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane container fade" id="controlli_passeggeri">
					<div class="container" style="margin-top:1em;">
						<div class="panel panel-default">
							<div class="panel-body">
								<h2>Lista di tutti i passeggeri controllati in un certo periodo</h2>
								<!-- controlli -->
								<?php
									print_buttons_general("#tabella_lista_passeggeri");
									print_buttons_filter("controlli.php#controlli_passeggeri", "#tabella_lista_passeggeri");
								?>
							</div>
						</div>
						<hr>
						<div class="container">
							<!-- tabella riassuntiva -->
							<div class="table-responsive table-fixed Custom_table_scrollable">
								<table class="table table-striped table-borderless table-hover" cellspacing="0" width="100%">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Nome dogana</th>
											<th scope="col">Passaporto</th>
											<th scope="col">Cognome</th>
											<th scope="col">Nome</th>
											<th scope="col">Aeroporto di provenienza</th>
											<th scope="col">Aeroporto di destinazione</th>
											<th scope="col">Motivo del viaggio</th>
											<th scope="col">Data inizio controllo</th>
											<th scope="col">Data fine controllo</th>
											<th scope="col">Esito</th>
										</tr>
									</thead>
									<tbody id="tabella_lista_passeggeri" class="collapse out">
										<?php
											print_lista_passeggeri();
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane container fade" id="controlli_merce">
					<?php
						print_lista_merce();
					?>
				</div>
				<div class="tab-pane container fade" id="controlli_contestazioni">
					<?php
						print_lista_contestazioni();
					?>
				</div>
				<div class="tab-pane container fade" id="controlli_aperti">
					<?php
						print_controlli_aperti();
					?>
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
