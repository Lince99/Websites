-- Selezione dei controlli nelle dogane
SELECT Dogana.Nome,
Controllo.Data_inizio,
Controllo.Data_fine
FROM Controllo, Dogana
WHERE Controllo.Dogana = Dogana.ID;


-- Selezione della durata dei controlli
SELECT controlli_dogane_time.Nome AS `Nome_dogana`,
DATEDIFF(controlli_dogane_time.Data_fine, controlli_dogane_time.Data_inizio) AS `Durata_totale`
FROM (SELECT Dogana.Nome,
    Controllo.Data_inizio,
    Controllo.Data_fine
    FROM Controllo, Dogana
    WHERE Controllo.Dogana = Dogana.ID) AS `controlli_dogane_time`;

-- Selezione della durata media dei controlli
-- TODO
