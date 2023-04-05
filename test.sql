-- création de la base de données
create database chocoblast;
use chocoblast;

-- création des tables
create table utilisateur(
id_utilisateur int primary key auto_increment not null,
nom_utilisateur varchar(50) not null,
prenom_utilisateur varchar(50) not null,
mail_utilisateur varchar(50) not null,
password_utilisateur varchar(100) not null,
image_utilisateur varchar(100) null,
statut_utilisateur tinyint(1) default 0,
id_roles int null
)Engine=InnoDB;

create table roles(
id_roles int primary key auto_increment not null,
nom_roles varchar(50) not null
)Engine=InnoDB;

create table chocoblast(
id_chocoblast int primary key auto_increment  not null,
slogan_chocoblast text not null,
date_chocoblast date not null,
statut_chocoblast tinyint(1) default 0,
cible_chocoblast int not null,
auteur_chocoblast int not null
)Engine=InnoDB;

create table commentaire(
id_commentaire int primary key auto_increment not null,
note_commentaire int not null,
text_commentaire text not null,
date_commentaire datetime not null,
statut_commentaire tinyint(1) default 0,
id_chocoblast int not null,
auteur_commentaire int not null
)Engine=InnoDB;

create table boulangerie(
id_boulangerie int primary key auto_increment not null,
nom_boulangerie varchar(100) not null,
horaires_boulangerie varchar(100) not null,
lien_google_maps text not null
)Engine=InnoDB;

create table utilisateur_boulangerie(
id_utilisateur_boulangerie int primary key auto_increment not null,
id_utilisateur int not null,
id_boulangerie int not null
)Engine=InnoDB;

CREATE TABLE vote_rat (
  id_vote_rat int primary key auto_increment not null,
  id_utilisateur_votant int not null,
  id_utilisateur_candidat int not null,
  date_vote datetime not null
) Engine=InnoDB;


-- ajout des contraintes
alter table utilisateur
add constraint fk_posseder_roles
foreign key(id_roles)
references roles(id_roles);

alter table chocoblast
add constraint fk_chocoblaster_chocoblast
foreign key(auteur_chocoblast)
references utilisateur(id_utilisateur);

alter table chocoblast
add constraint fk_cibler_chocoblast
foreign key(cible_chocoblast)
references utilisateur(id_utilisateur);

alter table commentaire
add constraint fk_poster_commentaire
foreign key(auteur_commentaire)
references utilisateur(id_utilisateur);

alter table commentaire
add constraint fk_rattacher_commentaire
foreign key(id_chocoblast)
references chocoblast(id_chocoblast);

alter table utilisateur_boulangerie
add constraint fk_utilisateur_boulangerie
foreign key(id_utilisateur)
references utilisateur(id_utilisateur);

alter table utilisateur_boulangerie
add constraint fk_boulangerie_utilisateur
foreign key(id_boulangerie)
references boulangerie(id_boulangerie);

-- Suite modif 

ALTER TABLE utilisateur
ADD est_rat boolean DEFAULT false;

ALTER TABLE vote_rat
ADD CONSTRAINT fk_utilisateur_votant
FOREIGN KEY (id_utilisateur_votant)
REFERENCES utilisateur (id_utilisateur);

ALTER TABLE vote_rat
ADD CONSTRAINT fk_utilisateur_candidat
FOREIGN KEY (id_utilisateur_candidat)
REFERENCES utilisateur (id_utilisateur);


/* ?TODO ==> Requete SQL du vote et de l'update

SELECT id_utilisateur_candidat, COUNT(*) as nb_votes
FROM vote_rat
GROUP BY id_utilisateur_candidat
ORDER BY nb_votes DESC
LIMIT 1;

UPDATE utilisateur
SET est_rat = true
WHERE id_utilisateur = :id_utilisateur;

*/