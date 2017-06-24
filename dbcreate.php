CREATE DATABASE id2052229_db ;
CREATE USER 'id2052229_anna'@'localhost' IDENTIFIED BY 'Voronova1302';

CREATE TABLE 'id2052229_db'.'users' (
'id' INT(11) NOT NULL AUTO_INCREMENT ,
'surname' VARCHAR(255) NOT NULL ,
'name' VARCHAR(255) NOT NULL ,
'sname' VARCHAR(255) NOT NULL ,
'phone' INT(11) NOT NULL ,
'email' VARCHAR(255) NOT NULL ,
'login' VARCHAR(255) NOT NULL ,
'password' VARCHAR(255) NOT NULL ,
'date' DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
) ENGINE = MyISAM CHARSET=utf8 COLLATE utf8_unicode_ci;

INSERT INTO 'users' ('id', 'surname', 'name', 'sname', 'phone', 'email', 'login', 'password', 'date') VALUES (
NULL, 'Кальченко', 'Анна', 'Сергеевна', '1963089235', 'kalchenkonuta@mail.ru', 'apellsino', '24041997', CURRENT_TIMESTAMP), (
NULL, 'Пушкин', 'Александр', 'Сергеевич', '1056786781', 'pushka@mail.ru', 'pushkin', '17991837', CURRENT_TIMESTAMP), (
NULL, 'Толстой', 'Лев', 'Николаевич', '1011234567', 'l.tolstoi@gmail.com', 'tolstoi', '18281910', CURRENT_TIMESTAMP), (
NULL, 'Старк', 'Арья', '', '1245678901', 'none@gmail.com', 'nobody', 'no12one', CURRENT_TIMESTAMP);

UPDATE 'users' SET (
'id'='4',
'surname'='Старк',
'name'='Арья',
'sname'='Недовна',
'phone'='1236708090',
'email'='nobody@gmail.com',
'login'='nobody',
'password'='no12one',
'date'='2017-06-24 0:35:14'
WHERE 'id'=5);

DELETE FROM 'users' WHERE 'surname'='Старк'