-- Selezione di tutti i controlli effettuati
DROP VIEW IF EXISTS Controlli_dogane;
DROP VIEW IF EXISTS Addetti_squadre;
DROP VIEW IF EXISTS Squadre_controlli;
DROP VIEW IF EXISTS Passeggeri_controllati;
DROP VIEW IF EXISTS Controlli_solo_passeggeri;
DROP VIEW IF EXISTS Categorie_merce;
DROP VIEW IF EXISTS Merce_controllata;
DROP VIEW IF EXISTS Controlli_solo_merce;
DROP VIEW IF EXISTS Tutti_controlli;

-- Seleziona controlli e dogane
CREATE VIEW IF NOT EXISTS `Controlli_dogane` AS
    SELECT Controllo.ID,
    Controllo.Data_inizio,
    Controllo.Data_fine,
    Dogana.Nome AS `Nome_dogana`
    FROM Controllo INNER JOIN Dogana ON Controllo.Dogana = Dogana.ID;

-- Seleziona gli addetti che hanno fatto parte di una squadra
CREATE VIEW `Addetti_squadre` AS
    SELECT Squadra_controllo.ID,
    Squadra_controllo.Controllo,
    Addetto.Cognome,
    Addetto.Nome,
    FROM Addetto INNER JOIN Squadra_controllo ON Addetto.ID = Squadra_controllo.Addetto;
-- Seleziona le squadre che hanno effettuato controlli
CREATE VIEW `Squadre_controlli` AS
    SELECT Controlli_dogane.ID,
    Controlli_dogane.Nome_dogana,
    Addetti_squadre.Cognome AS `Cognome_addetto`,
    Addetti_squadre.Nome AS `Nome_addetto`,
    Controlli_dogane.Data_inizio,
    Controlli_dogane.Data_fine
    FROM Controlli_dogane INNER JOIN Addetti_squadre ON Addetti_squadre.Controllo = Controlli_dogane.ID;


-- Seleziona i passeggeri che sono stati controllati
CREATE VIEW `Passeggeri_controllati` AS
    SELECT Controllo_passeggero.ID AS `ID_ctrl_passeggero`,
    Controllo_passeggero.Controllo,
    Passeggero.Passaporto,
    Controllo_passeggero.Esito AS `Esito_passeggero`
    FROM Controllo_passeggero INNER JOIN Passeggero ON Passeggero.Passaporto = Controllo_passeggero.Passeggero;

-- Seleziona i controllori che hanno controllato dei passeggeri
CREATE VIEW `Controlli_solo_passeggeri` AS
    SELECT Passeggeri_controllati.ID_ctrl_passeggero,
    Squadre_controlli.Nome_dogana,
    Squadre_controlli.Cognome_addetto,
    Passeggeri_controllati.Passaporto,
    Squadre_controlli.Data_inizio,
    Squadre_controlli.Data_fine,
    Passeggeri_controllati.Esito_passeggero AS `Esito`
    FROM Passeggeri_controllati INNER JOIN Squadre_controlli
    ON Passeggeri_controllati.Controllo = Squadre_controlli.ID;


-- Seleziona le varie categorie della merce
CREATE VIEW `Categorie_merce` AS
    SELECT Merce.ID,
    Merce.quantita,
    Categoria.Nome
    FROM Categoria INNER JOIN Merce ON Categoria.ID = Merce.Categoria;
-- Seleziona la merce che e' stata controllata
CREATE VIEW `Merce_controllata` AS
    SELECT Categorie_merce.ID AS `ID_ctrl_merce`,
    Controllo_merce.Controllo,
    Categorie_merce.Nome AS `Nome_merce`,
    Controllo_merce.Esito AS `Esito_merce`
    FROM Controllo_merce INNER JOIN Categorie_merce ON Controllo_merce.Merce = Categorie_merce.ID;

-- Seleziona i controllori che hanno controllato della merce
CREATE VIEW `Controlli_solo_merce` AS
    SELECT Merce_controllata.ID_ctrl_merce,
    Squadre_controlli.Nome_dogana,
    Squadre_controlli.Cognome_addetto,
    Merce_controllata.Nome_merce,
    Squadre_controlli.Data_inizio,
    Squadre_controlli.Data_fine,
    Merce_controllata.Esito_merce AS `Esito`
    FROM Merce_controllata INNER JOIN Squadre_controlli ON Merce_controllata.Controllo = Squadre_controlli.ID;



-- Seleziona tutti i controlli presenti nel database
CREATE VIEW `Tutti_controlli` AS
    SELECT Controlli_solo_passeggeri.ID_ctrl_passeggero AS `ID`,
    Controlli_solo_passeggeri.Nome_dogana,
    Controlli_solo_passeggeri.Cognome_addetto,
    Controlli_solo_passeggeri.Passaporto AS `Soggetto`,
    Controlli_solo_passeggeri.Data_inizio,
    Controlli_solo_passeggeri.Data_fine,
    Controlli_solo_passeggeri.Esito AS `Stato`
    FROM Controlli_solo_passeggeri
    UNION ALL
    SELECT Controlli_solo_merce.ID_ctrl_merce AS `ID`,
    Controlli_solo_merce.Nome_dogana,
    Controlli_solo_merce.Cognome_addetto,
    Controlli_solo_merce.Nome_merce AS `Soggetto`,
    Controlli_solo_merce.Data_inizio,
    Controlli_solo_merce.Data_fine,
    Controlli_solo_merce.Esito AS `Stato`
    FROM Controlli_solo_merce;
