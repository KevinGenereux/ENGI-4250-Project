#DROP DATABASE FakeUni;
#CREATE DATABASE FakeUni;
USE FakeUni;

/*create table login(
username varchar(50),
pass varbinary(64),
email varchar(64),
PRIMARY KEY (username)
);*/

create table userInfo(
fname varchar(64) NOT NULL,
lname varchar(64) NOT NULL,
username varchar(64),
department_name varchar(32) NOT NULL,
education_level varchar(32),
user_type varchar(64) NOT NULL,
birthday date NOT NULL,
home_address varchar(128),
PRIMARY KEY (username)
);

insert into userInfo values ("Matthew", "Giorno", "mGiorno", "Software Engineering", "Year 4", "Student", "1998-06-01", "127.0.0.1");