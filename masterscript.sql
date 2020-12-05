DROP DATABASE FakeUni;
CREATE DATABASE FakeUni;
USE FakeUni;

create table login(
loginid varchar(50),
pass varchar(50),
username varchar(64),
title varchar(32),
PRIMARY KEY (loginid)
);

insert into login
VALUES ('mGiorno', 'password', 'Matthew Giorno', 'DBA');
insert into login
VALUES ('kGenereux', 'password', 'Kevin Genereux', 'DBA');