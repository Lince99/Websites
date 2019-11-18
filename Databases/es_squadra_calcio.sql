-- CREATE DATABASE 191118_calcio;
-- USE 191118_calcio;

DROP TABLE IF EXISTS 191118_incontro;
DROP TABLE IF EXISTS 191118_ingaggio;
DROP TABLE IF EXISTS 191118_arbitro;
DROP TABLE IF EXISTS 191118_squadra;
DROP TABLE IF EXISTS 191118_calciatore;

CREATE TABLE IF NOT EXISTS 191118_squadra (
    nome CHAR(30) NOT NULL,
    citta CHAR(30) NOT NULL,
    sede CHAR(30) NOT NULL,
    colori VARCHAR(20),
    PRIMARY KEY(nome)
);

CREATE TABLE IF NOT EXISTS 191118_calciatore (
    id INT(11) AUTO_INCREMENT NOT NULL,
    nome CHAR(30) NOT NULL,
    cognome CHAR(30) NOT NULL,
    ruolo CHAR(20),
    nazionalita CHAR(40),
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS 191118_arbitro (
    cod INT(11) AUTO_INCREMENT NOT NULL,
    nome CHAR(30) NOT NULL,
    cognome CHAR(30) NOT NULL,
    PRIMARY KEY(cod)
);

CREATE TABLE IF NOT EXISTS 191118_ingaggio (
    calciatore INT(11) NOT NULL,
    squadra CHAR(30) NOT NULL,
    compenso FLOAT(10),
    FOREIGN KEY(calciatore) REFERENCES 191118_calciatore(id),
    FOREIGN KEY(squadra) REFERENCES 191118_squadra(nome),
    PRIMARY KEY(calciatore, squadra)
);

CREATE TABLE IF NOT EXISTS 191118_incontro (
    data DATETIME NOT NULL,
    squadraInCasa CHAR(30) NOT NULL,
    squadraOspite CHAR(30) NOT NULL,
    golSqCasa INT(3),
    golSqFuori INT(3),
    arbitro INT(11),
    FOREIGN KEY(squadraInCasa) REFERENCES 191118_squadra(nome),
    FOREIGN KEY(squadraOspite) REFERENCES 191118_squadra(nome),
    FOREIGN KEY(arbitro) REFERENCES 191118_arbitro(cod),
    PRIMARY KEY(data)
);
