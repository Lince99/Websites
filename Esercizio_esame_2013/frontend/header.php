<?php
    include_once 'navbar.php';

    function import_js_css() {
        ?>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="frontend/css/master.css">
        <?php
    }

    function print_index_title() {
        ?>
        <div class="jumbotron text-center" style="margin-bottom:0">
		  <h1>Home page del gestionale delle dogane aeroportuali</h1>
		  <p>Esercizio basato sulla consegna "Anno 2013 - Informatica ABACUS"</p>
		</div>
        <?php
    }
    function print_controlli_title() {
        ?>
        <div class="jumbotron text-center" style="margin-bottom:0">
		  <h3>Pagina di gestione dei controlli effettuati</h3>
		</div>
        <?php
    }

    function print_lista_dogane_title() {
        ?>
        <div class="jumbotron text-center" style="margin-bottom:0">
		  <h3>Gestione delle dogane presenti nell'Aeroporto Internazionale</h3>
		</div>
        <?php
    }

    function print_lista_addetti_title() {
        ?>
        <div class="jumbotron text-center" style="margin-bottom:0">
		  <h3>Gestione degli addetti aeroportuali</h3>
		</div>
        <?php
    }

    function print_account_title() {
        ?>
        <div class="jumbotron text-center" style="margin-bottom:0">
		  <h3>Gestione account personale</h3>
		</div>
        <?php
    }
?>
