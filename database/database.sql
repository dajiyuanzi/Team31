
create database superkarlskrona;


create table user(
    uid int AUTO_INCREMENT,
    name varchar(250),
    email varchar(250),
    code varchar(250),
    PRIMARY KEY(uid)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;