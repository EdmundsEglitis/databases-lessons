CREATE DATABASE library;

USE library;

CREATE TABLE catalog(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(200) NOT NULL,
    author VARCHAR(750) NOT NULL,
    release_date DATE NOT NULL,
    availability INT 
)

INSERT INTO catalog
(name,author,release_date,availability)
VALUES
("Tris mazi kakeni","Baiba Lauma", "2000-9-10", 4),
("Master chief", "HowToBasic", "2020-12-12", 68);