CREATE DATABASE IF NOT EXISTS bcdatabase;
USE bcdatabase;
CREATE TABLE IF NOT EXISTS walls
(
    	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    	title VARCHAR (50) NOT NULL,
	category VARCHAR (50) NOT NULL,
	text VARCHAR (50) NOT NULL
);
CREATE TABLE IF NOT EXISTS users
(
    	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	user VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR (50) NOT NULL
);
