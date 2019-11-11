CREATE TABLE lingua (
	id INT(11) AUTO_INCREMENT NOT NULL, 
	nome CHAR(30), 
	PRIMARY KEY(id)
);

CREATE TABLE conoscenza_lingua (matricola_studente CHAR(10) , id_lingua INT(11), scritto INT(11), orale INT(11))
 
