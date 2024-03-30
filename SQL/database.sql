-- creation table profile
CREATE TABLE role(
   id_role int(11) NOT NULL  AUTO_INCREMENT,
   nom_Role VARCHAR(15),
   PRIMARY KEY(id_role)
);

--Insertion dans la table profile
INSERT INTO `role` (`id_role`, `nom_Role`) VALUES
(1, 'ROLE_RP'),
(2, 'ROLE_AC'),
(3, 'ROLE_PROF'),
(4, 'ROLE_ETUDIANT'),

-- creation table Grade
CREATE TABLE Grade(
   id_grade int(11) NOT NULL  AUTO_INCREMENT,
   Libelle_grade VARCHAR(50),
   PRIMARY KEY(id_grade)
);

--Insertion dans la table Grade
INSERT INTO `Grade` (`id_grade`, `Libelle_grade`) VALUES
(1, 'Licence'),
(2, 'Master'),
(3, 'Doctorat'),

-- creation table Specialit
CREATE TABLE spécialité(
   id_specialite int(11) NOT NULL  AUTO_INCREMENT,
   nom_specialite VARCHAR(20),
   PRIMARY KEY( id_specialite )
);

--Insertion dans la table Grade
INSERT INTO `spécialité` (`id_specialite`, `nom_specialite`) VALUES
(1, 'Algo'),
(2, 'Maths'),
(3, 'Design'),
(4, 'SGBD'),

-- creation table users
CREATE TABLE users(
   id int(11) NOT NULL  AUTO_INCREMENT,
   Nom VARCHAR(15),
   Prenom VARCHAR(20),
   login VARCHAR(30),
   mdp VARCHAR(25),
   matricule varchar(25) DEFAULT NULL,
   Adresse VARCHAR(25),
   id_role int  NULL,
   id_grade int  NULL,
   id_specialite int  NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_role) REFERENCES role(id_role),
   FOREIGN KEY(id_grade) REFERENCES Grade(id_grade)
   FOREIGN KEY(id_specialite) REFERENCES spécialité(id_specialite)
);

--Insertion dans la table Users
INSERT INTO `users` (`id`, `Nom`, `Prenom`, `login`, `mdp`, `matricule`, `Adresse`, `id_role`, `id_grade`, `id_specialite`) VALUES
(NULL, 'Ba', 'Amadou', 'amadou@gmail.com', 'passer123', NULL, 'Keur Massar', '3', '2', '1'),
(NULL, 'Sene', 'Awa', 'awa@gmail.com', 'passer123', NULL, 'Liberte 6', '3', '2', '3'),
(NULL, 'Mane', 'Ibrahima', 'ibrahim@gmail.com', 'passer123', NULL, 'Narry Tally', '3', '1', '2'),
(NULL, 'Thiam', 'Fatou', 'fatou@gmail.com', 'passer123', NULL, 'Arafat', '3', '1', '3'),
(NULL, 'Ba', 'Badara', 'badoo@gmail.com', 'passer123', NULL, 'Ouakam', '3', '2', '4'),
(NULL, 'Sarr', 'Gorgui', 'gorgui@gmail.com', 'passer123', NULL, 'Keur massar', '1', NULL, NULL),
(NULL, 'Ba', 'Aliou', 'aliou@gmail.com', 'passer123', NULL, 'Diakhay 2', '1', NULL, NULL),
(NULL, 'Gavo Dia', 'Moussa', 'moussa@gmail.com', 'passer123', NULL, 'mermoz', '2', NULL, NULL),
(NULL, 'Diatta', 'Issa', 'issa@gmail.com', 'passer123', NULL, 'Medina', '2', NULL, NULL),
(NULL, 'Thiam', 'Khalil', 'khalil@gmail.com', 'passer123', '2022-thiam-URL', 'Sicap', '4', NULL, NULL),
(NULL, 'Sene', 'Awa', 'eva@gmail.com', 'passer123', '2022-sene-URL', 'Guediawaye', '4', NULL, NULL),
(NULL, 'Mane', 'Ibrahima', 'brahim@gmail.com', 'passer123', '2022-mane-BVB', 'Rufisque', '4', NULL, NULL),
(NULL, 'Camara', 'Lamine', 'lamine@gmail.com', 'passer123', '2022-cam-ADC', 'Bargny', '4', NULL, NULL),
(NULL, 'Sow', 'Omar', 'omar@gmail.com', 'passer123', '2022-om-KNO', 'Dieupeul', '4', NULL, NULL)

