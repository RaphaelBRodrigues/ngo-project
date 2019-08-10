#drop database ong;
#create database ONG;
use ONG;
show tables;

create table passkey(
AT_Name varchar(90),
AT_Nivel int(10),
AT_Hash varchar(100) primary key
);


create table Class(
AT_CursoID int primary key auto_increment,
AT_Name varchar(90),
AT_Class varchar(1000)
);


create table usuario(
AT_UserID int primary key auto_increment,
AT_Name varchar(90),
AT_Username varchar(40),
AT_Password varchar(40),
AT_Cep int(8),
AT_Cpf  int(11) UNIQUE,
AT_House int(8),
AT_Userhash varchar(100),
AT_CursoID int(4),
AT_Bairro varchar(40),
AT_Street varchar(40),
AT_PhoneOne int(11),
AT_PhoneTwo int(11),

foreign key(AT_Userhash) references passkey(AT_HASH)
);


#Insert Session


#Passkey para funcionarios

insert into passkey values('Master','1','4bbf529262aa9e9abda3cf77ac7cbc0f');
/*
Your Hash: 4bbf529262aa9e9abda3cf77ac7cbc0f
Your String: masterongreviver123
*/
insert into passkey values('Administração','2','bd821ff44472b82eb556e6ce17223b27');
/*
Your Hash: bd821ff44472b82eb556e6ce17223b27
Your String: admongreviver654
*/
insert into passkey values('Professor','3','bd64fdbee37f81bdb5823cc5977aafd6');
/*
Your Hash: bd64fdbee37f81bdb5823cc5977aafd6
Your String: teacherongreviver789
*/
insert into passkey values('Aluno','4','');

#Master account
insert usuario(AT_UserID,AT_Name,AT_Username,AT_Password,AT_Cpf,AT_UserHash) values
(null,'Master','Master','Master',0,'4bbf529262aa9e9abda3cf77ac7cbc0f');

select * from usuario;
select * from passkey;

select usuario.AT_Name ,passkey.AT_Nivel from usuario inner join passkey where passkey.AT_Hash = usuario.AT_Userhash ;

#truncate usuario;
