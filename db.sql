CREATE database team; 
use team;
create table login(
    id int primary key AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    firstname varchar(255)NOT NULL,
    lastname varchar(255) NOT NULL,
    username varchar(255)NOT NULL,
    Pass varchar(255)NOT NULL
); 
  