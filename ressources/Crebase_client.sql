
DROP SCHEMA IF EXISTS `CLICOM` ;
CREATE SCHEMA IF NOT EXISTS `CLICOM` DEFAULT CHARACTER SET latin1 ;
USE `CLICOM` ;

-- -----------------------------------------------------
-- Table `CLICOM`.`CLIENT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CLICOM`.`CLIENT` ;

CREATE  TABLE IF NOT EXISTS `CLICOM`.`CLIENT` (
    NOCLI integer NOT NULL , 
	TITRECLIENT CHAR(12) DEFAULT 'Monsieur' NOT NULL , 
	NOMCLI VARCHAR(30) NOT NULL , 
	PRENOMCLI VARCHAR(30) NOT NULL , 
	ADRESSERUE1CLI VARCHAR(40) NOT NULL , 
	ADRESSERUE2CLI VARCHAR(40), 
	CPCLI CHAR(6) NOT NULL , 
	VILLECLI VARCHAR(30) NOT NULL , 
	TELCLI CHAR(14) NOT NULL 
   )ENGINE = InnoDB; 
  ALTER TABLE CLIENT ADD CONSTRAINT PK_CLIENT PRIMARY KEY (NOCLI) ;
  ALTER TABLE CLIENT ADD CONSTRAINT CKC_TITRECLIENT_CLIENT CHECK (TITRECLIENT in ('Monsieur','Madame','Mademoiselle')) ;
   



-- -----------------------------------------------------
-- Table `CLICOM`.`COMMANDE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CLICOM`.`COMMANDE` ;

CREATE  TABLE IF NOT EXISTS `CLICOM`.`COMMANDE` (
IDCDE integer NOT NULL , 
	NOCLI integer  NOT NULL , 
	DATECDE DATE  NOT NULL ,
	N0FACTURE integer NULL
   )ENGINE = InnoDB ;
   ALTER TABLE COMMANDE ADD CONSTRAINT PK_COMMANDE PRIMARY KEY (IDCDE) ;
   ALTER TABLE COMMANDE ADD CONSTRAINT FK_COMMANDE_PASSER_CLIENT FOREIGN KEY (NOCLI)
	  REFERENCES CLIENT (NOCLI) ;


   
Insert into CLIENT (NOCLI,TITRECLIENT,NOMCLI,PRENOMCLI,ADRESSERUE1CLI,ADRESSERUE2CLI,CPCLI,VILLECLI,TELCLI) values (123,'Monsieur','Tienun','Jean','112, rue du Départ',null,'13000 ','Marseille','0404040404');
Insert into CLIENT (NOCLI,TITRECLIENT,NOMCLI,PRENOMCLI,ADRESSERUE1CLI,ADRESSERUE2CLI,CPCLI,VILLECLI,TELCLI) values (176,'Madame','Terrature','Julie','Résidence Mermoz','1234 Boulevard des Aviateurs','14000 ','Caen','0202020202');
Insert into CLIENT (NOCLI,TITRECLIENT,NOMCLI,PRENOMCLI,ADRESSERUE1CLI,ADRESSERUE2CLI,CPCLI,VILLECLI,TELCLI) values (98802 ,'Madame','Cerf','Paulette','343 Avenue Henri Barbusse',null,'33000 ','Bordeaux','0550505050');
Insert into CLIENT (NOCLI,TITRECLIENT,NOMCLI,PRENOMCLI,ADRESSERUE1CLI,ADRESSERUE2CLI,CPCLI,VILLECLI,TELCLI) values (2343 ,'Mademoiselle','Morizet','Patricia','Hameau de Pau','23 Boulevard du Lycée','33000 ','Bordeaux','0250505052');
Insert into CLIENT (NOCLI,TITRECLIENT,NOMCLI,PRENOMCLI,ADRESSERUE1CLI,ADRESSERUE2CLI,CPCLI,VILLECLI,TELCLI) values (2345 ,'Monsieur','Nolapin','Jean','12 quai des Brumes',null,'83000 ','Toulon','0404505050');
Insert into CLIENT (NOCLI,TITRECLIENT,NOMCLI,PRENOMCLI,ADRESSERUE1CLI,ADRESSERUE2CLI,CPCLI,VILLECLI,TELCLI) values (2376 ,'Monsieur','Entete','Martel','Résidence du Faron','30 rue du téléphérique','83000 ','Toulon','0250505050');
Insert into CLIENT (NOCLI,TITRECLIENT,NOMCLI,PRENOMCLI,ADRESSERUE1CLI,ADRESSERUE2CLI,CPCLI,VILLECLI,TELCLI) values (2388 ,'Monsieur','Entete','Martel','12 Avenue de Lille',null, '59140 ','Dunkerque','0250905057');
Insert into CLIENT (NOCLI,TITRECLIENT,NOMCLI,PRENOMCLI,ADRESSERUE1CLI,ADRESSERUE2CLI,CPCLI,VILLECLI,TELCLI) values (2389 ,'Madame','DUMANS','Henriette','Corniche des Bolides','Villa Ferrari', '49000 ','Angers','0250765357');



Insert into COMMANDE (IDCDE,NOCLI,DATECDE,N0FACTURE) values (98762,123,'2014/09/07',123454);
Insert into COMMANDE (IDCDE,NOCLI,DATECDE,N0FACTURE) values (98767,176,'2014/09/08',123455);
Insert into COMMANDE (IDCDE,NOCLI,DATECDE,N0FACTURE) values (98770,2343,'2014/09/10', 123487);
Insert into COMMANDE (IDCDE,NOCLI,DATECDE, N0FACTURE) values (98801,176,'2014/10/01',123475);
Insert into COMMANDE (IDCDE,NOCLI,DATECDE,N0FACTURE) values (98802,2343,'2014/10/01',NULL);
Insert into COMMANDE (IDCDE,NOCLI,DATECDE,N0FACTURE) values (98805,2345,'2014/10/01',123489);
Insert into COMMANDE (IDCDE,NOCLI,DATECDE,N0FACTURE) values (98809,2376,'2014/10/01',NULL);


commit;