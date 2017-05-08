DROP DATABASE IF EXISTS superkarlskrona;

CREATE DATABASE superkarlskrona;

DROP TABLE IF EXISTS `superkarlskrona`.`user`;

CREATE TABLE `superkarlskrona`.`user`(
  `uid` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(250),
  `email` VARCHAR(250),
  `code` VARCHAR(250),
  PRIMARY KEY(`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `superkarlskrona`.`topic`;

CREATE TABLE `superkarlskrona`.`topic`(
  `tid` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(250),
  `like` INT DEFAULT '0',
  `dislike` INT DEFAULT '0',
  `color` VARCHAR(250),
  `description` VARCHAR(250),
  `code` VARCHAR(250),
  PRIMARY KEY(`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

alter table topic add COLUMN uid int; /*VITAL!!!!!!S*/


DROP TABLE IF EXISTS `superkarlskrona`.`comment`;

CREATE TABLE `superkarlskrona`.`comment`(
  `cid` INT NOT NULL AUTO_INCREMENT,
  `tid` INT,
  `uid` INT,
  `like` INT,
  `dislike` INT,
  `comment` VARCHAR(250),
  PRIMARY KEY(`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*Don't need foreign keys*/


CREATE TABLE `superkarlskrona`.`color`(
  `colorid` INT NOT NULL AUTO_INCREMENT,
  `color` VARCHAR(250),
  PRIMARY KEY(`colorid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `color`(`color`) VALUES
("lightpink"),
("lightblue"),
("lightgreen"),
("yellow")


DROP TABLE IF EXISTS `superkarlskrona`.`room`;

CREATE TABLE `superkarlskrona`.`room`(
  `rid` INT NOT NULL AUTO_INCREMENT,
  `address` VARCHAR(250),
  `description` VARCHAR(250),
  `contact` VARCHAR(250),
  `uid` int,
  PRIMARY KEY(`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `superkarlskrona`.`application`;

CREATE TABLE `superkarlskrona`.`application`(
  `aid` INT NOT NULL AUTO_INCREMENT,
  `description` VARCHAR(250),
  `contact` VARCHAR(250),
  `uid` int, /*This uif belongs to the user who applies the room, rather than publish it!*/
  `rid` int,
  PRIMARY KEY(`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;