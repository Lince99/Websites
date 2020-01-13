-- https://stackoverflow.com/questions/19905900/mysql-transaction-roll-back-on-any-exception#19908197


CREATE TABLE IF NOT EXISTS 200113_utenti (
    id INT(11) NOT NULL AUTO_INCREMENT,
	nome VARCHAR(30) DEFAULT NULL,
	cognome VARCHAR(30) NOT NULL,
	annoNascita YEAR DEFAULT NULL,
	PRIMARY KEY(id)
);



DELIMITER $$
CREATE PROCEDURE `insert_data`()
BEGIN
    -- declare try catch
    DECLARE `_rollback` BOOL DEFAULT 0;
    DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;

    -- insert
    START Transaction_insert;
    INSERT INTO 200113_utenti (nome, cognome, annoNascita) VALUES
    ('Mario', 'Rossi', 1970),
    ('Maria', 'Rosso', 1971),
    ('Giovanni', 'Giovani', 1972),
    ('Marto', 'Marta', 1973);

    IF `_rollback` THEN
        ROLLBACK;
    ELSE
        `_rollback` = 1;
        COMMIT;
    END IF;

    -- drop TODO REMOVE THIS
    START Transaction_drop;
    SELECT * FROM 200113_utenti;
    DROP TABLE IF EXISTS 200113_utenti;

    IF `_rollback` THEN
        ROLLBACK;
    ELSE
        `_rollback` = 1;
        COMMIT;
    END IF;

END$$
DELIMITER ;
