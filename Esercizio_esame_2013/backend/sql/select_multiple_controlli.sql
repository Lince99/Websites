-- Selezione di tutti i controlli effettuati

-- Seleziona gli addetti che hanno fatto parte di una squadra
-- Seleziona le squadre che hanno effettuato controlli

-- Seleziona i passeggeri che sono stati controllati

-- Seleziona controlli e dogane

-- Seleziona le varie categorie della merce
-- Seleziona la merce che e' stata controllata

-- Seleziona i controlli su passeggeri e li unisce ai controlli sulla merce


-- Seleziona controlli e dogane
SELECT Controllo.ID, Dogana.Nome, Controllo.Data_inizio, Controllo.Data_fine, Controllo.Dazio
FROM Controllo INNER JOIN Dogana ON Controllo.ID = Dogana.ID
ORDER BY Controllo.Data_fine DESC;

-- Seleziona addetti che hanno fatto parte di una squadra
SELECT Squadra_controllo.ID, Addetto.Cognome, Addetto.Nome
FROM Addetto INNER JOIN Squadra_controllo ON Addetto.ID = Squadra_controllo.ID;

-- Seleziona squadre che hanno fatto controlli

SELECT Merce.Categoria, Controllo_merce.Esito
FROM Controllo_merce INNER JOIN Merce ON Merce.ID = Controllo_merce.ID;

SELECT Passeggero.Passaporto, Controllo_passeggero.Esito
FROM Controllo_passeggero INNER JOIN Passeggero ON Controllo_passeggero.ID = Passeggero.Passaporto;
