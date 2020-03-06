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
