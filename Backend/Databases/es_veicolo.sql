-- I veicoli utilizzati in un'area portuale dispongono di un dispositivo che ne registra ogni secondo la posizione e la invia ad un server centrale che la registra in un database.

-- CREATE DATABASE Veicoli;
-- USE Veicoli;

CREATE TABLE 191125_veicolo (
	targa CHAR(7) NOT NULL,
	descrizione VARCHAR(64),
	PRIMARY KEY (targa)
);

CREATE TABLE 191125_posizione (
	veicolo CHAR(7) NOT NULL,
	data_ora TIMESTAMP NOT NULL,
	latitudine DOUBLE,
	longitudine DOUBLE,
	PRIMARY KEY (veicolo, data_ora),
	FOREIGN KEY (veicolo) REFERENCES 191125_veicolo (targa) ON DELETE CASCADE
);



INSERT INTO 191125_veicolo (targa, descrizione) VALUES ('ABC1234', 'automobile');
INSERT INTO 191125_posizione (veicolo, data_ora, latitudine, longitudine) VALUES ('ABC1234', '2019-11-11 22:22:22', '1.1', '2.2');

-- aggiungere dei nuovi veicoli

INSERT INTO 191125_veicolo (targa, descrizione) VALUES ('DB78AD2', 'camion');
INSERT INTO 191125_veicolo (targa, descrizione) VALUES ('PCMR111', 'cybertruck');
INSERT INTO 191125_veicolo (targa, descrizione) VALUES ('1234AAA', 'test');

-- eliminare un veicolo e le relative posizioni registrate nel database

DELETE FROM 191125_posizione WHERE veicolo = 'ABC1234';

-- modificare la descrizione di tre veicoli ( a piacere )

UPDATE 191125_veicolo
	SET descrizione = 'Autocisterna'
	WHERE targa = 'ABC1234';

UPDATE 191125_veicolo
    SET descrizione = 'Tir'
    WHERE targa = 'DB78AD2';

UPDATE 191125_veicolo
    SET descrizione = 'Bicicletta'
    WHERE targa = '1234AAA';

-- aggiungere una nuova posizione per uno specifico veicolo

INSERT INTO 191125_posizione (veicolo, data_ora, latitudine, longitudine) VALUES ('1234AAA', '2019-11-25 11:11:11', '250.10', '100.05');

-- elencare tutte le posizioni di un veicolo comprese tra due orari (anche di giorni diversi)

SELECT * FROM 191125_posizione
	WHERE veicolo = 'ABC1234'
	AND data_ora BETWEEN '19:00:00' AND '24:00:00'
	ORDER BY data_ora;
