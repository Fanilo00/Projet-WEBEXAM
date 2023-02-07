create database Takalo;
use Takalo;



create table user
(
    Id_user int primary key auto_increment,
    Nom varchar(30),
    Email varchar(50),
    Pwd varchar(8),
    Categorie int
);


create table objet
(
    Id_Objet int primary key auto_increment,
    Id_user int,
    Descri varchar(50),
    Photo varchar(100),
    Prix_estimatif int,
    Categorie varchar(35),
    foreign key (Categorie) references Categorie(Categorie),
    foreign key (Id_user) references user(Id_User)
);

create table Categorie
(
    Categorie varchar(20) primary key 
);




