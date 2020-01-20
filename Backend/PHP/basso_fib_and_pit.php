<!DOCTYPE html>

<!--
Con Javascript è possibile utilizzare la funzione document.write
per generare output all'interno del body: testo, tag html, contenuto di variabili.

Dopo avere testato e sperimentato il funzionamento del file allegato,
svolgere i seguenti esercizi:

1) generare la successione di Fibonacci separando i valori con uno spazio

2) generare la tavola Pitagorica con ampiezza ricevuta in input dall'utente,
inserendo i valori in celle di una tabella (eventualmente aggiungere
anche le celle di intestazione per il numero di riga e il numero di colonna)
-->
<head>
	<style media="screen">
		* {
			margin: 0 auto;
		}
	</style>
	<?php
		function stampaTabella($nRighe, $nColonne) {
			echo "<table border=\"1\">";
			for($riga = 0; $riga < $nRighe; $riga++) {
				echo "<tr>"; // scrivo il tag di apertura riga
				for($colonna = 0; $colonna < $nColonne; $colonna ++)
					echo "<td>cella $riga, $colonna</td>";
				echo "</tr>"; // scrivo il tag per chiusura riga
			}
			echo "</table>";  // chiudo il tag table
		}
		function Fibonacci($count) {
			$i = 0;
			$b = 0;
			$c = 0;

			echo "<p>$i ";
			for($i = 1; $i < $count; $i++) {
				$c = $i;
				$i = $b;
				$b = $c;
				$i++;
				echo "$i ";
			}
			echo "</p>";
		}
		function Pitagorica($maxa, $maxb) {
			echo "<table>";
			for ($i = 1; $i < $maxa+1; $i++) {
				if($i%2 == 0)
					echo "<tr style=\"background-color: red;\">";
				else
					echo "<tr style=\"background-color: white;\">";

				for ($j = 1; $j < $maxb+1; $j++) {
					if($j%2 != 0)
						echo "<td style=\"background-color: red;\">";
					else
						echo "<td style=\"background-color: white;\">";
					echo "<td>$i*$j</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}
	?>
</head>
<body>
	<div>
		<h1>Esempio di output con tag html prodotti con document.write</h1>
		<?php
			$nRighe = 12;
			$nColonne = 4;
			stampaTabella($nRighe, $nColonne);
		?>
	</div>

	<div>
		<h1>Sequenza di fibonacci</h1>
		<p>Inserisci il numero di righe per stampare la sequenza:</p>
		<br/>
		<?php
			$count = 12;
			Fibonacci($count);
		?>
	</div>

	</div>
		<h1>Tavola pitagorica</h1>
		<br/>
		<?php
			$maxa = 5;
			$maxb = 5;
			Pitagorica($maxa, $maxb);
		?>
	</div>

</body>
