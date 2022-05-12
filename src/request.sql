CREATE DATABASE IF NOT EXISTS cogip;

CREATE TABLE IF NOT EXISTS people
(   PeopleId INT NOT NULL PRIMARY KEY ,
    firstname varchar(20) NOT NULL,
    lastname varchar(20) NOT NULL,
    email varchar(50) NOT NULL );

CREATE TABLE IF NOT EXISTS companies
(   CompaniesId INT NOT NULL PRIMARY KEY,
    `name of company` varchar(70) NOT NULL,
    `country` varchar(25) NOT NULL,
    `vat number` INT NOT NULL );

CREATE TABLE IF NOT EXISTS invoices
(   InvoicesId INT NOT NULL PRIMARY KEY,
    `number of the invoice` INT NOT NULL,
     lastname varchar(20) NOT NULL,
    email varchar(50) NOT NULL );

CREATE TABLE IF NOT EXISTS `type of company`
(   TypeId INT NOT NULL PRIMARY KEY,
    `client` varchar(100) NOT NULL,
    `customer` varchar(100) NOT NULL);

SELECT *