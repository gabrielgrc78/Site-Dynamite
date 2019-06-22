DROP DATABASE IF EXISTS ProjectDynamite;
CREATE DATABASE ProjectDynamite;

DROP TABLE IF EXISTS ProjectDynamite.ExecutiveAccounts;
CREATE TABLE ProjectDynamite.ExecutiveAccounts(
    `ExecId`   INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `username` VARCHAR(50)                        NOT NULL,
    `email`    VARCHAR(50)                        NOT NULL,
    `password` LONGTEXT                           NOT NULL,
    `role`     TINYTEXT                           NOT NULL,
	UNIQUE KEY `ExecName`(`username`)
)ENGINE=InnoDB AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS ProjectDynamite.StudentAccount;
CREATE TABLE ProjectDynamite.StudentAccount(
  `StudentId` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `Username`  VARCHAR(50)                        NOT NULL,
  `email`     VARCHAR(50)                        NOT NULL,
  `password`  LONGTEXT                           NOT NULL,
  `classes`   TINYTEXT                           NOT NULL

)ENGINE=InnoDB AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS ProjectDynamite.SecurityLogs;
CREATE TABLE ProjectDynamite.SecurityLogs(
  `Student`       VARCHAR(50)                   NOT NULL,
  `Executives`    VARCHAR(50)                   NOT NULL,
  `lastlogin`     TIMESTAMP   NULL     DEFAULT  NULL,
  `CreatedDate`   TIMESTAMP   NOT NULL DEFAULT  CURRENT_TIMESTAMP,
  KEY `SecurityLogs_ibfk_1`(`Student`),
  FOREIGN KEY (`Student`) REFERENCES `StudentAccount`(`StudentId`) ON DELETE CASCADE
)ENGINE=InnoDB;
