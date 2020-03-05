<?php
	include_once 'frontend/header.php';
	include_once 'frontend/footer.php';
	include_once 'frontend/controlli_management.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Controlli doganali</title>
        <?php import_js_css(); ?>
    </head>
    <body>

        <?php
			include_once 'backend/dbconnect.php';
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
						<div class="table-responsive">
							<table class="table table-striped table-borderless table-hover">
							  <thead class="thead-dark">
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">First</th>
							      <th scope="col">Last</th>
							      <th scope="col">Handle</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td>Mark</td>
							      <td>Otto</td>
							      <td>@mdo</td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>Jacob</td>
							      <td>Thornton</td>
							      <td>@fat</td>
							    </tr>
							    <tr>
							      <th scope="row">3</th>
							      <td>Larry</td>
							      <td>the Bird</td>
							      <td>@twitter</td>
							    </tr>
							  </tbody>
							</table>
						</div>

						<?php
							print_all_controlli();
						?>
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
