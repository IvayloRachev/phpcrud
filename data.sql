create database foot;
use foot;

/* creer la table joueur */
create table joueur (
id int primary key not null auto_increment,
nom varchar(50) not null,
numero int(2),
position varchar(50) not null
);

/* afficher la liste des joueurs */
select * from joueur;

/* ajouter un joueur */
insert into joueur (nom, numero, position) values
("Mbappe", 10, "attaquant"),
("Lloris", 1, "gardien");

/* mettre a jour un joueur */
update joueur set numero = 2 where id = 2; 