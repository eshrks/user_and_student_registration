CREATE DATABASE students_namaewa;

USE students_namaewa; -- replace yourname with your actual name

CREATE TABLE users( -- should be tbe same as what is in " " at the $table_name
	id INT PRIMARY KEY AUTO_INCREMENT,
	userLevel VARCHAR(10),
	lastName VARCHAR(50),
	firstName VARCHAR(50),
	middleName VARCHAR(50),
	contactNumber VARCHAR(13),
	userName VARCHAR(50),
	pword VARCHAR(250),
	dateCreated DATE,
	isDeleted INT(1) DEFAULT 0
);

CREATE TABLE students( -- should be tbe same as what is in " " at the $table_name
	id INT PRIMARY KEY AUTO_INCREMENT,
	userLevel VARCHAR(10),
	studentNumber VARCHAR(13),
	fullName VARCHAR(250),
	midtermGrade DECIMAL(5, 2),
	finalGrade DECIMAL(5, 2),
	dateCreated DATE,
	isDeleted INT(1) DEFAULT 0
);