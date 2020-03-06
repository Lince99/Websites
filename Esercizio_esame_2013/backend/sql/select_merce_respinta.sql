DROP VIEW IF EXISTS `Merce_sequestrata`;

-- Merce controllata dall'inizio da una certa data in poi
CREATE VIEW `Merce_sequestrata` AS
    SELECT merce_controllata.Nome_merce,
    merce_controllata.Quantita,
    ctrl.Data_fine FROM
        (SELECT Controllo_merce.Controllo,
        Categorie_merce.Nome AS `Nome_merce`,
        Categorie_merce.Quantita,
        Controllo_merce.Esito AS `Esito_merce`
        FROM Controllo_merce INNER JOIN Categorie_merce ON Controllo_merce.Merce = Categorie_merce.ID) AS merce_controllata
        ,
        (SELECT Controllo.ID, Controllo.Data_fine FROM Controllo) AS ctrl
    WHERE merce_controllata.Controllo = ctrl.ID;

-- Totale di merce respinta da una certa data in poi suddivisa per categoria
SELECT SUM(Merce_sequestrata.Quantita) AS `Totale_quantita` FROM Merce_sequestrata;
