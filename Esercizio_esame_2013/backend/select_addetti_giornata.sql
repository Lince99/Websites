-- Seleziona tutti gli addetti per squadra
SELECT Addetto.ID AS `ID_Addetto`,
Addetto.Cognome,
Addetto.Nome,
Addetto.ruolo,
Squadra_controllo.Controllo
FROM Addetto INNER JOIN Squadra_controllo
ON Addetto.ID = Squadra_controllo.Addetto;

-- Seleziona i controlli di oggi
SELECT controllori.ID_Addetto,
controllori.Cognome,
controllori.Nome,
controllori.Ruolo,
Controlli_dogane.Nome_dogana
FROM (SELECT Addetto.ID AS `ID_Addetto`,
    Addetto.Cognome,
    Addetto.Nome,
    Addetto.ruolo,
    Squadra_controllo.Controllo
    FROM Addetto INNER JOIN Squadra_controllo
    ON Addetto.ID = Squadra_controllo.Addetto) AS `controllori`
    INNER JOIN
    Controlli_dogane
    ON Controlli_dogane.ID = controllori.Controllo
WHERE Controlli_dogane.Data_inizio > '2010-01-01 01:01:01'
ORDER BY Controlli_dogane.Nome_dogana;
