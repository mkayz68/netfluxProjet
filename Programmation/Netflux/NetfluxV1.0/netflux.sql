DROP TABLE IF EXISTS Serie ;
CREATE TABLE Serie (idSerie INT(11) AUTO_INCREMENT NOT NULL,
nomSerie VARCHAR(100),
dateDébut DATE,
dateFin DATE,
nombresSaisons INT(11),
idArticle INT(11),
idCategorie INT(11),
idSynopsis INT(11),
PRIMARY KEY (idSerie)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Synopsis ;
CREATE TABLE Synopsis (idSynopsis INT(11) AUTO_INCREMENT NOT NULL,
synopsisSerie TEXT,
urlImageSynopsis VARCHAR(255),
PRIMARY KEY (idSynopsis)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Article ;
CREATE TABLE Article (idArticle INT(11) AUTO_INCREMENT NOT NULL,
articleSerie TEXT,
urlImageArticle VARCHAR(255),
PRIMARY KEY (idArticle)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Categorie ;
CREATE TABLE Categorie (idCategorie INT(11) AUTO_INCREMENT NOT NULL,
typeCategorie VARCHAR(50),
PRIMARY KEY (idCategorie)) ENGINE=InnoDB;

ALTER TABLE Serie ADD CONSTRAINT FK_Serie_idArticle FOREIGN KEY (idArticle) REFERENCES Article (idArticle);

ALTER TABLE Serie ADD CONSTRAINT FK_Serie_idCategorie FOREIGN KEY (idCategorie) REFERENCES Categorie (idCategorie);
ALTER TABLE Serie ADD CONSTRAINT FK_Serie_idSynopsis FOREIGN KEY (idSynopsis) REFERENCES Synopsis (idSynopsis);
