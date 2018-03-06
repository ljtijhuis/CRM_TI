
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- organisatie
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `organisatie`;


CREATE TABLE `organisatie`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`naam` VARCHAR(255)  NOT NULL,
	`postbus_post` VARCHAR(64),
	`postcode_post` VARCHAR(16),
	`stad_post` VARCHAR(255),
	`straat_bezoek` VARCHAR(255),
	`nummer_bezoek` VARCHAR(16),
	`postcode_bezoek` VARCHAR(16),
	`stad_bezoek` VARCHAR(255),
	`telefoon_algemeen` VARCHAR(32),
	`website` VARCHAR(255),
	`provincie_id` INTEGER,
	`type_id` INTEGER,
	`deleted_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `organisatie_U_1` (`naam`),
	INDEX `organisatie_FI_1` (`provincie_id`),
	CONSTRAINT `organisatie_FK_1`
		FOREIGN KEY (`provincie_id`)
		REFERENCES `provincie` (`id`),
	INDEX `organisatie_FI_2` (`type_id`),
	CONSTRAINT `organisatie_FK_2`
		FOREIGN KEY (`type_id`)
		REFERENCES `organisatie_type` (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- persoon
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `persoon`;


CREATE TABLE `persoon`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`achternaam` VARCHAR(128)  NOT NULL,
	`voorletters` VARCHAR(16),
	`roepnaam` VARCHAR(128),
	`functie` VARCHAR(128),
	`geslacht` TINYINT,
	`actief` TINYINT default 1,
	`telefoon_primair` VARCHAR(32),
	`telefoon_secundair` VARCHAR(32),
	`email` VARCHAR(64),
	`organisatie_id` INTEGER,
	`kerstkaart` TINYINT,
	`mailing` TINYINT,
	`deleted_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `persoon_FI_1` (`organisatie_id`),
	CONSTRAINT `persoon_FK_1`
		FOREIGN KEY (`organisatie_id`)
		REFERENCES `organisatie` (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- contact
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `contact`;


CREATE TABLE `contact`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`datum` DATETIME  NOT NULL,
	`wijze` INTEGER  NOT NULL,
	`aandachtspunten` TEXT  NOT NULL,
	`persoon_id` INTEGER  NOT NULL,
	`gebruiker_id` INTEGER  NOT NULL,
	`organisatie_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `contact_FI_1` (`persoon_id`),
	CONSTRAINT `contact_FK_1`
		FOREIGN KEY (`persoon_id`)
		REFERENCES `persoon` (`id`),
	INDEX `contact_FI_2` (`gebruiker_id`),
	CONSTRAINT `contact_FK_2`
		FOREIGN KEY (`gebruiker_id`)
		REFERENCES `gebruiker` (`id`),
	INDEX `contact_FI_3` (`organisatie_id`),
	CONSTRAINT `contact_FK_3`
		FOREIGN KEY (`organisatie_id`)
		REFERENCES `organisatie` (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- gebruiker
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `gebruiker`;


CREATE TABLE `gebruiker`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`voornaam` VARCHAR(128)  NOT NULL,
	`achternaam` VARCHAR(128)  NOT NULL,
	`deleted_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `gebruiker_U_1` (`voornaam`, `achternaam`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- vervolgactie
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `vervolgactie`;


CREATE TABLE `vervolgactie`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`datum` DATE,
	`omschrijving` TEXT  NOT NULL,
	`gebruiker_id` INTEGER  NOT NULL,
	`organisatie_id` INTEGER  NOT NULL,
	`afgehandeld` TINYINT default 0,
	PRIMARY KEY (`id`),
	INDEX `vervolgactie_FI_1` (`gebruiker_id`),
	CONSTRAINT `vervolgactie_FK_1`
		FOREIGN KEY (`gebruiker_id`)
		REFERENCES `gebruiker` (`id`),
	INDEX `vervolgactie_FI_2` (`organisatie_id`),
	CONSTRAINT `vervolgactie_FK_2`
		FOREIGN KEY (`organisatie_id`)
		REFERENCES `organisatie` (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- kans
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `kans`;


CREATE TABLE `kans`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`datum` DATE  NOT NULL,
	`omschrijving` TEXT  NOT NULL,
	`organisatie_id` INTEGER  NOT NULL,
	`omschrijving_product` TEXT,
	`wijze_aanbesteding` VARCHAR(128)  NOT NULL,
	`planning_uitvraag` DATE  NOT NULL,
	`bedrag` DECIMAL  NOT NULL,
	`kans` DOUBLE  NOT NULL,
	`afgehandeld` TINYINT default 0,
	`resultaat` INTEGER,
	`bedrag_inschrijving` DECIMAL,
	`bedrag_concurrent` DECIMAL,
	`gemist_opmerking` TEXT,
	PRIMARY KEY (`id`),
	INDEX `kans_FI_1` (`organisatie_id`),
	CONSTRAINT `kans_FK_1`
		FOREIGN KEY (`organisatie_id`)
		REFERENCES `organisatie` (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- provincie
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `provincie`;


CREATE TABLE `provincie`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`naam` VARCHAR(128)  NOT NULL,
	`deleted_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `provincie_U_1` (`naam`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- organisatie_type
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `organisatie_type`;


CREATE TABLE `organisatie_type`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`naam` VARCHAR(128)  NOT NULL,
	`deleted_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `organisatie_type_U_1` (`naam`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
