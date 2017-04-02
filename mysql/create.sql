USE test;

CREATE TABLE jahhundoLoomaaed
(
id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nimi varchar(30) NOT NULL,
vanus int(3) NOT NULL,
liik varchar(30) NOT NULL,
puur int(11) NOT NULL
);

INSERT INTO jahhundoLoomaaed
(nimi,vanus,liik,puur) VALUES
('Raksha',5,'hunt',1),
('Gidur',3,'šaakal',2),
('Bagheera',8,'panter',3),
('Akela',6,'hunt',1),
('Baloo',10,'karu',4);