-- creation table Module
CREATE TABLE Modules(
   id_module int(11) NOT NULL  AUTO_INCREMENT,
   Libelle_module VARCHAR(20),
   PRIMARY KEY(IdM)
);

--Insertion dans la table Modules
INSERT INTO `Modules` (`id_module`, `Libelle_module `) VALUES
(1, 'Algo'),
(2, 'Maths'),
(3, 'Design'),
(4, 'SGBD'),

-- creation table cours
CREATE TABLE Cours(
   Id_Cours int(11) NOT NULL  AUTO_INCREMENT,
   DateC DATE,
   id_module  int NOT NULL,
   PRIMARY KEY(Id_Cours),
   FOREIGN KEY(id_module ) REFERENCES Modules(id_module )
);

--Insertion dans la table cours
INSERT INTO `cours` (`Id_Cours`, `DateC`, `id_module`) VALUES 
(NULL, '2024-03-10', '1'),
(NULL, '2024-03-20', '3'), 
(NULL, '2024-03-15', '4'), 
(NULL, '2024-03-22', '1'), 
(NULL, '2024-03-15', '2');

-- creation table Seance
CREATE TABLE Séance(
   Id_Seance int(11) NOT NULL  AUTO_INCREMENT,
   Hd TIME,
   Hf TIME,
   Id_Cours int NOT NULL,
   PRIMARY KEY(Id_Seance),
   FOREIGN KEY(Id_Cours) REFERENCES Cours(Id_Cours)
);

--Insertion dans la table seance
INSERT INTO `séance` (`Id_Seance`, `Hd`, `Hf`, `Id_Cours`) VALUES 
(NULL, '08:00:00', '10:00:00', '1'),
(NULL, '08:00:00', '10:00:00', '3'),
(NULL, '12:00:00', '14:00:00', '4'),
(NULL, '11:00:00', '13:00:00', '1'),
(NULL, '10:00:00', '12:00:00', '2');

-- creation table Semestre
CREATE TABLE Semestre(
   id_Semestre int(11) NOT NULL  AUTO_INCREMENT,
   Libelle_Semestre VARCHAR(20),
   PRIMARY KEY(id_Semestre)
);

--Insertion dans la table Modules
INSERT INTO `semestre` (`id_Semestre`, `Libelle_Semestre`) VALUES 
(NULL, 'Semestre 1'), 
(NULL, 'Semestre 2');

-- creation table definir_semestre
CREATE TABLE definir_semestre(
   Id_Cours int(11) NOT NULL
   id_Semestre int(11) NOT NULL
   FOREIGN KEY(Id_Cours) REFERENCES Cours(Id_Cours),
   FOREIGN KEY( id_Semestre) REFERENCES Semestre( id_Semestre)
);

-- creation table Niveau
CREATE TABLE Niveau(
   id_niveau int(11) NOT NULL  AUTO_INCREMENT,
   nom_niveau VARCHAR(15),
   PRIMARY KEY(id_niveau)
);

--Insertion dans la table Niveau
INSERT INTO `Niveau` (`id_niveau`, `nom_niveau`) VALUES
(1, 'L1'),
(2, 'L2'),
(3, 'L3')

-- creation table Filiere
CREATE TABLE Filiere(
   id_filiere int(11) NOT NULL  AUTO_INCREMENT,
   nom_filiere VARCHAR(20),
   PRIMARY KEY(id_filiere)
);

--Insertion dans la table Filiere
INSERT INTO `Filiere` (`id_filiere`, `nom_filiere`) VALUES
(1, 'Devweb'),
(2, 'GL'),
(3, 'Design'),
(4, 'Marketing')

