<?php
    include_once 'db_config.php';

    $Q_create_database = "source sql/database.sql; source sql/select_multiple_controlli.sql";

    $Q_use_database = "USE $DB_database_name;";

    $Q_select_all_controlli = "SELECT * FROM `Tutti_controlli`;";

    $Q_select_all_passeggeri = "SELECT * FROM `Passeggeri_controllati`;";
    $Q_select_all_merce = "SELECT * FROM `Controlli_solo_merce`;";

    $QIN_data_inizio_controllo_passeggeri = "'2011-12-31 01:02:03'";
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
    WHERE Data_inizio > ".$QIN_data_inizio_controllo_passeggeri."
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
    ORDER BY dogane.Nome_dogana;";

    $QIN_data_limite_merce_sequestrata = "'1970-01-01 01:02:03'";
    $Q_select_merce_sequestrata_data = "
    SELECT Merce_sequestrata.Nome_merce,
    Merce_sequestrata.Quantita
    FROM Merce_sequestrata
    WHERE Merce_sequestrata.Data_fine > ".$QIN_data_limite_merce_sequestrata.";";

    $Q_totale_merce_sequestrata = "
    SELECT SUM(Merce_sequestrata.Quantita) AS `Totale_quantita` FROM Merce_sequestrata;
    ";

    $Q_n_contestazioni_per_addetto = "
    SELECT ID_Addetto, Cognome, Nome, COUNT(ID_Addetto) AS N_Contestazioni
    FROM (SELECT ID_Addetto, Nome, Cognome, Descrizione FROM
        (SELECT ID_Controllo,
        ID_Addetto,
        Descrizione FROM
            (SELECT controllori.ID_Addetto, ID AS `ID_Controllo` FROM
                (SELECT Addetto.ID AS `ID_Addetto`,
                Squadra_controllo.Controllo,
                Addetto.Cognome,
                Addetto.Nome
                FROM Addetto INNER JOIN Squadra_controllo ON Addetto.ID = Squadra_controllo.Addetto) AS `controllori`
                ,
                Controllo
                WHERE Controllo.ID = controllori.Controllo) AS `squadriglia`
            ,
            (SELECT Controllo.ID,
            ctrl_segnalazioni.ID_ctrl_passeggero,
            ctrl_segnalazioni.Descrizione FROM
                (SELECT Controllo_passeggero.ID AS `ID_ctrl_passeggero`,
                Controllo_passeggero.Controllo,
                Segnalazione.Descrizione
                FROM Controllo_passeggero, Segnalazione
                WHERE Controllo_passeggero.Segnalazione = Segnalazione.ID) AS `ctrl_segnalazioni`
                ,
                Controllo
                WHERE ctrl_segnalazioni.Controllo = Controllo.ID) AS `ctrl`
            WHERE squadriglia.ID_Controllo = ctrl.ID) AS `squadre_controllatrici`
        ,
        Addetto
        WHERE Addetto.ID = squadre_controllatrici.ID_Addetto) AS `t`
    GROUP BY ID_Addetto
    ORDER BY ID_Addetto ASC;
    ";

    $Q_lista_dogane = "
    SELECT Dogana.ID,
    Dogana.Nome
    FROM Dogana
    ORDER BY Dogana.Nome;
    ";

    $Q_durata_controlli = "
    SELECT controlli_dogane_time.Nome AS `Nome_dogana`,
    DATEDIFF(controlli_dogane_time.Data_fine, controlli_dogane_time.Data_inizio) AS `Durata_totale`
    FROM (SELECT Dogana.Nome,
        Controllo.Data_inizio,
        Controllo.Data_fine
        FROM Controllo, Dogana
        WHERE Controllo.Dogana = Dogana.ID) AS `controlli_dogane_time`;
    ";

    $Q_rapporti_aperti = "
    SELECT Controllo.ID,
    Dogana.Nome,
    Controllo.Data_inizio,
    Controllo.Note,
    Controllo.Dazio
    FROM Controllo INNER JOIN Dogana
    WHERE Controllo.Data_fine IS NULL
    ORDER BY Controllo.ID;
    ";

    $Q_lista_addetti = "
    SELECT Addetto.ID AS `ID_Addetto`,
    Addetto.Cognome,
    Addetto.Nome,
    Addetto.Ruolo,
    Addetto.email
    FROM Addetto INNER JOIN Squadra_controllo
    ON Addetto.ID = Squadra_controllo.Addetto;
    ";

    $QIN_data_inizio_controllo_addetti = "'2011-12-31 01:02:03'";
    $Q_lista_addetti_presenti = "
    SELECT controllori.ID_Addetto,
    controllori.Cognome,
    controllori.Nome,
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
    WHERE Controlli_dogane.Data_inizio > ".$QIN_data_inizio_controllo_addetti."
    ORDER BY Controlli_dogane.Nome_dogana;
    ";

    $QIN_data_inizio_controllo_fermi = "'2010-01-01 01:01:01'";
    $Q_select_passeggeri_fermi = "
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
    WHERE Controllo.Data_inizio > ".$QIN_data_inizio_controllo_fermi."
    GROUP BY passeggeri_fermi.Nazionalita,
    passeggeri_fermi.Cognome,
    passeggeri_fermi.Nome,
    passeggeri_fermi.Passaporto,
    Controllo.Note;
    ";
?>
