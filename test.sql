SET default_storage_engine= InnoDB;
SET SQL_SAFE_UPDATES=0;
use p160366;

CREATE TABLE Adherent 
 (
	id int,
    nom varchar(50),
    prenom varchar(50),
    constraint ph_adherent primary key(id)
 );
 
 CREATE TABLE Sport(
	id int,
    discipline varchar(50),
    constraint pk_sport primary key(id),
    constraint fk_sport_adherent foreign key(id) references Adhrent(id)
 );
 
 SELECT * from Adherent;