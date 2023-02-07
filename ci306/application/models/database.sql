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
insert into objet values (null,1,'New Music Taste','CDAlbum.jpg',5,'Musique');
insert into objet values (null,1,'Elegant Shoes','homme.jpg',100,'Chaussures');
insert into objet values (null,1,'Diary For Your Best Handwriting','journal.jpg',10,'Accessoires');
insert into objet values (null,2,'Autumn Flock High Heel Sandals','talon.jpg',120,'Chaussures');
insert into objet values (null,2,'Sport shoes','tenis.jpg',50,'Chaussures');
insert into objet values (null,3,'Summer Tendance','lunettes.jpg',25,'Accessoires');
insert into objet values (null,3,'Performant Cellphone','phone.jpg',70,'technologie');



create table Categorie
(
    Categorie varchar(20) primary key 
);
insert into categorie values ('Musique');
insert into categorie values ('Accessoires');
insert into categorie values ('Chaussures');
insert into categorie values ('Technologie');







