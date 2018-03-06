ALTER TABLE `kans`
  ADD COLUMN `omschrijving_product` text,
  ADD COLUMN `wijze_aanbesteding` varchar(128) DEFAULT NULL,
  ADD COLUMN `planning_uitvraag` date DEFAULT NULL,
  ADD COLUMN `bedrag` decimal(10,2) DEFAULT NULL,
  ADD COLUMN `kans` double DEFAULT NULL,
  ADD COLUMN `afgehandeld` tinyint(4) DEFAULT '0',
  ADD COLUMN `bedrag_inschrijving` decimal(10,2) DEFAULT NULL,
  ADD COLUMN `resultaat` int(11) DEFAULT '0',
  ADD COLUMN `bedrag_concurrent` decimal(10,2) DEFAULT NULL,
  ADD COLUMN `gemist_opmerking` text