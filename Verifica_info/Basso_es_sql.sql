-- Autista (Codice, Cognome, Nome, Patente, codiceMezzo)
-- CategoriaMezzo (Codice, Descrizione, Posti)

CREATE TABLE IF NOT EXISTS 191202_categoriaMezzo (
    Codice INT(11) NOT NULL,
    Descrizione VARCHAR(50) NOT NULL,
    Posti INT(5) NOT NULL DEFAULT 0,
    PRIMARY KEY (Codice)
);

CREATE TABLE IF NOT EXISTS 191202_patente (
    Nome VARCHAR(6) NOT NULL,
    Descrizione VARCHAR(100) DEFAULT NULL,
    PRIMARY KEY (Nome)
);

CREATE TABLE IF NOT EXISTS 191202_autista (
    Codice INT(11) AUTO_INCREMENT NOT NULL,
    Cognome VARCHAR(30) NOT NULL,
    Nome VARCHAR(30) NOT NULL,
    Patente VARCHAR(6) NOT NULL,
    codiceMezzo INT(11) NOT NULL,
    PRIMARY KEY (Codice),
    FOREIGN KEY (Patente) REFERENCES 191202_patente(Nome),
    FOREIGN KEY (codiceMezzo) REFERENCES 191202_categoriaMezzo(Codice)
);

INSERT INTO 191202_categoriaMezzo (Codice, Descrizione, Posti) VALUES
(1, 'autobus', 40),
(2, 'autotreno', 3),
(3, 'autocarro', 4),
(4, 'autoarticolato', 80),
(5, 'automobile', 5);

INSERT INTO 191202_patente (Nome, Descrizione) VALUES
('AM', 'Ciclomotori a due ruote'),
('A1', 'Motocicli di cilindrata massima di 125'),
('A2', 'Motocicli di potenza non superiore a 35 kW'),
('A', 'Tricicli di potenza superiore a 15 kW'),
('B1', NULL),
('B', 'Autoveicoli'),
('C1', 'Autoveicoli la cui massa massima autorizzata è superiore a 3500 kg'),
('C', 'Autoveicoli massimo 8 passeggeri'),
('D', NULL),
('D1', NULL),
('D1E', NULL);

INSERT INTO 191202_autista (Cognome, Nome, Patente, codiceMezzo) VALUES
('Mario', 'Rossi', 'A', 5),
('Gianmarco', 'Stefani', 'C', 1),
('Luisa', 'Catani', 'B', 2),
('Jeff', 'Kaplan', 'D1', 4),
('Marco', 'Possar', 'D1E', 3);

-- Query richieste:
-- a) Gli autisti in possesso di patente C
-- b) Gli autisti in possesso di patente D1 o D1E
-- c) Gli autisti che guidano autobus con almeno 20 posti

SELECT Cognome, Nome FROM 191202_autista
    WHERE Patente = 'C';

SELECT Cognome, Nome FROM 191202_autista
    WHERE Patente = 'D1' OR Patente = 'D1E';

SELECT 191202_autista.Cognome, 191202_autista.Nome  FROM 191202_autista, 191202_categoriaMezzo
    WHERE 191202_autista.codiceMezzo = 191202_categoriaMezzo.Codice
        AND 191202_categoriaMezzo.Posti >= 20;
