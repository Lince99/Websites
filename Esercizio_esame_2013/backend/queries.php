<?php
    include_once 'db_config.php';

    $Q_create_database = "source sql/database.sql; source sql/select_multiple_controlli.sql";

    $Q_use_database = "USE $DB_database_name;";

    $Q_select_all_controlli = "SELECT * FROM `Tutti_controlli`;";

    $Q_select_all_passeggeri = "SELECT * FROM `Passeggeri_controllati`;";
    $Q_select_all_merce = "SELECT * FROM `Merce_controllata`;";

    $QIN_data_inizio_controllo_passeggeri = "2011-12-31 01:02:03";
    $Q_select_passeggeri_giornata = "
    SELECT Nome_dogana,
    Lista_passeggeri.Passaporto,
    Cognome,
    Nome,
    Aeroporto_provenienza,
    Aeroporto_destinazione,
    Motivo_viaggio,
    Data_inizio,
    Data_fine,
    Esito
    FROM Controlli_solo_passeggeri INNER JOIN Lista_passeggeri
    ON Controlli_solo_passeggeri.Passaporto = Lista_passeggeri.Passaporto
    WHERE Data_inizio > '".$QIN_data_inizio_controllo_passeggeri."'
    ORDER BY Nome_dogana ASC;";

    $Q_select_totale_dazi = "
    SELECT dogane.Nome_dogana,
    SUM(Controllo.Dazio) AS `Totale` FROM
        (SELECT Controllo.ID,
        Dogana.Nome AS `Nome_dogana`
        FROM Controllo INNER JOIN Dogana
        ON Controllo.Dogana = Dogana.ID
        ORDER BY Dogana.Nome) AS `dogane`
    INNER JOIN Controllo
    GROUP BY dogane.Nome_dogana
    ORDER BY dogane.Nome_dogana;
";
?>
