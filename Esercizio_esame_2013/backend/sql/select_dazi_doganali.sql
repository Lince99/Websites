-- Selezione di tutti i dazi doganali sommati per ciascun punto di controllo

SELECT dogane.Nome_dogana,
SUM(Controllo.Dazio) AS `Totale` FROM
-- Seleziona i nomi delle dogane
    (SELECT Controllo.ID,
    Dogana.Nome AS `Nome_dogana`
    FROM Controllo INNER JOIN Dogana
    ON Controllo.Dogana = Dogana.ID
    ORDER BY Dogana.Nome) AS `dogane`
INNER JOIN Controllo
-- somma i dazi
GROUP BY dogane.Nome_dogana
ORDER BY dogane.Nome_dogana;
