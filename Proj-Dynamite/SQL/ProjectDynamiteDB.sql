DROP DATABASE IF EXISTS ProjectDynamite;
CREATE DATABASE ProjectDynamite;

DROP TABLE IF EXISTS ProjectDynamite.UserAccounts;
CREATE TABLE ProjectDynamite.UserAccounts(
    `UserId`           INT(11)      AUTO_INCREMENT  PRIMARY KEY NOT NULL,
    `Username`         VARCHAR(50)                              NOT NULL,
    `Password`         LONGTEXT                        	        NOT NULL,
    `Userlevel`        TINYTEXT                                 NOT NULL,
    `CreatedDate`      TIMESTAMP    NOT NULL 	    DEFAULT     CURRENT_TIMESTAMP,
     UNIQUE (`Username`)
)ENGINE=InnoDB AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS ProjectDynamite.SecurityLogs;
CREATE TABLE ProjectDynamite.SecurityLogs (
    `SecId`   	INT(11)   	AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `Username`  VARCHAR(50) 			           NOT NULL,
    `lastlogin` TIMESTAMP 	NULL 	       DEFAULT     NULL,
    CONSTRAINT `securitylogs_ibfk_1` FOREIGN KEY (`Username`)
        REFERENCES `UserAccounts` (`Username`)
        ON DELETE CASCADE 
)ENGINE=INNODB AUTO_INCREMENT=1;

DROP TABLE IF EXISTS projectdynamite.ClassRoster;
CREATE TABLE projectdynamite.ClassRoster (
`ClassCode`   INT(11)      AUTO_INCREMENT   PRIMARY KEY   NOT NULL,
`ClassName`   VARCHAR(50) 				  NOT NULL,
`RoomNumber`  TINYTEXT 					  NOT NULL,
`Description` LONGTEXT 					  NOT NULL,
UNIQUE(`ClassCode`),
UNIQUE(`ClassName`)
)ENGINE=INNODB AUTO_INCREMENT=1;

DROP TABLE IF EXISTS projectdynamite.StudentEnrollment;
CREATE TABLE projectdynamite.StudentEnrollment (
`Username` VARCHAR(50) 					 NOT NULL,
`ClassCode` INT(11)				    	 NULL,
`ClassName` VARCHAR(50) 				 NULL,
`ClassStatus` TINYTEXT 					 NULL,
CONSTRAINT `studentenrollment_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `UserAccounts`(`Username`) ON DELETE CASCADE,
CONSTRAINT `studentenrollment_ibfk_2` FOREIGN KEY (`ClassCode`) REFERENCES `ClassRoster`(`ClassCode`) ON DELETE CASCADE,
CONSTRAINT `studentenrollment_ibfk_3` FOREIGN KEY (`ClassName`) REFERENCES `ClassRoster`(`ClassName`) ON DELETE CASCADE
)ENGINE=INNODB;

