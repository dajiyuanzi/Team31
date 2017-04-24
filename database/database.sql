
create database superkarlskrona;

drop table if exsits 'user';

create table user(
    uid int AUTO_INCREMENT,
    name varchar(250),
    email varchar(250),
    code varchar(250),
    PRIMARY KEY(uid)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS topic;

CREATE table topic (
	tid int AUTO_INCREMENT,
	name varchar(250),
    description varchar(250),
    code varchar(250),
    PRIMARY KEY(tid)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS comment;

CREATE table comment (
	cid int AUTO_INCREMENT,
    tid int,
    uid int,
    comment varchar(250),
    PRIMARY KEY(cid)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*Don't need foreign keys*/