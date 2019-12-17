USE 5ai_19_20_s01118;

-- https://it.wikipedia.org/wiki/Categoria:Attori_italiani

INSERT INTO 191203_attore
    (codAttore, nome, cognome, annoNascita, nazionalita) VALUES
    (1, 'Mario', 'Mastroianni', 1968, 'Italia'),
    (2, 'Sergio', 'Loren', 1981, 'Francia'),
    (3, 'Salvatore', 'Baccaloni', 1950, 'Italia'),
    (4, 'Jgor', 'Barbazza', 1957, 'Russia'),
    (5, 'Chiara', 'Baschetti', 1987, 'Italia'),
    (6, 'Jackie', 'Basehart', 1990, 'America'),
    (7, 'Lorella', 'De Luca', 1956, 'Italia'),
    (8, 'Jacques', 'Peyrac', 1971, 'Francia'),
    (9, 'Franco', 'Fellini', 1957, 'America'),
    (10, 'Robbie', 'Williams', 1955, 'America'),
    (11, 'Mastro', 'Mastroianni', 1965, 'America'),
    (12, 'Stefan', 'Loren', 1960, 'America'),
    (13, 'Isabelle', 'Adjani', 1974, 'Francia'),
    (14, 'Louise Rosalie', 'Allan-Despréaux', 1982, 'Francia'),
    (15, 'Claudio', 'Amendola', 1960, 'Italia'),
    (16, 'Elena Sofia', 'Ricci', 1965, 'Italia');

INSERT INTO 191203_film
    (codFilm, titolo, annoProduzione, nazionalita, regista, genere) VALUES
    (1, 'Una città sperduta', 2003, 'Italia', 'Mario Benetti', 'Classico'),
    (2, 'E.T. l''extra-terrestre', 1982, 'America', 'S.Spielberg', 'Fantascienza'),
    (3, 'Lo squalo', 1975, 'America', 'S.Spielberg', 'Thriller'),
    (4, 'Jurassic park', 1993, 'America', 'S.Spielberg', 'Fantascienza'),
    (5, 'Salvate il soldato Ryan', 1998, 'America', 'S.Spielberg', 'guerra'),
    (6, 'War Horse', 2011, 'Regno Unito', 'S.Spielberg', 'drammatico'),
    (7, 'Luci del varietà', 1951, 'Italia', 'F.Fellini', 'Commedia'),
    (8, 'Le notti di Cabiria', 1957, 'Francia', 'F.Fellini', 'Drammatico'),
    (9, 'E la nave va', 1983, 'Francia', 'F.Fellini', 'Commedia'),
    (10, 'Roma ', 1972, 'Italia', 'F.Fellini', 'Commedia'),
    (11, 'La voce della Luna', 1990, 'Italia', 'F.Fellini', 'Grottesco');

INSERT INTO 191203_sala
    (codSala, posti, nome, citta) VALUES
    (1, 100, 'sala1', 'Milano'),
    (2, 80, 'sala2', 'Milano'),
    (3, 80, 'sala3', 'Milano'),
    (4, 250, 'sala asburgica', 'Napoli'),
    (5, 50, 'sala del trono', 'Napoli'),
    (6, 120, 'sala citta', 'Napoli'),
    (7, 130, 'sala unica', 'Mestre'),
    (8, 200, 'sala principale', 'Pisa'),
    (9, 180, 'sala conferenze', 'Pisa'),
    (10, 120, 'sala ascolto', 'Pisa');

INSERT INTO 191203_recita
    (codAttore, codFilm) VALUES
    (1, 1),
    (3, 1),
    (5, 1),
    (7, 1),
    (2, 2),
    (3, 2),
    (5, 2),
    (6, 2),
    (7, 2),
    (8, 2),
    (9, 2),
    (15, 3),
    (16, 3),
    (12, 4),
    (13, 4),
    (1, 5),
    (2, 5),
    (3, 5),
    (4, 5),
    (8, 6),
    (9, 6),
    (10, 6),
    (4, 7),
    (10, 7),
    (11, 8),
    (14, 8),
    (16, 8),
    (1, 9),
    (3, 9),
    (6, 9),
    (9, 9),
    (14, 10),
    (15, 10),
    (12, 11),
    (9, 11),
    (4, 11);

INSERT INTO 191203_proiezione
    (codProiezione, codFilm, codSala, incasso, dataProiezione) VALUES
    (1, 1, 1, '10000.10', '2015-01-01'),
    (2, 1, 2, '800.54', '2015-01-01'),
    (3, 4, 4, '456789.00', '2016-12-05'),
    (4, 2, 1, '43879.94', '2010-08-23'),
    (5, 9, 6, '75000.50', '2019-12-05');
