<?php
    $use_database = "USE $database_name;";

    $q_create_table = "CREATE TABLE IF NOT EXISTS `$table_name`(
        `ID` INT(11) NOT NULL AUTO_INCREMENT,
    	`nome` VARCHAR(30) NOT NULL,
    	`cognome` VARCHAR(30) NOT NULL,
    	`indirizzo` VARCHAR(50) DEFAULT NULL,
        `telefono` VARCHAR(16) NOT NULL,
        `dataNascita` DATE DEFAULT NULL,
        `email` VARCHAR(50) DEFAULT NULL,
        PRIMARY KEY(ID)
    );";

    $in_nome = "Mario";
    $in_cognome = "Rossi";
    $in_indirizzo = "Roma, 21";
    $in_telefono = "12345678990";
    $in_dataNascita = "1980-01-01";
    $in_email = "email@email.com";
    $q_insert_data = "INSERT INTO `$table_name`
        (`nome`, `cognome`, `indirizzo`, `telefono`, `dataNascita`, `email`) VALUES
        ('$in_nome', '$in_cognome', '$in_indirizzo', '$in_telefono', '$in_dataNascita', '$in_email');";

    $q_select_all = "SELECT * FROM `$table_name`
        ORDER BY `cognome`, `nome`;";

    $delete_id = -1;
    $q_delete_row = "DELETE FROM `$table_name`
        WHERE `ID` = $delete_id;";
?>
