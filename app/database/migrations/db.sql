CREATE database mydb;
use mydb;

CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(200),
    password VARCHAR(200),
    name VARCHAR(100),
    lastname VARCHAR(100),
    token VARCHAR(200) 
);

INSERT INTO users values (
    null,
    "mateusfaustino2017@gmail.com",
    "@1234567",
    "Mateus",
    "Faustino",
    null
);

SELECT id, email, name, lastname from users;