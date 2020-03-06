-- Selezione di tutti i passeggeri che sono stati controllati nella giornata "x" ordinati per punti di dogana
DROP VIEW IF EXISTS `Lista_passeggeri`;

-- Seleziona tutti i passeggeri con i rispettivi aeroporti
CREATE VIEW `Lista_passeggeri` AS
    SELECT table_from.Passaporto,
    Cognome,
    Nome,
    Aeroporto_provenienza,
    Aeroporto_destinazione,
    Motivo_viaggio FROM
        (SELECT Passeggero.Passaporto,
        Passeggero.Cognome,
        Passeggero.Nome,
        Passeggero.Motivo_viaggio,
        Aeroporto.Nome AS `Aeroporto_provenienza`
        FROM Aeroporto, Passeggero
        WHERE Passeggero.Aeroporto_provenienza = Aeroporto.ID) AS table_from
    INNER JOIN
        (SELECT Passeggero.Passaporto,
        Aeroporto.Nome AS `Aeroporto_destinazione`
        FROM Aeroporto, Passeggero
        WHERE Passeggero.Aeroporto_destinazione = Aeroporto.ID) AS table_to
    ON table_from.Passaporto = table_to.Passaporto;




-- Seleziona tutti i passeggeri in stato di fermo ordinati alfabeticamente e raggruppati per nazionalita' dall'inizio dell'anno

-- Selezione di tutti i passeggeri con esito "fermo"
SELECT Controllo_passeggero.Controllo,
Passeggero.Nazionalita,
Passeggero.Cognome,
Passeggero.Nome,
Passeggero.Passaporto,
Controllo_passeggero.Esito AS `Esito_passeggero`
FROM Controllo_passeggero INNER JOIN Passeggero
ON Passeggero.Passaporto = Controllo_passeggero.Passeggero;

-- Selezione di tutti i passeggeri fermi dall'inizio dell'anno ordinati
SELECT passeggeri_fermi.Nazionalita,
passeggeri_fermi.Cognome,
passeggeri_fermi.Nome,
passeggeri_fermi.Passaporto,
Controllo.Note
FROM (SELECT Controllo_passeggero.Controllo,
    Passeggero.Nazionalita,
    Passeggero.Cognome,
    Passeggero.Nome,
    Passeggero.Passaporto,
    Controllo_passeggero.Esito AS `Esito_passeggero`
    FROM Controllo_passeggero INNER JOIN Passeggero
    ON Passeggero.Passaporto = Controllo_passeggero.Passeggero) AS `passeggeri_fermi`
    INNER JOIN
    Controllo
    ON passeggeri_fermi.Controllo = Controllo.ID
WHERE Controllo.Data_inizio > '2000-01-01 01:01:01'
GROUP BY passeggeri_fermi.Nazionalita,
passeggeri_fermi.Cognome,
passeggeri_fermi.Nome,
passeggeri_fermi.Passaporto,
Controllo.Note;
