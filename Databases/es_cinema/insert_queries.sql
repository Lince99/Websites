USE 5ai_19_20_s01118;

-- https://it.wikipedia.org/wiki/Categoria:Attori_italiani

INSERT INTO 191203_attore
    (codAttore, nome, cognome, annoNascita, nazionalita) VALUES
    (1, 'Mario', 'Mastroianni', 1968, 'italiana'),
    (2, 'Sergio', 'Loren', 1981, 'francese'),
    (3, 'Salvatore', 'Baccaloni', 1950, 'italiana'),
    (4, 'Jgor', 'Barbazza', 1957, 'russa'),
    (5, 'Chiara', 'Baschetti', 1987, 'italiana'),
    (6, 'Jackie', 'Basehart', 1990, 'americana'),
    (7, 'Lorella', 'De Luca', 1956, 'italiana'),
    (8, 'Jacques', 'Peyrac', 1971, 'francese');

INSERT INTO 191203_film
    (codFilm, titolo, annoProduzione, nazionalita, regista, genere) VALUES
    (1, 'Una città sperduta', 2003, 'italiana', 'Mario Benetti', 'classico');
