<?php
    $database_name = "200203_utenteRubrica";
    $q_create_table = "CREATE TABLE IF NOT EXISTS `$database_name`(
        `ID` INT(11) NOT NULL AUTO_INCREMENT,
    	`nome` VARCHAR(30) NOT NULL,
    	`cognome` VARCHAR(30) NOT NULL,
    	`indirizzo` VARCHAR(50) DEFAULT NULL,
        `telefono` VARCHAR(16) NOT NULL,
        `dataNascita` DATE DEFAULT NULL,
        `email` VARCHAR(50) DEFAULT NULL,
        PRIMARY KEY(ID)
    );";

    $in_nome = "";
    $in_cognome = "";
    $in_indirizzo = "";
    $in_telefono = "";
    $in_dataNascita = "";
    $in_email = "";
    $q_insert_data = "INSERT INTO `$database_name`
        (`nome`, `cognome`, `indirizzo`, `telefono`, `dataNascita`, `email`) VALUES
        ('$in_nome', '$in_cognome', '$in_indirizzo', '$in_telefono', '$in_dataNascita', '$in_email');";

    $q_select_all = "SELECT * FROM `$database_name`
        ORDER BY `cognome`, `nome`;";

    $delete_id = -1;
    $q_delete_row = "DELETE FROM `$database_name`
        WHERE `ID` = $delete_id;";
?>
