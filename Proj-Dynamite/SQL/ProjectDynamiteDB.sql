DROP DATABASE IF EXISTS ProjectDynamite;
CREATE DATABASE ProjectDynamite;

DROP TABLE IF EXISTS ProjectDynamite.FacultyAccounts;
CREATE TABLE ProjectDynamite.FacultyAccounts(
    id       INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username TINYTEXT                           NOT NULL,
    email    TINYTEXT                           NOT NULL,
    password LONGTEXT                           NOT NULL
) ENGINE= InnoDB AUTO_INCREMENT = 1 DEFAULT;

DROP TABLE IF EXISTS ProjectDynamite.StudentAccount;
CREATE TABLE ProjectDynamite.StudentAccount(
  id        int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  Username  VARCHAR(50)                        NOT NULL,
  email     VARCHAR(50)                        NOT NULL,
  password  LONGTEXT                           NOT NULL
)ENGINE= InnoDB AUTO_INCREMENT=1 DEFAULT;
