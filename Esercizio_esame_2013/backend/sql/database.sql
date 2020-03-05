-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;

DROP TABLE IF EXISTS `Addetto`;
CREATE TABLE `Addetto` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) COLLATE utf8_bin NOT NULL,
  `password` varchar(64) COLLATE utf8_bin NOT NULL,
  `Nome` varchar(40) COLLATE utf8_bin NOT NULL,
  `Cognome` varchar(40) COLLATE utf8_bin NOT NULL,
  `Ruolo` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `Aeroporto`;
CREATE TABLE `Aeroporto` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Nazione` varchar(64) COLLATE utf8_bin NOT NULL,
  `Nome` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `Categoria`;
CREATE TABLE `Categoria` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(128) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `Controllo`;
CREATE TABLE `Controllo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Dogana` int(11) NOT NULL,
  `Data_inizio` datetime NOT NULL,
  `Data_fine` datetime NOT NULL,
  `Note` mediumtext COLLATE utf8_bin NOT NULL,
  `Dazio` float DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Dogana` (`Dogana`),
  CONSTRAINT `Controllo_ibfk_1` FOREIGN KEY (`Dogana`) REFERENCES `Dogana` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `Controllo_merce`;
CREATE TABLE `Controllo_merce` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Merce` int(11) NOT NULL,
  `Controllo` int(11) NOT NULL,
  `Sequestro` int(11) DEFAULT NULL,
  `Esito` tinytext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Merce` (`Merce`),
  KEY `Controllo` (`Controllo`),
  KEY `Sequestro` (`Sequestro`),
  CONSTRAINT `Controllo_merce_ibfk_1` FOREIGN KEY (`Merce`) REFERENCES `Merce` (`ID`),
  CONSTRAINT `Controllo_merce_ibfk_2` FOREIGN KEY (`Controllo`) REFERENCES `Controllo` (`ID`),
  CONSTRAINT `Controllo_merce_ibfk_3` FOREIGN KEY (`Sequestro`) REFERENCES `Sequestro` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `Controllo_passeggero`;
CREATE TABLE `Controllo_passeggero` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Passeggero` char(28) CHARACTER SET latin1 NOT NULL,
  `Controllo` int(11) NOT NULL,
  `Segnalazione` int(11) DEFAULT NULL,
  `Esito` tinytext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Passeggero` (`Passeggero`),
  KEY `Controllo` (`Controllo`),
  KEY `Segnalazione` (`Segnalazione`),
  CONSTRAINT `Controllo_passeggero_ibfk_1` FOREIGN KEY (`Passeggero`) REFERENCES `Passeggero` (`Passaporto`),
  CONSTRAINT `Controllo_passeggero_ibfk_2` FOREIGN KEY (`Controllo`) REFERENCES `Controllo` (`ID`),
  CONSTRAINT `Controllo_passeggero_ibfk_3` FOREIGN KEY (`Segnalazione`) REFERENCES `Segnalazione` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `Dogana`;
CREATE TABLE `Dogana` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `Merce`;
CREATE TABLE `Merce` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Categoria` int(11) unsigned NOT NULL,
  `Descrizione` tinytext COLLATE utf8_bin NOT NULL,
  `Quantita` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Categoria` (`Categoria`),
  CONSTRAINT `Merce_ibfk_1` FOREIGN KEY (`Categoria`) REFERENCES `Categoria` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `Passeggero`;
CREATE TABLE `Passeggero` (
  `Passaporto` char(28) CHARACTER SET latin1 NOT NULL,
  `Nome` varchar(40) COLLATE utf8_bin NOT NULL,
  `Cognome` varchar(40) COLLATE utf8_bin NOT NULL,
  `Nazionalita` varchar(64) COLLATE utf8_bin NOT NULL,
  `Aeroporto_provenienza` int(11) unsigned NOT NULL,
  `Aeroporto_destinazione` int(11) unsigned NOT NULL,
  `Motivo_viaggio` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Passaporto`),
  KEY `Aeroporto_provenienza` (`Aeroporto_provenienza`),
  KEY `Aeroporto_destinazione` (`Aeroporto_destinazione`),
  CONSTRAINT `Passeggero_ibfk_1` FOREIGN KEY (`Aeroporto_provenienza`) REFERENCES `Aeroporto` (`ID`),
  CONSTRAINT `Passeggero_ibfk_2` FOREIGN KEY (`Aeroporto_destinazione`) REFERENCES `Aeroporto` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `Segnalazione`;
CREATE TABLE `Segnalazione` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Descrizione` text COLLATE utf8_bin NOT NULL,
  `Organo_preposto` tinytext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `Sequestro`;
CREATE TABLE `Sequestro` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Descrizione` text COLLATE utf8_bin NOT NULL,
  `Data_ritiro` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `Squadra_controllo`;
CREATE TABLE `Squadra_controllo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Controllo` int(11) NOT NULL,
  `Addetto` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Controllo` (`Controllo`),
  KEY `Addetto` (`Addetto`),
  CONSTRAINT `Squadra_controllo_ibfk_1` FOREIGN KEY (`Controllo`) REFERENCES `Controllo` (`ID`),
  CONSTRAINT `Squadra_controllo_ibfk_2` FOREIGN KEY (`Addetto`) REFERENCES `Addetto` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
