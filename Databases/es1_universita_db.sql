-- creazione database

CREATE DATABASE 191111_es1_studenti;
USE 191111_es1_studenti;

CREATE TABLE 191111_dipartimento (
	id INT(11) AUTO_INCREMENT NOT NULL,
	nome CHAR(30) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE 191111_corso_laurea (
	id INT(11) AUTO_INCREMENT NOT NULL,
	nome CHAR(30),
	id_dipartimento INT(11),
	area INT(11),
	FOREIGN KEY(id_dipartimento) REFERENCES 191111_dipartimento(id),
	PRIMARY KEY(id)
);

CREATE TABLE 191111_studente (
	matricola CHAR(10) NOT NULL,
	nome CHAR(20),
	cognome CHAR(30) NOT NULL,
	email CHAR(30),
	data_nascita DATETIME,
	comune_nascita CHAR(30),
	telefono CHAR(15),
	id_laurea INT(11),
	FOREIGN KEY(id_laurea) REFERENCES 191111_corso_laurea(id),
	PRIMARY KEY(matricola)
);

CREATE TABLE 191111_docente (
	id INT(11) NOT NULL,
	nome CHAR(30),
	cognome CHAR(30) NOT NULL,
	email CHAR(40),
	PRIMARY KEY(id)
);

CREATE TABLE 191111_corso (
	sigla CHAR(10) NOT NULL,
	titolo CHAR(50) NOT NULL,
	id_docente INT(11),
	ssd CHAR(10),
	cfu INT(11),
	FOREIGN KEY(id_docente) REFERENCES 191111_docente(id),
	PRIMARY KEY(sigla)
);

CREATE TABLE 191111_esame (
	matricola_studente CHAR(10) NOT NULL,
	sigla_corso CHAR(10) NOT NULL,
	anno INT(11),
	voto INT(11),
	PRIMARY KEY(matricola_studente, sigla_corso),
	FOREIGN KEY(matricola_studente) REFERENCES 191111_studente(matricola)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	FOREIGN KEY(sigla_corso) REFERENCES 191111_corso(sigla)
		ON UPDATE CASCADE
		ON DELETE RESTRICT
);

CREATE TABLE 191111_lingua (
	id INT(11) AUTO_INCREMENT NOT NULL,
	nome CHAR(30),
	PRIMARY KEY(id)
);

CREATE TABLE 191111_conoscenza_lingua (
	matricola_studente CHAR(10) NOT NULL,
	id_lingua INT(11),
	scritto INT(11),
	orale INT(11),
	PRIMARY KEY(matricola_studente, id_lingua),
	FOREIGN KEY(matricola_studente) REFERENCES 191111_studente(matricola),
	FOREIGN KEY(id_lingua) REFERENCES 191111_lingua(id)
);

CREATE TABLE 191111_scuola (
	id INT(11) AUTO_INCREMENT NOT NULL,
	nome CHAR(40) NOT NULL,
	citta CHAR(40) NOT NULL,
	titolo CHAR(40) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE 191111_titolo_studio (
	matricola_studente CHAR(10) NOT NULL,
	id_scuola INT(11),
	voto INT(11),
	PRIMARY KEY(matricola_studente, id_scuola),
	FOREIGN KEY(matricola_studente) REFERENCES 191111_studente(matricola),
	FOREIGN KEY(id_scuola) REFERENCES 191111_scuola(id)
);

-- inserimento dati nel db

INSERT INTO 191111_dipartimento(id, nome) VALUES (1, 'Matematica e Fisica');
INSERT INTO 191111_dipartimento(id, nome) VALUES (2, 'Scienze della formazione');
INSERT INTO 191111_dipartimento(id, nome) VALUES (3, 'Ingegneria');
INSERT INTO 191111_dipartimento(id, nome) VALUES (4, 'Lettere e Filosofia');
INSERT INTO 191111_dipartimento(id, nome) VALUES (5, 'Economia e Commercio');
INSERT INTO 191111_dipartimento(id, nome) VALUES (6, 'Architettura');

INSERT INTO 191111_corso_laurea(id, nome, id_dipartimento, area) VALUES (1, 'Matematica', 1, 1);
INSERT INTO 191111_corso_laurea(id, nome, id_dipartimento, area) VALUES (2, 'Fisica', 1, 2);
INSERT INTO 191111_corso_laurea(id, nome, id_dipartimento, area) VALUES (3, 'Scienze formazione', 2, 11);
INSERT INTO 191111_corso_laurea(id, nome, id_dipartimento, area) VALUES (4, 'Ingegneria Meccanica', 3, 9);
INSERT INTO 191111_corso_laurea(id, nome, id_dipartimento, area) VALUES (5, 'Ingegneria Informatica', 3, 9);
INSERT INTO 191111_corso_laurea(id, nome, id_dipartimento, area) VALUES (6, 'Ingegneria gestionale', 3, 9);
INSERT INTO 191111_corso_laurea(id, nome, id_dipartimento, area) VALUES (7, 'Letteratura italiana', 4, 10);
INSERT INTO 191111_corso_laurea(id, nome, id_dipartimento, area) VALUES (8, 'Storia Vicino Oriente', 4, 10);
INSERT INTO 191111_corso_laurea(id, nome, id_dipartimento, area) VALUES (9, 'Storia moderna', 4, 10);
INSERT INTO 191111_corso_laurea(id, nome, id_dipartimento, area) VALUES (10, 'Economia', 5, 13);
INSERT INTO 191111_corso_laurea(id, nome, id_dipartimento, area) VALUES (11, 'Architettura', 6, 8);
INSERT INTO 191111_corso_laurea(id, nome, id_dipartimento, area) VALUES (12, 'Restauro', 6, 8);

INSERT INTO 191111_scuola(id, nome, citta, titolo) VALUES (1, 'Liceo Scientifico ”Peano”', 'Roma', 'Maturita'' scientifica');
INSERT INTO 191111_scuola(id, nome, citta, titolo) VALUES (2, 'Liceo Scientifico ”Morgagni”', 'Roma', 'Maturita'' scientifica');
INSERT INTO 191111_scuola(id, nome, citta, titolo) VALUES (3, 'Liceo Classico ”Virgilio”', 'Roma', 'Maturita'' classica');
INSERT INTO 191111_scuola(id, nome, citta, titolo) VALUES (4, 'ITIS ”Armellini”', 'Roma', 'Perito industriale');
INSERT INTO 191111_scuola(id, nome, citta, titolo) VALUES (5, 'ITIS ”Fermi”', 'Roma', 'Perito industriale');

INSERT INTO 191111_docente(id, nome, cognome, email) VALUES (1, 'Marco', 'Liverani', 'liverani@uniroma3.it');
INSERT INTO 191111_docente(id, nome, cognome, email) VALUES (2, 'Marco', 'Pedicini', 'pedicini@uniroma3.it');
INSERT INTO 191111_docente(id, nome, cognome, email) VALUES (3, 'Gianni', 'Mancini', 'gianni@uniroma3.it');
INSERT INTO 191111_docente(id, nome, cognome, email) VALUES (4, 'Marco', 'Fontana', 'fontana@uniroma3.it');
INSERT INTO 191111_docente(id, nome, cognome, email) VALUES (5, 'Roberto', 'Ferretti', 'ferretti@uniroma3.it');
INSERT INTO 191111_docente(id, nome, cognome, email) VALUES (6, 'Michele', 'Abrusci', 'abrusci@uniroma3.it');

INSERT INTO 191111_corso(sigla, titolo, id_docente, ssd, cfu) VALUES ('IN110', 'Informatica 1', 1, 'INF/01', 10);
INSERT INTO 191111_corso(sigla, titolo, id_docente, ssd, cfu) VALUES ('AL110', 'Algebra 1', 4, 'MAT/02', 10);
INSERT INTO 191111_corso(sigla, titolo, id_docente, ssd, cfu) VALUES ('LM410', 'Logica 1', 6, 'MAT/01', 7);
INSERT INTO 191111_corso(sigla, titolo, id_docente, ssd, cfu) VALUES ('IN440', 'Ottim. Combin.', 1, 'INF/01', 7);
INSERT INTO 191111_corso(sigla, titolo, id_docente, ssd, cfu) VALUES ('IN530', 'Sist.Elab.Inform.', 1, 'INF/01', 4);
INSERT INTO 191111_corso(sigla, titolo, id_docente, ssd, cfu) VALUES ('AM210', 'Analisi Mat. 3', 3, 'MAT/05', 9);

INSERT INTO 191111_lingua(id, nome) VALUES (1, 'Inglese');
INSERT INTO 191111_lingua(id, nome) VALUES (2, 'Francese');
INSERT INTO 191111_lingua(id, nome) VALUES (3, 'Spagnolo');
INSERT INTO 191111_lingua(id, nome) VALUES (4, 'Tedesco');
INSERT INTO 191111_lingua(id, nome) VALUES (5, 'Cinese');
INSERT INTO 191111_lingua(id, nome) VALUES (6, 'Portoghese');

INSERT INTO 191111_studente(matricola, nome, cognome, email, data_nascita, comune_nascita, telefono, id_laurea) VALUES ('101010', 'Giovanni', 'Rossi', 'giovannired@gmail.com', '1993−04−21', 'Roma', '335−123456', 1);
INSERT INTO 191111_studente(matricola, nome, cognome, email, data_nascita, comune_nascita, telefono, id_laurea) VALUES ('202020', 'Giulia', 'Verdi', 'giulia94@yahoo.com', '1994−11−05', 'Napoli', '06−907632', 1);
INSERT INTO 191111_studente(matricola, nome, cognome, email, data_nascita, comune_nascita, telefono, id_laurea) VALUES ('303030', 'Chiara', 'Verdi', 'chiaretta@libero.it', '1992−01−15', 'Napoli', '333−344556', 1);
INSERT INTO 191111_studente(matricola, nome, cognome, email, data_nascita, comune_nascita, telefono, id_laurea) VALUES ('404040', 'Nicola', 'Leone', 'n.leone@libero.it', '1995−03−28', 'Roma', '333−102938', 1);
INSERT INTO 191111_studente(matricola, nome, cognome, email, data_nascita, comune_nascita, telefono, id_laurea) VALUES ('505050', 'Mario', 'Dell''Acqua', 'dellacqua@gmail.com', '1994−06−20', 'Roma', '335−918273', 1);

INSERT INTO 191111_titolo_studio(matricola_studente, id_scuola, voto) VALUES ('101010', 1, 100);
INSERT INTO 191111_titolo_studio(matricola_studente, id_scuola, voto) VALUES ('202020', 2, 90);
INSERT INTO 191111_titolo_studio(matricola_studente, id_scuola, voto) VALUES ('303030', 1, 87);
INSERT INTO 191111_titolo_studio(matricola_studente, id_scuola, voto) VALUES ('404040', 4, 100);
INSERT INTO 191111_titolo_studio(matricola_studente, id_scuola, voto) VALUES ('505050', 5, 85);

INSERT INTO 191111_conoscenza_lingua(matricola_studente, id_lingua, scritto, orale) VALUES ('101010', 1, 8, 7);
INSERT INTO 191111_conoscenza_lingua(matricola_studente, id_lingua, scritto, orale) VALUES ('101010', 3, 7, 5);
INSERT INTO 191111_conoscenza_lingua(matricola_studente, id_lingua, scritto, orale) VALUES ('202020', 1, 6, 6);
INSERT INTO 191111_conoscenza_lingua(matricola_studente, id_lingua, scritto, orale) VALUES ('303030', 1, 5, 6);
INSERT INTO 191111_conoscenza_lingua(matricola_studente, id_lingua, scritto, orale) VALUES ('303030', 2, 7, 7);
INSERT INTO 191111_conoscenza_lingua(matricola_studente, id_lingua, scritto, orale) VALUES ('404040', 3, 8, 8);

INSERT INTO 191111_esame(matricola_studente, sigla_corso, anno, voto) VALUES ('101010', 'IN110', 2013, 30);
INSERT INTO 191111_esame(matricola_studente, sigla_corso, anno, voto) VALUES ('101010', 'AL110', 2013, 28);
INSERT INTO 191111_esame(matricola_studente, sigla_corso, anno, voto) VALUES ('101010', 'IN440', 2014, 28);
INSERT INTO 191111_esame(matricola_studente, sigla_corso, anno, voto) VALUES ('202020', 'IN110', 2012, 22);
INSERT INTO 191111_esame(matricola_studente, sigla_corso, anno, voto) VALUES ('202020', 'IN440', 2014, 26);
INSERT INTO 191111_esame(matricola_studente, sigla_corso, anno, voto) VALUES ('202020', 'AM210', 2014, 30);
INSERT INTO 191111_esame(matricola_studente, sigla_corso, anno, voto) VALUES ('202020', 'LM410', 2014, 27);
INSERT INTO 191111_esame(matricola_studente, sigla_corso, anno, voto) VALUES ('303030', 'IN110', 2012, 24);
INSERT INTO 191111_esame(matricola_studente, sigla_corso, anno, voto) VALUES ('404040', 'IN110', 2013, 29);
