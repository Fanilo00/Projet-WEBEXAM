
create table user
(
    Id_user int  auto_increment primary key,
    Nom varchar(30),
    Email varchar(50),
    Pwd varchar(8),
    Categorie int
);

create table objet
(
    Id_Objet int auto_increment primary key,
    Descri varchar(50),
    Photo varchar(100),
    Prix_estimatif int
);
insert into objet values (null,'New Music Taste','CDAlbum.jpg',50);
insert into objet values (null,'Elegant Shoes','homme.jpg',100);
insert into objet values (null,'Diary For Your Best Handwriting','journal.jpg',10);
insert into objet values (null,'Autumn Flock High Heel Sandals','talon.jpg',120);
insert into objet values (null,'Summer Tendance','lunettes.jpg',25);
insert into objet values (null,'Performant Cellphone','phone.jpg',70);

create table Categorie
(
    Categorie varchar(20) primary key 
);
insert into categorie values ('Musique');
insert into categorie values ('Accessoires');
insert into categorie values ('Chaussures');
insert into categorie values ('Technologie');


create table objet_user
(
    Id_ObjetUser int  auto_increment primary key,
    Id_user int,
    Descri varchar(50),
    Photo varchar(100),
    Prix_estimatif int,
    Categorie varchar(35),
    foreign key (Categorie) references Categorie(Categorie),
    foreign key (Id_user) references user(Id_User)
);
insert into objet_user values (null,1,'New Music Taste','CDAlbum.jpg',5,'Musique');
insert into objet_user values (null,1,'Elegant Shoes','homme.jpg',100,'Chaussures');
insert into objet_user values (null,1,'Diary For Your Best Handwriting','journal.jpg',10,'Accessoires');
insert into objet_user values (null,2,'Autumn Flock High Heel Sandals','talon.jpg',120,'Chaussures');
insert into objet_user values (null,2,'Sport shoes','tenis.jpg',50,'Chaussures');
insert into objet_user values (null,3,'Summer Tendance','lunettes.jpg',25,'Accessoires');
insert into objet_user values (null,3,'Performant Cellphone','phone.jpg',70,'technologie');

create table refus
(
    Id_Refus int auto_increment primary key,
    Id_user int,
    Id_Autre int,
    Id_Objet int,
    Date_Refus date,
    foreign key (Id_user) references user(Id_user),
    foreign key (Id_Autre) references user(Id_user),
    foreign key (Id_Objet) references objet(Id_Objet)
);

create table acceptation
(
    Id_Accepte int  auto_increment primary key,
    Id_user int,
    Id_Autre int,
    Id_Objet int,
    Date_Accepte date,
    foreign key (Id_user) references user(Id_user),
    foreign key (Id_Autre) references user(Id_user),
    foreign key (Id_Objet) references objet(Id_Objet)
);







