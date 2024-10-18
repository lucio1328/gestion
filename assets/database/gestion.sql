CREATE DATABASE gestionstock; WITH OWNER gestionstock;

CREATE TABLE departement(
   id SERIAL,
   nom VARCHAR(50),
   mdp VARCHAR(150) NOT NULL,
   PRIMARY KEY(id)
);

CREATE TABLE unite_oeuvre(
   id SERIAL,
   libelle VARCHAR(50) NOT NULL,
   PRIMARY KEY(id)
);

CREATE TABLE categorie(
   id SERIAL,
   designation VARCHAR(50) NOT NULL,
   PRIMARY KEY(id)
);

CREATE TABLE fournisseur(
   id SERIAL,
   nom VARCHAR(50),
   tel VARCHAR(50),
   adresse VARCHAR(150),
   id_categorie INTEGER,
   PRIMARY KEY(id),
   FOREIGN KEY (id_categorie) REFERENCES categorie(id)
);

CREATE TABLE besoin(
   id SERIAL,
   designation VARCHAR(50) NOT NULL,
   id_unite_oeuvre INTEGER NOT NULL,
   id_categorie INTEGER,
   PRIMARY KEY(id),
   FOREIGN KEY(id_unite_oeuvre) REFERENCES unite_oeuvre(id),
   FOREIGN KEY(id_categorie) REFERENCES categorie(id)
);

CREATE TABLE besoin_department_acces(
   id SERIAL,
   id_besoin INTEGER NOT NULL,
   id_departement INTEGER NOT NULL,
   FOREIGN KEY(id_besoin) REFERENCES besoin(id),
   FOREIGN KEY(id_departement) REFERENCES departement(id)
);

CREATE TABLE pro_format_fournisseur(
   id SERIAL,
   id_fournisseur INTEGER,
   prix_unitaire_ht NUMERIC(15,2) NOT NULL,
   date_livraison DATE NOT NULL,
   id_besoin INTEGER,
   PRIMARY KEY(id),
   FOREIGN KEY (id_fournisseur) REFERENCES fournisseur(id),
   FOREIGN KEY (id_besoin) REFERENCES besoin(id)
);

CREATE TABLE stock(
   id SERIAL,
   prix_unitaire NUMERIC(15,2) NOT NULL,
   quantite INTEGER NOT NULL,
   date_reapprovisionnement DATE NOT NULL,
   PRIMARY KEY(id)
);

CREATE TABLE commande(
   id SERIAL,
   date_cmd TIMESTAMP NOT NULL,
   id_pff INTEGER NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_pff) REFERENCES pro_format_fournisseur(id)
);

CREATE TABLE reception(
   id SERIAL,
   qte INTEGER NOT NULL,
   date_reception TIMESTAMP NOT NULL,
   id_cmd INTEGER NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_cmd) REFERENCES commande(id)
);

CREATE TABLE utilisateur(
   id SERIAL,
   nom VARCHAR(50) NOT NULL,
   email VARCHAR(150) NOT NULL,
   mdp VARCHAR(50) NOT NULL,
   id_departement INTEGER NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_departement) REFERENCES departement(id)
);

CREATE TABLE besoin_departement(
   id SERIAL,
   id_besoin INTEGER,
   date_demande TIMESTAMP NOT NULL,
   date_limite DATE,
   quantite INTEGER NOT NULL,
   etat VARCHAR(255) CHECK (etat IN('en attente','valider','refuser','proformat')),
   id_departement INTEGER NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_besoin) REFERENCES besoin(id),
   FOREIGN KEY(id_departement) REFERENCES departement(id)
);


