DROP DATABASE FakeUni;
CREATE DATABASE FakeUni;
USE FakeUni;

create table login(
loginId varchar(50),
pass varbinary(64),
username varchar(64),
email varchar(64),
PRIMARY KEY (loginid)
);