-- creation table classe
CREATE TABLE Classe(
   id_classe int(11) NOT NULL  AUTO_INCREMENT,
   Libelle_classe VARCHAR(20),
   id_filiere int NOT NULL,
   id_niveau  int NOT NULL,
   PRIMARY KEY(id_classe),
   FOREIGN KEY(id_filiere) REFERENCES Filiere(id_filiere),
   FOREIGN KEY(id_niveau) REFERENCES Niveau(id_niveau)
);

--Insertion dans la table Classe
INSERT INTO `classe` (`id_classe`, `Libelle_classe`, `id_filiere`, `id_niveau`) VALUES 
(NULL, 'L1DevWeb', '1', '1'),
(NULL, 'L2DevWeb', '1', '2'),
(NULL, 'L1Design', '3', '1'),
(NULL, 'L2Design', '3', '2'),
(NULL, 'L1Gl', '2', '1'),
(NULL, 'L2Gl', '2', '2'),
(NULL, 'L1Marketing', '4', '1'),
(NULL, 'L2Marketing', '4', '2')

-- creation table Absence
CREATE TABLE Absence(
   Idabs  int(11) NOT NULL  AUTO_INCREMENT,
   Dateabs DATE ,
   id_classe int NOT NULL,
   PRIMARY KEY(Idabs),
   FOREIGN KEY(id_classe) REFERENCES Classe(id_classe)
);

--Insertion dans la table absence
INSERT INTO `absence` (`Idabs`, `Dateabs`, `id_classe`) VALUES 
(NULL, '2024-03-10', '1'),
(NULL, '2024-03-15', '5'),
(NULL, '2024-03-20', '3'),

-- creation table Etat_just
CREATE TABLE Etat_just(
   id_etat int(11) NOT NULL  AUTO_INCREMENT,
   Libelle_etat VARCHAR(20),
   PRIMARY KEY(id_etat)
);

--Insertion dans la table etat_just
INSERT INTO `etat_just` (`id_etat`, `Libelle_etat`) VALUES 
(NULL, 'Non-traiter'),
(NULL, 'Accepter'),
(NULL, 'Refuser')

-- creation table Justification
CREATE TABLE Justification(
   IDjust int(11) NOT NULL  AUTO_INCREMENT,
   Datejust DATE ,
   Motif VARCHAR(255),
   id_etat int NOT NULL,
   Idabs int NOT NULL,
   PRIMARY KEY(IDjust),
   FOREIGN KEY(Idabs) REFERENCES Absence(Idabs),
   FOREIGN KEY(id_etat ) REFERENCES Etat_just(id_etat)
);

--Insertion dans la table justification
INSERT INTO `justification` (`IDjust`, `Datejust`, `Motif`, `id_etat`, `Idabs`) VALUES 
(NULL, '2024-03-10', 'Malade', '1', '1'),
(NULL, '2024-03-15', 'Retard', '1', '2'),
(NULL, '2024-03-20', 'Malade', '1', '3');

-- creation table anneescolaire
CREATE TABLE AnneeScolaire(
   id_annee int(11) NOT NULL  AUTO_INCREMENT,
   Libele_annee VARCHAR(20),
   PRIMARY KEY(id_annee)
);

--Insertion dans la table justification
INSERT INTO `anneescolaire` (`id_annee`, `Libele_annee`) VALUES 
(NULL, '2023-2024'),
(NULL, '2022-2023');

-- creation table Inscription
CREATE TABLE Inscription(
   id_inscription  int(11) NOT NULL  AUTO_INCREMENT,
   date_inscription DATE ,
   id_annee int NOT NULL,
   id_classe int NOT NULL,
   PRIMARY KEY(id_inscription),
   FOREIGN KEY(id_annee) REFERENCES AnneeScolaire(id_annee),
   FOREIGN KEY(id_classe ) REFERENCES Classe(id_classe )
);

--Insertion dans la table inscription
INSERT INTO `inscription` (`id_inscription`, `date_inscription`, `id_annee`, `id_classe`) VALUES 
(NULL, '2024-03-24', '1', '1'),
(NULL, '2024-03-15', '1', '3');

