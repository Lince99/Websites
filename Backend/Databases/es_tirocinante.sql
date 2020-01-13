-- CREARE LE TRE TABELLE E POPOLARLE:
-- Tirocinante(matricola, nome, cognome, classe, idazienda, idtutor)
-- Azienda(id, nome, luogo, settore, tipologia)
-- Tutor(id, nome, cognome, materia)
-- dove i campi idazienda e idtutor della tabella Tirocinante sono chiavi
-- esterne che fanno riferimento alle chiavi primarie id di Azienda
-- e id di Tutor POI, svolgere le seguenti query SQL:
-- 1) nome e cognome degli studenti che svolgono il tirocinio al Leclerc
-- SELECT "Tirocinante"."nome", "Tirocinante"."cognome"
-- FROM "Tirocinante", "Azienda"
-- WHERE "Tirocinante"."idazienda" = "Azienda"."id" AND
-- "Azienda"."nome" = 'Leclerc'
-- 2) nome e cognome dei tirocinanti della quarta D
-- 3) settore e tipologia delle aziende in cui ha svolto il tirocinio Pippo
-- 4)nome, cognome e materie dei tutor dei tirocinanti
-- del settore informatica

-- CREATE DATABASE Tirocinante;
-- USE Tirocinante;

CREATE TABLE 191126_azienda (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  luogo VARCHAR(50) DEFAULT NULL,
  settore VARCHAR(30) DEFAULT NULL,
  tipologia VARCHAR(10) DEFAULT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE 191126_tutor (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(30) NOT NULL,
  cognome VARCHAR(30) NOT NULL,
  data_nascita DATE DEFAULT NULL,
  materia VARCHAR(30) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE 191126_tirocinante (
  matricola INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(30) NOT NULL,
  cognome VARCHAR(30) NOT NULL,
  classe VARCHAR(10) NOT NULL,
  data_nascita DATE DEFAULT NULL,
  idazienda INT(11) DEFAULT NULL,
  idtutor INT(11) DEFAULT NULL,
  PRIMARY KEY(matricola),
  FOREIGN KEY(idazienda) REFERENCES 191126_azienda(id) ON DELETE SET NULL,
  FOREIGN KEY(idtutor) REFERENCES 191126_tutor(id) ON DELETE SET NULL
);


-- Inserimento dati

INSERT INTO 191126_azienda (nome, luogo, settore, tipologia) VALUES
('abc', 'Mi', 'informatica', 'z'),
('abc', 'Mi', 'informatica', 'z'),
('hjk', 'Mi', 'informatica', 'b'),
('bcz', 'Mi', 'informatica', 'z'),
('ppq', 'Mi', 'informatica', 'a'),
('frt', 'Mi', 'informatica', 'z'),
('zzz', 'Roma', 'informatica', 'q'),
('kzx', 'Mi', 'informatica', 'e'),
('bhy', 'Roma', 'informatica', 'w'),
('lop', 'Bo', 'telecominicazioni', 't'),
('pp23', 'Bo', 'telecomunicazioni', 'cty'),
('paperino', 'Bo', 'telecomunicazioni', 'lp'),
('sen', 'Bo', 'telecomunicazioni', 'yt'),
('noir', 'Bo', 'telecomunicazioni', 'ww'),
('nero', 'Bo', 'telecomunicazioni', 'u'),
('black', 'Bo', 'telecomunicazioni', 'y');

-- TODO FIX THIS

INSERT INTO 191126_tutor (`Id_tutor`, `Nome`, `Cognome`, `Data_Nascita`, `materia`) VALUES
(100, 'ugo', 'rossi', '0000-00-00 00:00:00', 'inglese'),
(110, 'diva', 'bruni', '0000-00-00 00:00:00', 'reti'),
(120, 'stella', 'brunoni', '0000-00-00 00:00:00', 'reti'),
(200, 'anna', 'derossi', '0000-00-00 00:00:00', 'inglese'),
(210, 'ugo', 'pesti', '0000-00-00 00:00:00', 'reti'),
(220, 'francy', 'proffiti', '0000-00-00 00:00:00', 'reti'),
(300, 'luca', 'verdi', '0000-00-00 00:00:00', 'inglese'),
(310, 'debby', 'fiori', '0000-00-00 00:00:00', 'informatica'),
(320, 'mario', 'rosa', '0000-00-00 00:00:00', 'informatica'),
(400, 'any', 'verdone', '0000-00-00 00:00:00', 'inglese'),
(410, 'marta', 'viola', '0000-00-00 00:00:00', 'informatica'),
(420, 'divina', 'bruno', '0000-00-00 00:00:00', 'informatica'),
(500, 'fhiu-hio', 'gialli', '0000-00-00 00:00:00', 'inglese'),
(510, 'ugo', 'brunoni', '0000-00-00 00:00:00', 'informatica'),
(600, 'mattia', 'blu', '0000-00-00 00:00:00', 'inglese'),
(700, 'matteo', 'rossini', '0000-00-00 00:00:00', 'inglese'),
(800, 'rosa', 'verdini', '0000-00-00 00:00:00', 'informatica'),
(1000, 'rocco', 'violetti', '0000-00-00 00:00:00', 'informatica');

INSERT INTO `tirocinante` (`Matricola`, `Nome`, `Cognome`, `classe`, `Data_Nascita`, `Id_Azienda`, `Id_Tutor`) VALUES
(1000, 'anna', 'rosa', '1d', NULL, 1, 100),
(2200, 'roberto', 'franco', '2a', NULL, 1, 200),
(3000, 'giovanni', 'rosalba', '1d', NULL, 1, 200),
(3300, 'dario', 'grumetti', '1a', NULL, 10, 200),
(4000, 'ugo', 'rosa', '1d', NULL, 2, 220),
(4400, 'michele', 'fiori', '1a', NULL, 10, 200),
(5000, 'marco', 'mercurio', '1d', NULL, 3, 300),
(5500, 'riccardo', 'pro', '1a', NULL, 9, 200),
(6000, 'matteo', 'roby', '2c', NULL, 4, 320),
(6600, 'anna', 'rosa', '1a', NULL, 8, 200),
(7000, 'ivo', 'freddy', '2c', NULL, 5, 400),
(8000, 'ivan', 'gialli', '3a', NULL, 6, 500),
(9000, 'ugo', 'verdi', '3a', NULL, 6, 600),
(9900, 'genny', 'rossi', '3a', NULL, 10, 600);
