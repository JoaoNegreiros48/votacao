create database ELEICAO;

use ELEICAO;

create table candidato(
nomeCand varchar(40),
apelidoCand varchar(20),
cpfCand varchar(11) not null primary key,
siglaPar varchar(5),
descCand varchar(1000)
);

create table partido(
siglaPar varchar(5) not null primary key,
nomePar varchar(30)
);

create table voto(
qtdeVotos numeric(9),
cpfCand varchar(40),
primary key(qtdeVotos, cpfCand)
);

create table UserID(
nome varchar(50),
cpfUser numeric(11) not null primary key,
senha varchar(32),
email varchar(60),
votoReal char(1)
);

alter table candidato add foreign key SIGLA(siglaPar) references partido(siglaPar);

ALTER TABLE voto add foreign key cpf(cpfCand) references candidato(cpfCand);



insert into partido values('LEO','Lindos E Oxalá');
insert into partido values('GIH','Gatas Indicando Homens');
insert into partido values('JOA','Jovens Olhando Aves');
insert into partido values('GAR','Garotos Ácefalos Responsaveis');
insert into partido values('MAR','Militares Armados Racistas');

insert into candidato values('Gabriel Jesus','Jesus',12345678901,'MAR','Desc');
insert into candidato values('Maria Menzel Rodrigos','Elsa',15678901234,'GAR','Desc');
insert into candidato values('João Molejo da Silva','Molejo',14509765290,'JOA','Desc');
insert into candidato values('Amelia Rosa Santoro Souza','Rosa',13579053414,'GIH','Desc');
insert into candidato values('Leonardo Mariano Pereira','Tiringa',98765409872,'LEO','Desc');

insert into voto values(0,12345678901); -- Gabriel Jesus
insert into voto values(0,15678901234); -- Maria Menzel Rodrigos
insert into voto values(0,14509765290); -- João Molejo da Silva
insert into voto values(0,13579053414); -- Amelia Rosa Santoro Souza
insert into voto values(0,98765409872); -- Leonardo Mariano Pereira


insert into UserID values('Jooj',98765409555,'senha','robson1234@gmail.com','N');


