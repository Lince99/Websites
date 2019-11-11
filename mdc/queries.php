<?php
    $search_user = "SELECT * FROM `Utente` WHERE `Email` LIKE 'test@test.com' ";

    $insert_user = "INSERT INTO `Utente` (`Email`, `Nome`, `Cognome`, `Password`, `Ruolo`) VALUES ('test@test.com', 'mario', 'rossi', PASSWORD('12345'), '0') ";

    $change_user_role = "UPDATE `Utente` SET `Ruolo`=1 WHERE `Email` LIKE 'test@test.com' ";

    $add_category = "INSERT INTO `Categoria` (`NomeCategoria`,`Descrizione`) VALUES ('Tastiera Querty PS2','Tastiera con layout italiano con attacco per computer PS/2') ";

    $add_typology = "INSERT INTO `Tipologia` (`Descrizione`) VALUES ('Stampante ad aghi') ";

    $add_manufacturer = "INSERT INTO `Produttore` (`Nome`,`Domicilio`) VALUES ('Olivetti', 'Italia') ";

?>
