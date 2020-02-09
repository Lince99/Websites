# Rubrica con connessione al database

Realizzare una applicazione con un'interfaccia che consenta di inserire i dati di una rubrica telefonica:
- ID
- nome
- cognome
- indirizzo
- telefono
- ecc...

per poi visualizzarli e cancellarli.

---

Relativamente alla cancellazione di un record e relativi messaggi utente sull'esito dell'operazione, dopo aver lanciato la query da codice PHP, utilizzare la funzione _mysqli_affected_rows_ che restituisce il numero di record interessati dalla query appena eseguita:
1. se restituisce il valore 0, la cancellazione non è avvenuta.
1. se restituisce altro allora ha avuto successo


## Database

utenteRubrica (ID, nome, cognome, indirizzo, telefono, dataNascita, email)

PK = utenteRubrica.ID


### Queries

```sql
USE 5ai_19_20_s01118;

CREATE TABLE IF NOT EXISTS `200203_utenteRubrica`(
    `ID` INT(11) NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(30) NOT NULL,
	`cognome` VARCHAR(30) NOT NULL,
	`indirizzo` VARCHAR(50) DEFAULT NULL,
    `telefono` VARCHAR(16) NOT NULL,
    `dataNascita` DATE DEFAULT NULL,
    `email` VARCHAR(50) DEFAULT NULL,
    PRIMARY KEY(ID)
);

INSERT INTO `200203_utenteRubrica`
    (`nome`, `cognome`, `indirizzo`, `telefono`, `dataNascita`, `email`) VALUES
    ('Mario', 'Mastroianni', 'Via Roma, 20', '+39 456 273 3456', '2008-11-11', 'email@email.com');

SELECT * FROM `200203_utenteRubrica`
    ORDER BY `cognome`, `nome`;

DELETE FROM `200203_utenteRubrica`
    WHERE `ID` = 1;
```
