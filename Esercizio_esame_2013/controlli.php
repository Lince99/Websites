<?php
	include_once 'frontend/header.php';
	include_once 'frontend/footer.php';
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
					<div class="container-fluid">
						<!-- tabella riassuntiva -->
						<div class="table-responsive">
							<table class="table table-striped table-borderless table-hover">
								<thead class="thead-dark">
									<tr>
										<th scope="col">#</th>
										<th scope="col">Dogana</th>
										<th scope="col">Addetto</th>
										<th scope="col">Soggetto controllato</th>
										<th scope="col">Data_inizio</th>
										<th scope="col">Data_fine</th>
										<th scope="col">Note</th>
										<th scope="col">Dazio</th>
										<th scope="col">Stato</th>
									</tr>
								</thead>
								<tbody>
									<?php
										print_all_controlli();
									?>
								</tbody>
							</table>
						</div>
						<!-- controlli -->
					</div>
				</div>
				<div class="tab-pane container active" id="controlli_passeggeri">
					<?php
						print_all_passeggeri();
					?>
				</div>
				<div class="tab-pane container fade" id="controlli_merce">
					<?php
						print_all_merce();
					?>
				</div>
				<div class="tab-pane container fade" id="controlli_contestazioni">
					<?php
						print_all_contestazioni();
					?>
				</div>
				<div class="tab-pane container fade" id="controlli_aperti">
					<?php
						print_open_controlli();
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
