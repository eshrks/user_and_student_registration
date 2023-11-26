CREATE DATABASE students_namaewa; -- replace namaewa with your name

USE students_namaewa; -- replace namaewa with your name

CREATE TABLE users(
	id INT PRIMARY KEY AUTO_INCREMENT,
	userLevel VARCHAR(15),
	lastName VARCHAR(50),
	firstName VARCHAR(50),
	middleName VARCHAR(50),
	contactNumber VARCHAR(13),
	userName VARCHAR(50),
	pword VARCHAR(250),
	dateCreated DATE,
	isDeleted INT(1) DEFAULT 0
);

CREATE TABLE students(
	id INT PRIMARY KEY AUTO_INCREMENT,
	userLevel VARCHAR(15),
	studentNumber VARCHAR(13),
	fullName VARCHAR(250),
	midtermGrade DECIMAL(5, 2),
	finalGrade DECIMAL(5, 2),
	dateCreated DATE,
	isDeleted INT(1) DEFAULT 0
);
