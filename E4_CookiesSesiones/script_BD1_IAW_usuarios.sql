
--drop database bd1_iaw;

create database bd1_iaw;
use bd1_iaw;


CREATE TABLE usuarios (
  user VARCHAR(50)  NOT NULL ,
  pass VARCHAR(50)  NOT NULL
);

INSERT INTO `usuarios` VALUES ('usu1','pass1');
INSERT INTO `usuarios` VALUES ('usu2','pass2');


commit;