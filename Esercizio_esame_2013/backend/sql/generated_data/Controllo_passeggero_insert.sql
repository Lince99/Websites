-- #
-- # TABLE STRUCTURE FOR: Controllo_passeggero
-- #
--
-- DROP TABLE IF EXISTS `Controllo_passeggero`;
--
-- CREATE TABLE `Controllo_passeggero` (
--   `ID` int(11) NOT NULL AUTO_INCREMENT,
--   `Passeggero` char(28) CHARACTER SET latin1 NOT NULL,
--   `Controllo` int(11) NOT NULL,
--   `Segnalazione` int(11) DEFAULT NULL,
--   `Esito` tinytext COLLATE utf8_bin NOT NULL,
--   PRIMARY KEY (`ID`),
--   KEY `Passeggero` (`Passeggero`),
--   KEY `Controllo` (`Controllo`),
--   KEY `Segnalazione` (`Segnalazione`),
--   CONSTRAINT `Controllo_passeggero_ibfk_1` FOREIGN KEY (`Passeggero`) REFERENCES `Passeggero` (`Passaporto`),
--   CONSTRAINT `Controllo_passeggero_ibfk_2` FOREIGN KEY (`Controllo`) REFERENCES `Controllo` (`ID`),
--   CONSTRAINT `Controllo_passeggero_ibfk_3` FOREIGN KEY (`Segnalazione`) REFERENCES `Segnalazione` (`ID`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

DELETE FROM `Controllo_passeggero`;

INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (1, '102641', 1, 1, 'maxime');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (2, '7295059', 2, 2, 'laboriosam');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (3, '8509', 3, 3, 'corrupti');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (4, '526602', 4, 4, 'est');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (5, '596276874', 5, 5, 'cumque');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (6, '40038', 6, 6, 'facere');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (7, '45378', 7, 7, 'sequi');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (8, '832', 8, 8, 'ea');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (9, '818450110', 9, 9, 'nesciunt');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (10, '935620', 10, 10, 'consequatur');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (11, '537464366', 11, 11, 'doloremque');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (12, '12425656', 12, 12, 'voluptatibus');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (13, '204814', 13, 13, 'itaque');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (14, '39367', 14, 14, 'quo');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (15, '', 15, 15, 'aut');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (16, '48304', 16, 16, 'et');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (17, '89462656', 17, 17, 'corrupti');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (18, '9952', 18, 18, 'ab');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (19, '642', 19, 19, 'in');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (20, '43303', 20, 20, 'rem');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (21, '7', 21, 21, 'in');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (22, '596276874', 22, 22, 'voluptas');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (23, '56349', 23, 23, 'voluptas');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (24, '391', 24, 24, 'porro');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (25, '86542648', 25, 25, 'quos');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (26, '4584', 26, 26, 'nulla');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (27, '23', 27, 27, 'qui');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (28, '698334243', 28, 28, 'autem');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (29, '92731', 29, 29, 'ullam');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (30, '2892137', 30, 30, 'dolorem');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (31, '58970', 31, 31, 'omnis');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (32, '93786752', 32, 32, 'excepturi');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (33, '9688', 33, 33, 'exercitationem');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (34, '423425', 34, 34, 'enim');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (35, '453790', 35, 35, 'sint');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (36, '56889', 36, 36, 'accusantium');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (37, '77826021', 37, 37, 'aut');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (38, '89542874', 38, 38, 'quam');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (39, '391', 39, 39, 'ut');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (40, '5748810', 40, 40, 'quisquam');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (41, '823211004', 41, 41, 'quidem');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (42, '8977663', 42, 42, 'praesentium');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (43, '628726', 43, 43, 'ab');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (44, '949018730', 44, 44, 'ex');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (45, '27572', 45, 45, 'dolores');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (46, '628726', 46, 46, 'aliquam');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (47, '43746', 47, 47, 'est');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (48, '1882', 48, 48, 'dolor');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (49, '62691', 49, 49, 'quo');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (50, '1190087', 50, 50, 'dolor');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (51, '536962', 51, 51, 'voluptas');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (52, '33410', 52, 52, 'sint');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (53, '637730', 53, 53, 'est');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (54, '14', 54, 54, 'magnam');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (55, '6656048', 55, 55, 'aut');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (56, '4633165', 56, 56, 'omnis');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (57, '5215', 57, 57, 'illo');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (58, '842', 58, 58, 'magni');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (59, '196202290', 59, 59, 'sequi');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (60, '44151022', 60, 60, 'occaecati');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (61, '1461465', 61, 61, 'ad');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (62, '71', 62, 62, 'provident');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (63, '38748', 63, 63, 'iure');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (64, '12520195', 64, 64, 'omnis');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (65, '1643432', 65, 65, 'ut');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (66, '813', 66, 66, 'fugiat');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (67, '6176', 67, 67, 'libero');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (68, '8753189', 68, 68, 'sit');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (69, '68047737', 69, 69, 'eum');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (70, '9493', 70, 70, 'optio');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (71, '43859', 71, 71, 'enim');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (72, '4821', 72, 72, 'est');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (73, '851738', 73, 73, 'consectetur');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (74, '113005', 74, 74, 'et');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (75, '4368', 75, 75, 'dolore');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (76, '140340354', 76, 76, 'corporis');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (77, '642', 77, 77, 'molestiae');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (78, '8554', 78, 78, 'reiciendis');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (79, '23', 79, 79, 'et');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (80, '25204250', 80, 80, 'quo');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (81, '8753189', 81, 81, 'quam');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (82, '70155152', 82, 82, 'sit');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (83, '514', 83, 83, 'quibusdam');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (84, '475', 84, 84, 'laborum');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (85, '760', 85, 85, 'dolores');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (86, '20383', 86, 86, 'molestiae');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (87, '916', 87, 87, 'ut');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (88, '2892137', 88, 88, 'omnis');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (89, '9608', 89, 89, 'vitae');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (90, '121', 90, 90, 'sunt');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (91, '689', 91, 91, 'non');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (92, '1183', 92, 92, 'et');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (93, '73', 93, 93, 'rerum');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (94, '1183', 94, 94, 'aperiam');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (95, '144324', 95, 95, 'doloremque');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (96, '842', 96, 96, 'non');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (97, '840', 97, 97, 'cupiditate');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (98, '67350', 98, 98, 'illum');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (99, '689395729', 99, 99, 'ab');
INSERT INTO `Controllo_passeggero` (`ID`, `Passeggero`, `Controllo`, `Segnalazione`, `Esito`) VALUES (100, '4953', 100, 100, 'aut');
