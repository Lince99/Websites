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
					<div class="container" style="margin-top:1em;">
						<div class="panel panel-default">
							<div class="panel-body">
								<h2>Lista di tutti i passeggeri in stato di <bold>fermo</bold></h2>
								<!-- controlli -->
								<?php
									print_buttons_general("#tabella_lista_passeggeri_fermi");
									print_buttons_filter("controlli.php#tabella_lista_passeggeri_fermi", "#tabella_lista_passeggeri_fermi");
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
									<tbody id="tabella_lista_passeggeri_fermi" class="collapse out">
										<?php
											print_lista_passeggeri_fermi();
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane container fade" id="controlli_merce">
					<div class="container" style="margin-top:1em;">
						<div class="panel panel-default">
							<div class="panel-body">
								<h2>Lista di tutta la merce controllata</h2>
								<!-- controlli -->
								<?php
									print_buttons_general("#tabella_lista_merce");
									print_buttons_filter("controlli.php#tabella_lista_merce", "#tabella_lista_merce");
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
											<th scope="col">#</th>
											<th scope="col">Punto di controllo</th>
											<th scope="col">Cognome addetto</th>
											<th scope="col">Merce</th>
											<th scope="col">Data inizio controllo</th>
											<th scope="col">Data fine controllo</th>
											<th scope="col">Esito</th>
										</tr>
									</thead>
									<tbody id="tabella_lista_merce" class="collapse out">
										<?php
											print_lista_merce();
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="container" style="margin-top:1em;">
						<div class="panel panel-default">
							<div class="panel-body">
								<h3>Merci respinte dall'inizio dell'anno</h3>
								<!-- controlli -->
								<?php print_buttons_general("#tabella_merce_respinta"); ?>
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
									<tbody id="tabella_merce_respinta" class="collapse out">
										<?php
											print_lista_merce_respinta();
										?>
									</tbody>
								</table>
								<p>Totale merce respinta: <?php print_totale_merce_respinta() ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane container fade" id="controlli_contestazioni">
					<div class="container" style="margin-top:1em;">
						<div class="panel panel-default">
							<div class="panel-body">
								<h3>Numero di contestazioni per addetto</h3>
								<!-- controlli -->
								<?php print_buttons_general("#tabella_contestazioni_passeggeri"); ?>
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
											<th scope="col">Cognome addetto</th>
											<th scope="col">Nome addetto</th>
											<th scope="col">Numero di contestazioni effettuate</th>
										</tr>
									</thead>
									<tbody id="tabella_contestazioni_passeggeri" class="collapse out">
										<?php
											print_lista_n_contestazioni();
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane container fade" id="controlli_aperti">
					<!-- TODO -->
					<div class="container" style="margin-top:1em;">
						<div class="panel panel-default">
							<div class="panel-body">
								<h3>Lista dei rapporti attualmente aperti</h3>
								<!-- controlli -->
								<?php print_buttons_general("#tabella_rapporti_aperti"); ?>
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
											<th scope="col">Nome Dogana</th>
											<th scope="col">Data_inizio</th>
											<th scope="col">Note</th>
											<th scope="col">Dazio</th>
										</tr>
									</thead>
									<tbody id="tabella_rapporti_aperti" class="collapse out">
										<?php
											print_controlli_aperti();
										?>
									</tbody>
								</table>
							</div>
						</div>
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
