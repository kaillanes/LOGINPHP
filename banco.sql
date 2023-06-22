Drop database if exists PPI;
Create database PPI;
Use PPI;
Create table usuarios(
id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome CHAR(50) NOT NULL,
senha CHAR(50) NOT NULL,
raca CHAR(50) NULL,
doenca CHAR(100) null,
tutor Char(50) null,
telefone Char(50) null,
endereco Char(50) null);


INSERT INTO usuarios (nome, senha, raca, doenca, tutor, telefone, endereco) VALUES("kira1","1234","grande","serelepe","Thiago","47992117473", "Rua");
INSERT INTO usuarios (nome, senha, raca, doenca, tutor, telefone, endereco) VALUES("kira2","1234","grande","serelepe","Thiago","47992117473", "Rua");
INSERT INTO usuarios (nome, senha, raca, doenca, tutor, telefone, endereco) VALUES("kira3","1234","grande","serelepe","Thiago","47992117473", "Rua");