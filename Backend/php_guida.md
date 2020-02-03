# PHP

## INDICE
1. [Introduzione](#Introduzione)
1. [Linguaggio PHP](#PHP)
1.

###### Link utili

https://www.e-fermi.it/moodle27/mod/page/view.php?id=164  
https://www.e-fermi.it/moodle27/course/view.php?id=31#section-0  

---

## Introduzione

PHP è spesso usato assieme altri software in pacchetti come LAMP e WAMP per la creazione di siti dinamici.  
XAMPP è una piattaforma di gestione di siti web dinamici da installare sul server.

![Funzionamento sito web](https://www.e-fermi.it/moodle27/pluginfile.php/1924/mod_page/content/1/ComeFunzionaSitoDinamicoSmall.jpg)

### Laboratorio a scuola e passaggi

Il server a scuola fornisce una cartella per ogni studente e bisogna caricare il file con sftp (sostituire NOMEUTENTE con il proprio nome s0xxxx)

```bash
sftp NOMEUTENTE@contabile.fermi.intra #inserire la password di NOMEUTENTE
lpwd #per vedere dove si è nel client
lcd #per spostarsi nel client
lls #per vedere cosa si ha nella cartella corrente del client
pwd #per vedere dove si è nel server
cd #per spostarsi nel server
put nomefile.php .
```

Cartella dei file: /home/local/NOMEUTENTE/public_html
Pagina web: http://contabile.fermi.intra/~NOMEUTENTE/nomefile.php

### PHP

> Acronimo ricorsivo: _PHP: Hypertext Preprocessor_

Linguaggio di programmazione statico che compila il codice e lo esegue riga per riga (interpreta)

Genera una pagina HTML e se serve effettua connessioni con il database del server.

Ad ogni caricamento di una pagina web tramite un browser vengono processati: dati statici, dati dinamici e query.



[Torna all'indice](#INDICE)

### Programmazione

[www.w3schools.com/php](https://www.w3schools.com/php/)

- Sintassi simile al C (**;** official fanclub member)
- Serve per sviluppare applicazioni web
- Estensione: **.php**
- Funzioni php possono essere inserite in un qualsiasi punto della pagina HTML

Pagina di esempio:
```php
<!DOCTYPE html>
<html>
    <body>

        <h1>My first PHP page</h1>

        <?php
        echo "Hello World!";
        ?>

    </body>
</html>
```

Si utilizza **<?php** per aprire il tag e **?>** per chiuderlo.

#### Stampa di dati

```php
echo "Hello World!";
```

oppure

```php
print "<b>Hello World!</b>";
```

Nella stampa si possono mettere tag HTML come in javascript.

#### Variabili

Le variabili non devono per forza essere dichiarate e non richiedono il tipo di dato (però dichiararle fa sempre bene al debug :3 ).

**Le variabili sono case-sensitive!!!**

```php
$variabile = 0;
```

Esempio di stampa

```php
<?php
    $a = 5;
    echo "a = $a";
    //oppure
    echo "a = " . $a;
?>
```

#### Commenti

```php
//commento a linea singola
# commento a linea singola
/*
commento
multilinea
*/
echo "Hello" /*Commento nel codice */ . " World!";
```

#### Loop

```php
$max = 10;
for($i = 0; $i < $max; $i++)
    //do stuff
```

#### Funzioni

```php
<html>
    <?php

    function somma($a, $b)
    {
    	return ($a + $b);
    }

    ?>
    <head>
        <title>Prova funzione</title>
    </head>
    <body>
    	<?php
        	$valore1 = 10;
        	$valore2 = 42;
        	print("valore1 = $valore1<br>");
        	print("valore2 = $valore2<br>");
        	$somma = somma($valore1, $valore2);
        	print("somma = $somma<br>");
    	?>
    </body>
</html>
```

### Form

In PHP si utilizzano i form per ottenere dati dagli utenti, sia in chiaro che criptati.

Esempio w3c:

```html
<html>
<body>

<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>
```

```php
<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>
```

Per ottenere i dati si usano le variabili globali **$_GET** e **$_POST**:
- $_GET è un'array di variabili passate allo script con i parametri nell'URL.
    - dati in chiaro, usato per inviare dati non sensibili e salvare i dati come segnalibro.
- $_POST è un'array di variabili passate attraverso il metodo HTTP POST.
    - usato per dati sensibili come file e password.

### Database

Per connettersi ad un database MySql ci sono 2 modalità:
1. MySQLi
1. PDO

#### Differenze

PDO è compatibile con vari database mentre MySQLi funziona solo con i server MySQL


#### MySQLi

```php
<?php
    $servername = "contabile.fermi.intra";
    $username = "nomeutente"; //modificare con il proprio
    $password = "password"; //modificare con il proprio

    //crea connessione
    $connection = new mysqli($servername, $username, $password);

    if($connection->connect_error) {
        die("Connection failed".$connection->connect_error);
    }
    echo "Connected successfully";

    //chiude la connessione
    $connection->close();
?>
```

#### PDO

```php
<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    //chiude la connessione
    $conn = null;
?>
```

---

[Torna all'indice](#INDICE)

## TODO

- [x] Pagina PHP con ciclo for da mettere sul server contabile in public_html _/home/local/FERMI/NOMEUTENTE/public_html_ e visualizzarlo all'indirizzo: http://contabile.fermi.intra/~s01118
- [ ] Riadattare esercizio javascript con Fibonacci e tavola pitagorica https://www.e-fermi.it/moodle27/mod/assign/view.php?id=17554
