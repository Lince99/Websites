-- Selezione delle contestazioni fatte da ogni addetto



-- Selezione delle segnalazioni effettuate sui controlli dei passeggeri
SELECT Controllo_passeggero.ID AS `ID_ctrl_passeggero`,
Controllo_passeggero.Controllo
FROM Controllo_passeggero, Segnalazione
WHERE Controllo_passeggero.Segnalazione = Segnalazione.ID;

-- Selezione dei controlli con segnalazioni
SELECT Controllo.ID,
ctrl_segnalazioni.ID_ctrl_passeggero,
ctrl_segnalazioni.Descrizione FROM
    (SELECT Controllo_passeggero.ID AS `ID_ctrl_passeggero`,
    Controllo_passeggero.Controllo,
    Segnalazione.Descrizione
    FROM Controllo_passeggero, Segnalazione
    WHERE Controllo_passeggero.Segnalazione = Segnalazione.ID) AS `ctrl_segnalazioni`
    ,
    Controllo
    WHERE ctrl_segnalazioni.Controllo = Controllo.ID;


-- Selezione dei singoli addetti
SELECT Addetto.ID AS `ID_Addetto`,
Squadra_controllo.Controllo,
Addetto.Cognome,
Addetto.Nome
FROM Addetto INNER JOIN Squadra_controllo ON Addetto.ID = Squadra_controllo.Addetto;

-- Selezione degli addetti che hanno fatto un controllo
SELECT controllori.ID_Addetto, ID AS `ID_Controllo` FROM
    (SELECT Addetto.ID AS `ID_Addetto`,
    Squadra_controllo.Controllo,
    Addetto.Cognome,
    Addetto.Nome
    FROM Addetto INNER JOIN Squadra_controllo ON Addetto.ID = Squadra_controllo.Addetto) AS `controllori`
    ,
    Controllo
    WHERE Controllo.ID = controllori.Controllo;



-- Selezione delle squadre che hanno fatto un controllo con segnalazione
SELECT ID_Controllo,
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
    WHERE squadriglia.ID_Controllo = ctrl.ID;

-- Selezione dei singoli addetti che hanno segnalato

SELECT ID_Addetto, Nome, Cognome, Descrizione FROM
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
    WHERE Addetto.ID = squadre_controllatrici.ID_Addetto
GROUP BY ID_Addetto, Descrizione;



-- Conta quante contestazioni hanno effettuato gli addetti
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
