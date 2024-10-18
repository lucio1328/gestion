-- Insertion dans la table departement
INSERT INTO departement (nom, mdp) VALUES 
('Informatique', 'mdpInformatique'),
('Ressources Humaines', 'mdpRH'),
('Comptabilité', 'mdpCompta');

-- Insertion dans la table unite_oeuvre
INSERT INTO unite_oeuvre (libelle) VALUES 
('Heure'), 
('Unité'),
('Lot');

-- Insertion dans la table categorie
INSERT INTO categorie (designation) VALUES 
('Fournitures de Bureau'), 
('Matériel Informatique'), 
('Papeterie');

-- Insertion dans la table fournisseur
INSERT INTO fournisseur (nom, tel, adresse, id_categorie) VALUES 
('Fournisseur A', '0123456789', '10 rue de Paris', 1),
('Fournisseur B', '0987654321', '20 avenue de Lyon', 2),
('Fournisseur C', '0147258369', '30 boulevard de Marseille', 3);

-- Insertion dans la table besoin
INSERT INTO besoin (designation, id_unite_oeuvre, id_categorie) VALUES 
('Stylo à bille', 1, 1),
('Ordinateur portable', 2, 2),
('Carnet de notes', 3, 3);

-- Insertion dans la table pro_format_fournisseur
INSERT INTO pro_format_fournisseur (id_fournisseur, prix_unitaire_ht, date_livraison, id_besoin) VALUES 
(1, 1.50, '2024-10-20', 1),
(2, 800.00, '2024-10-25', 2),
(3, 2.00, '2024-10-22', 3);

-- Insertion dans la table stock
INSERT INTO stock (prix_unitaire, quantite, date_reapprovisionnement) VALUES 
(1.50, 100, '2024-10-10'),
(800.00, 50, '2024-10-12'),
(2.00, 200, '2024-10-15');

-- Insertion dans la table commande
INSERT INTO commande (date_cmd, id_pff) VALUES 
('2024-10-16 10:00:00', 1),
('2024-10-16 11:00:00', 2),
('2024-10-16 12:00:00', 3);

-- Insertion dans la table reception
INSERT INTO reception (qte, date_reception, id_cmd) VALUES 
(10, '2024-10-17 09:00:00', 1),
(5, '2024-10-17 10:00:00', 2),
(20, '2024-10-17 11:00:00', 3);

-- Insertion dans la table utilisateur
INSERT INTO utilisateur (nom, email, mdp, id_departement) VALUES 
('Alice Dupont', 'alice@example.com', 'mdpAlice', 1),
('Bob Martin', 'bob@example.com', 'mdpBob', 2),
('Claire Petit', 'claire@example.com', 'mdpClaire', 3);


