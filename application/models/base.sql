create table categorie(
    idCategori int primary key auto_increment,
    categorie varchar(20)
);

create table user(
    idUser int primary key auto_increment,
    nom varchar(20),
    prenom varchar(20),
    dtn date,
    email varchar(50),
    mdp varchar(50)
);

create table objet(
    idObjet int primary key auto_increment,
    idUser int,
    nomObjet varchar(20),
    categorie int,
    prix decimal(10,2),
    description text,
    foreign key (categorie) references categorie(idCategori),
    foreign key (idUser) references user(idUser)
);



