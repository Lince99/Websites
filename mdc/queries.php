<?php
    $search_user = "SELECT * FROM `Utente` WHERE `Email` LIKE 'test@test.com' ";

    $insert_user = "INSERT INTO `Utente` (`Email`, `Nome`, `Cognome`, `Password`, `Ruolo`) VALUES ('test@test.com', 'mario', 'rossi', PASSWORD('12345'), '0') ";

    $change_user_role = "UPDATE `Utente` SET `Ruolo`=1 WHERE `Email` LIKE 'test@test.com' ";

    $add_category = "INSERT INTO `Categoria` (`NomeCategoria`,`Descrizione`) VALUES ('Tastiera Querty PS2','Tastiera con layout italiano con attacco per computer PS/2') ";

    $add_typology = "INSERT INTO `Tipologia` (`Descrizione`) VALUES ('Stampante ad aghi') ";

    $add_manufacturer = "INSERT INTO `Produttore` (`Nome`,`Domicilio`) VALUES ('Olivetti', 'Italia') ";

    $add_componente = "INSERT INTO `Componente` (`ID`, `CategoriaID`, `Produttore`, `Descrizione`, `Funzionante`) VALUES (NULL, '1', 'Olivetti', 'TEST DB, REMOVE THIS', NULL);";

    $add_commercial = "INSERT INTO `Commerciale` (`Codice`, `Produttore`, `PrezzoUscita`, `DataEntrata`, `DataUscita`) VALUES (NULL, 'Olivetti', '1234567890.12345678', '2019-11-10', '2019-11-11');";

    $add_product = "INSERT INTO `Prodotto` (`Codice`, `Nome`, `Tipo`, `DatiCommerciali`, `Funzionante`, `Donatore`, `Esposto`) VALUES (NULL, 'Test2', '1', '2', NULL, NULL, '1');";

    $add_product_registration = "INSERT INTO `ProdottoInserito` (`ProdottoID`, `Utente`, `DataInserimento`) VALUES ('1', 'test@test.com', '2019-11-11');";

    $add_photo = "INSERT INTO `Foto` (`FotoID`, `Contenuto`, `Metadata`) VALUES (NULL, 0x89504e470d0a1a, NULL);";

    $add_photo_to_album = "INSERT INTO `Album` (`ProdottoID`, `FotoID`, `DataCreazione`, `Commento`) VALUES ('1', '1', '2019-11-11', NULL);";

    $add_product_composition = "INSERT INTO `ComposizioneProdotto` (`ProdottoID`, `ComponenteID`) VALUES ('1', '2');";

    $add_comment = "INSERT INTO `Commento` (`CommentoID`, `Scrittore`, `ProdottoID`, `Contenuto`) VALUES (NULL, 'test@test.com', '1', 'Commento di prova.');";
?>
