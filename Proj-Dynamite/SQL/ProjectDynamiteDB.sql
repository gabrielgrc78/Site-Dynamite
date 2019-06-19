DROP DATABASE IF EXISTS ProjectDynamite;
CREATE DATABASE ProjectDynamite;

DROP TABLE IF EXISTS ProjectDynamite.accounts;
CREATE TABLE ProjectDynamite.accounts
(
    id       INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username TINYTEXT                           NOT NULL,
    email    TINYTEXT                           NOT NULL,
    password LONGTEXT                           NOT NULL
) AUTO_INCREMENT = 1
  DEFAULT CHARSET = latin1;
