CREATE DATABASE IF NOT EXISTS mydb;

USE mydb;

CREATE TABLE IF NOT EXISTS users (
    usr varchar(128) UNIQUE,
    psk varchar(128),
    data TEXT
);
