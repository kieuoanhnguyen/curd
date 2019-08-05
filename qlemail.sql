create database qlemail;
use qlemail;
create table thongtintk(
    id char(2) primary key,
    name varchar(20) not null,
    password varchar(20) not null,
    email varchar(50),
    country varchar(50),
)