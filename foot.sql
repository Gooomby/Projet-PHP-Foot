CREATE TABLE Match_foot(
   Id_match VARCHAR(50) ,
   Date_match DATE,
   Heure_match TIME,
   Nom_equipe_adverse VARCHAR(50) ,
   Domicile_externe BOOLEAN,
   Resultat_match BOOLEAN,
   PRIMARY KEY(Id_match)
);

CREATE TABLE Participation_match(
   Id_Participation_match INT AUTO_INCREMENT,
   Titulaire BOOLEAN,
   Poste VARCHAR(50) ,
   Id_match VARCHAR(50) ,
   PRIMARY KEY(Id_Participation_match),
   FOREIGN KEY(Id_match) REFERENCES Match_foot(Id_match)
);

CREATE TABLE Joueur(
   numero_de_licence VARCHAR(50) ,
   nom VARCHAR(50) ,
   prenom VARCHAR(50) ,
   data_naissance DATE,
   taille DECIMAL(15,0)  ,
   poids DECIMAL(15,0)  ,
   Evalutation DECIMAL(1,0)  ,
   Statut VARCHAR(8) ,
   Id_Participation_match INT,
   PRIMARY KEY(numero_de_licence),
   FOREIGN KEY(Id_Participation_match) REFERENCES Participation_match(Id_Participation_match)
);

CREATE TABLE Note_personnelle(
   Id_note VARCHAR(50) ,
   Commentaire VARCHAR(50) ,
   numero_de_licence VARCHAR(50)  NOT NULL,
   PRIMARY KEY(Id_note),
   FOREIGN KEY(numero_de_licence) REFERENCES Joueur(numero_de_licence)
);

CREATE TABLE Jouer(
   numero_de_licence VARCHAR(50) ,
   Id_match VARCHAR(50) ,
   PRIMARY KEY(numero_de_licence, Id_match),
   FOREIGN KEY(numero_de_licence) REFERENCES Joueur(numero_de_licence),
   FOREIGN KEY(Id_match) REFERENCES Match_foot(Id_match)
);

CREATE TABLE `utilisateur` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