-- creation table enseigne(tab intermediaire users et cours)
CREATE TABLE Enseigne(
   id int NOT NULL,
   Id_Cours int NOT NULL,
   FOREIGN KEY(id) REFERENCES users(id),
   FOREIGN KEY(Id_Cours) REFERENCES Cours(Id_Cours)
);

--Insertion dans la table enseigne(tab intermediaire users et cours)
INSERT INTO `enseigne` (`id`, `Id_Cours`) VALUES
('1', '1'), 
('2', '3')
('3', '2'), 
('4', '4');

-- creation table enseigne(tab intermediaire cours et semestre)
CREATE TABLE definir_semestre(
   Id_Cours int NOT NULL,
   id_Semestre int NOT NULL,
   FOREIGN KEY(Id_Cours) REFERENCES Cours(Id_Cours),
   FOREIGN KEY(id_Semestre) REFERENCES Semestre(id_Semestre)
);

--Insertion dans la table definir_semestre(tab intermediaire cours et semestre
INSERT INTO `definir_semestre` (`Id_Cours`, `id_Semestre`) 
VALUES ('1', '1'),
('2', '1');

-- creation table enseigne(tab intermediaire cours et classe)
CREATE TABLE pourrait_avoir(
   Id_Cours int NOT NULL,
   id_classe int NOT NULL,
   FOREIGN KEY(Id_Cours) REFERENCES Cours(Id_Cours),
   FOREIGN KEY( id_classe) REFERENCES Classe(id_classe)
);

--Insertion dans la table pourrait_avoir(tab intermediaire cours et Classe)
INSERT INTO `pourrait_avoir` (`Id_Cours`, `id_classe`) VALUES
('1', '1'),
('2', '1');

-- creation table enseigne(tab intermediaire cours et absence)
CREATE TABLE avoir1(
   Id_Cours int NOT NULL,
   Idabs int NOT NULL,
   FOREIGN KEY(Id_Cours) REFERENCES Cours(Id_Cours),
   FOREIGN KEY(Idabs) REFERENCES Absence(Idabs)
);

--Insertion dans la table avoir1(tab intermediaire cours et absence)
INSERT INTO `avoir1` (`Id_Cours`, `Idabs`) VALUES 
('1', '1'),
('2', '2');

-- creation table enseigne(tab intermediaire users et inscription)
CREATE TABLE Faire(
   id int NOT NULL,
   id_inscription int NOT NULL,
   FOREIGN KEY(id) REFERENCES users(id),
   FOREIGN KEY(id_inscription) REFERENCES Inscription(id_inscription)
);

--Insertion dans la table Faire(tab intermediaire users et inscription)
INSERT INTO `faire` (`id`, `id_inscription`) VALUES 
('8', '1'),
('9', '1');

-- creation table enseigne(tab intermediaire users et absence)
CREATE TABLE Peut_avoir(
   id int NOT NULL,
   Idabs int NOT NULL,
   FOREIGN KEY(id) REFERENCES users(id),
   FOREIGN KEY(Idabs) REFERENCES Absence(Idabs)
);

--Insertion dans la table peut_avoir(tab intermediaire  users et absence)
INSERT INTO `peut_avoir` (`id`, `Idabs`) VALUES
('10', '1'),
('11', '2'),
('13', '3'),

-- creation table enseigne(tab intermediaire cours et absence)
CREATE TABLE Traiter(
   id int NOT NULL,
   IDjust int NOT NULL,
   FOREIGN KEY(id) REFERENCES users(id),
   FOREIGN KEY(IDjust) REFERENCES Justification(IDjust)
);

--Insertion dans la table traiter(tab intermediaire  users et Justification)
INSERT INTO `traiter` (`id`, `IDjust`) VALUES 
('8', '1'),
('9', '2'),

CREATE TABLE avoir_just(
   id int NOT NULL,
   IDjust int NOT NULL,
   FOREIGN KEY(id) REFERENCES users(id),
   FOREIGN KEY(IDjust) REFERENCES Justification(IDjust)
);

--Insertion dans la table avoir_just(tab intermediaire  users et Justification)
INSERT INTO `avoir_just` (`id`, `IDjust`) VALUES 
('10', '1'),
('11', '2');
