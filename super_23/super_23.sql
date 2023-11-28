# Host: localhost  (Version 5.5.29)
# Date: 2023-10-06 09:34:36
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "clientes"
#

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `CodCliente` int(5) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Cidade` varchar(50) DEFAULT NULL,
  `Estado` varchar(2) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Login` varchar(30) DEFAULT NULL,
  `Senha` varchar(20) DEFAULT NULL,
  `Validado` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`CodCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

#
# Data for table "clientes"
#

INSERT INTO `clientes` VALUES (1,'Pedro Cavazotto','Pato Branco','PR','pedrocavazott@gmail.com','admin','admin',0),(2,'Christian','Pato Branco','SC','o.christian@escola.pr.gov.br','Gay','1234',0),(3,'Luis','Coronel Vivida','PR','luis@gmail.com','Luis','1234',1),(4,'Guilherme','Pato Branco','PR','gui@gmail.com','GUI','1234',0),(5,'Leonardo','Palma Sola','SC','leo@gmail.com','Leo','1234',1),(7,'Foda Filho','Palma Sola','PR','henrique@gmail.com','RIque','1234',0),(8,'Alejandro','Pato Branco','PR','alejandro@gmail.com','Ale','1234',0),(9,'André','Pato Branco','PR','andre@gmail.com','Andre','1234',1),(10,'Alexandre','Pato Branco','PR','alexandre@gmail.com','fae','1234',1),(11,'Bruno','Pato Branco','PR','bruno@gmail.com','Bruno','1234',0),(12,'Bruno Wodonos','Pato Branco','PR','brunow@gmail.com','Erman','1234',1),(13,'Carlos Rocha','Pato Branco','PR','carlos.rocha@gmail.com','Carlos R','1234',0),(14,'Davi','Salgado Filho','PR','davi.ca@gmail.com','Davi','1234',1),(15,'Eduardo','Flor da Serra do Sul','PR','dudu@gmail.com','Dudu','1234',0),(16,'Fernando','Salgado FIlho','PR','fernando@gmail.com','Fernando','1234',1),(17,'Gustavo Lima','Pato Branco','MG','gulima@gmail.com','Lima','1234',0),(18,'Heloisa','Pato Branco','PR','heloisa@gmail.com','Helo','1234',0),(19,'Hugo','Pato Branco','PR','hugo@gmail.com','Hugo','1234',1),(20,'Igor Confortim','Marmeleiro','PR','confortim.igor@gmail.com','Igor','1234',0),(21,'Jessica','Pato Branco','PR','jessica@gmail.com','Jessica','1234',0),(22,'João Padilha','Pato Branco','PR','joao.padilha@gmail.com','João','1234',0),(23,'Junior Cavazotto','Pato Branco','PR','junes@gmail.com','Junes','1234',1),(24,'Karen Vitória','Pato Branco','PR','karen@gmail.com','Karen','1234',1),(26,'Foda','foda','SC','foda','foda','foda',0),(28,'Marmelo','Duck City','PR','marmelo@hotmail.com','marmelo','marmelo',0),(29,'Marli','Pato Branco','PR','marli@gmail.com','marli','marli',0),(30,'comida','','','','','',0),(31,'comida','','','','','',0);
