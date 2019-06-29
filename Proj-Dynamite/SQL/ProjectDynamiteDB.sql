DROP DATABASE IF EXISTS ProjectDynamite;
CREATE DATABASE ProjectDynamite;

DROP TABLE IF EXISTS ProjectDynamite.UserAccounts;
CREATE TABLE ProjectDynamite.UserAccounts(
    `UserId`           INT(11)      AUTO_INCREMENT  PRIMARY KEY NOT NULL,
    `username`         VARCHAR(50)                              NOT NULL,
    `password`         LONGTEXT                            	    NOT NULL,
    `Userlevel`        TINYTEXT                           	    NOT NULL,
    `classes`          TINYTEXT                           	    NULL,
	`CreatedDate`      TIMESTAMP    NOT NULL 	    DEFAULT     CURRENT_TIMESTAMP,
     UNIQUE (`username`)
)ENGINE=InnoDB AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS ProjectDynamite.SecurityLogs;
CREATE TABLE ProjectDynamite.SecurityLogs (
    `SecId`   	INT(11)   	AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `username`  VARCHAR(50) 					       NOT NULL,
    `lastlogin` TIMESTAMP 	NULL 		       DEFAULT     NULL,
    CONSTRAINT `securitylogs_ibfk_1` FOREIGN KEY (`username`)
        REFERENCES `UserAccounts` (`username`)
        ON DELETE CASCADE 
)ENGINE=INNODB AUTO_INCREMENT=1;
