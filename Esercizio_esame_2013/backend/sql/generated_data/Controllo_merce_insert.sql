-- #
-- # TABLE STRUCTURE FOR: Controllo_merce
-- #
--
-- DROP TABLE IF EXISTS `Controllo_merce`;
--
-- CREATE TABLE `Controllo_merce` (
--   `ID` int(11) NOT NULL AUTO_INCREMENT,
--   `Merce` int(11) NOT NULL,
--   `Controllo` int(11) NOT NULL,
--   `Sequestro` int(11) DEFAULT NULL,
--   `Esito` tinytext COLLATE utf8_bin NOT NULL,
--   PRIMARY KEY (`ID`),
--   KEY `Merce` (`Merce`),
--   KEY `Controllo` (`Controllo`),
--   KEY `Sequestro` (`Sequestro`),
--   CONSTRAINT `Controllo_merce_ibfk_1` FOREIGN KEY (`Merce`) REFERENCES `Merce` (`ID`),
--   CONSTRAINT `Controllo_merce_ibfk_2` FOREIGN KEY (`Controllo`) REFERENCES `Controllo` (`ID`),
--   CONSTRAINT `Controllo_merce_ibfk_3` FOREIGN KEY (`Sequestro`) REFERENCES `Sequestro` (`ID`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

DELETE FROM `Controllo_merce`;

INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (1, 1, 1, 20, 'minus');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (2, 2, 2, 22, 'perspiciatis');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (3, 3, 3, 5, 'debitis');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (4, 4, 4, 40, 'qui');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (5, 5, 5, 49, 'molestiae');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (6, 6, 6, 60, 'dolor');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (7, 7, 7, 24, 'aspernatur');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (8, 8, 8, 97, 'dolores');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (9, 9, 9, 34, 'aut');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (10, 10, 10, 61, 'aut');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (11, 11, 11, 56, 'et');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (12, 12, 12, 16, 'quo');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (13, 13, 13, 2, 'et');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (14, 14, 14, 5, 'adipisci');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (15, 15, 15, 3, 'odit');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (16, 16, 16, 68, 'praesentium');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (17, 17, 17, 43, 'sequi');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (18, 18, 18, 17, 'itaque');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (19, 19, 19, 80, 'deleniti');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (20, 20, 20, 87, 'asperiores');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (21, 21, 21, 22, 'omnis');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (22, 22, 22, 7, 'qui');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (23, 23, 23, 20, 'dolores');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (24, 24, 24, 21, 'sed');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (25, 25, 25, 30, 'laudantium');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (26, 26, 26, 13, 'nam');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (27, 27, 27, 16, 'et');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (28, 28, 28, 80, 'est');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (29, 29, 29, 96, 'perferendis');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (30, 30, 30, 97, 'sit');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (31, 31, 31, 39, 'culpa');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (32, 32, 32, 16, 'repellendus');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (33, 33, 33, 18, 'nesciunt');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (34, 34, 34, 44, 'ad');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (35, 35, 35, 56, 'possimus');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (36, 36, 36, 67, 'autem');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (37, 37, 37, 4, 'facere');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (38, 38, 38, 79, 'est');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (39, 39, 39, 63, 'ipsam');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (40, 40, 40, 37, 'sint');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (41, 41, 41, 40, 'nihil');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (42, 42, 42, 19, 'deserunt');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (43, 43, 43, 53, 'eos');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (44, 44, 44, 41, 'enim');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (45, 45, 45, 24, 'aliquid');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (46, 46, 46, 56, 'et');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (47, 47, 47, 8, 'facilis');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (48, 48, 48, 66, 'sit');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (49, 49, 49, 73, 'natus');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (50, 50, 50, 88, 'harum');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (51, 51, 51, 52, 'at');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (52, 52, 52, 94, 'aut');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (53, 53, 53, 94, 'occaecati');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (54, 54, 54, 72, 'vitae');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (55, 55, 55, 14, 'dolorum');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (56, 56, 56, 24, 'quis');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (57, 57, 57, 84, 'sint');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (58, 58, 58, 30, 'harum');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (59, 59, 59, 4, 'molestiae');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (60, 60, 60, 80, 'modi');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (61, 61, 61, 27, 'reprehenderit');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (62, 62, 62, 43, 'aut');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (63, 63, 63, 95, 'a');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (64, 64, 64, 44, 'nisi');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (65, 65, 65, 86, 'molestiae');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (66, 66, 66, 51, 'quibusdam');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (67, 67, 67, 11, 'ducimus');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (68, 68, 68, 89, 'et');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (69, 69, 69, 29, 'ullam');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (70, 70, 70, 73, 'laudantium');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (71, 71, 71, 26, 'qui');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (72, 72, 72, 69, 'tempora');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (73, 73, 73, 92, 'voluptates');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (74, 74, 74, 79, 'et');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (75, 75, 75, 10, 'rerum');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (76, 76, 76, 15, 'nobis');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (77, 77, 77, 35, 'et');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (78, 78, 78, 18, 'facere');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (79, 79, 79, 81, 'veniam');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (80, 80, 80, 7, 'est');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (81, 81, 81, 5, 'vitae');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (82, 82, 82, 32, 'totam');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (83, 83, 83, 1, 'cumque');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (84, 84, 84, 99, 'rerum');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (85, 85, 85, 4, 'error');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (86, 86, 86, 14, 'consequatur');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (87, 87, 87, 23, 'ab');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (88, 88, 88, 88, 'necessitatibus');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (89, 89, 89, 44, 'et');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (90, 90, 90, 26, 'incidunt');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (91, 91, 91, 68, 'unde');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (92, 92, 92, 70, 'occaecati');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (93, 93, 93, 68, 'mollitia');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (94, 94, 94, 63, 'quam');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (95, 95, 95, 13, 'exercitationem');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (96, 96, 96, 54, 'facilis');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (97, 97, 97, 13, 'repellat');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (98, 98, 98, 23, 'doloribus');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (99, 99, 99, 43, 'id');
INSERT INTO `Controllo_merce` (`ID`, `Merce`, `Controllo`, `Sequestro`, `Esito`) VALUES (100, 100, 100, 42, 'et');
