DROP DATABASE IF EXISTS statixBD;
CREATE DATABASE statixBD;
USE statixBD;


CREATE TABLE Filiere (
idFil INT(25),
nomFil VARCHAR(25),
PRIMARY KEY (idFil) 
);

CREATE TABLE Etudiant (
idEtu int (25) NOT NULL,
activite VARCHAR(25),
nomEtu VARCHAR(50),
prenomEtu VARCHAR(50),
idFil INT(25) NOT NULL,
PRIMARY KEY (idEtu), 
	FOREIGN KEY (idFil)
		REFERENCES Filiere (idFil)
); 

CREATE TABLE Etablissement (idEtab INT(25) NOT NULL,
nomEtab VARCHAR(50),
idEtu INT(25) NOT NULL,
PRIMARY KEY (idEtab),
	FOREIGN KEY (idEtu)
		REFERENCES Etudiant (idEtu)
);









































