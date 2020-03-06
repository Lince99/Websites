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

		<div class="jumbotron jumbotron-fluid">
			<div class="container justify-content-center">
				<h1>Consegna</h1>
				<hr>
				<h3>Anno 2013 – Informatica ABACUS</h3>
				<h5>Testo</h5>
			</div>
			<div class="container">
				<pre>
Una Società Aeroportuale commissiona lo sviluppo di un software per la gestione dei controlli
passeggeri e merci nei vari punti di dogana presenti in un Aeroporto Internazionale.

Si richiede la memorizzazione, per ogni controllo effettuato, dei dati relativi a:
1. passeggero: cognome, nome, nazionalità, numero passaporto o carta d’identità,
	aeroporto di provenienza/destinazione, motivo del viaggio;
2. merce trasportata: categoria di appartenenza (generi alimentari,
	strumentazione elettronica, farmaci, abbigliamento, ...), descrizione, quantità dichiarata;
3. controllo effettuato: punto di controllo, identificativo dell’addetto al controllo,
	data e ora inizio/fine controllo, esito (nessuna segnalazione, merce respinta, fermo del passeggero, ...),
	dazio doganale (non dovuto / importo del dazio, se dovuto), note.

La procedura prevede che il funzionario incaricato provveda ad autenticarsi sul sistema e inserisca
in tempo reale i dati relativi ad ogni nuovo controllo.
Il sistema dovrà registrare i dati provenienti dai vari punti di controllo e fornire le necessarie
funzioni per la segnalazione ai funzionari incaricati, delle situazioni da gestire:

- ritiro della merce sequestrata da parte del personale addetto al controllo;
- apertura della pratica di fermo del passeggero con segnalazione all’organo preposto (Polizia
Aeroportuale);
- analisi delle note di controllo e gestione delle eventuali contestazioni;
- chiusura di tutti i rapporti di controllo aperti dagli addetti secondo le loro competenze.

Il candidato realizzi:
un’analisi della realtà di riferimento, completa delle ipotesi aggiuntive necessarie, a suo motivato
giudizio, per la realizzazione di uno schema adeguato dell’architettura proposta;

- uno schema concettuale ed uno schema logico del data base;
- la definizione delle relazioni e le seguenti interrogazioni espresse in linguaggio SQL:

1. visualizzare i dati di tutti i passeggeri che sono stati controllati in ciascuno dei punti di dogana
nell’arco della giornata;
2. visualizzare per ciascun punto di controllo l’ammontare dei dazi doganali registrati;
3. calcolare e visualizzare quante merci per ogni categoria sono state respinte dall’inizio
dell’anno;
4. calcolare e visualizzare quante contestazioni sono state registrate da ciascun addetto;
5. calcolare la durata media dei controlli per ogni punto di controllo nell’arco della giornata;
6. visualizzare l’elenco, in ordine alfabetico, raggruppato per nazionalità, dei passeggeri in stato
di fermo, registrati dall’inizio dell’anno in tutti i punti di controllo;
7. visualizzare gli addetti in servizio nella giornata, suddivisi per nome del funzionario incaricato.

- la codifica in un linguaggio di programmazione a scelta di un segmento significativo del
progetto realizzato.
				</pre>
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
