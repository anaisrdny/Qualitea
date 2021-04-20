CREATE DATABASE qualitea;
USE qualitea;

CREATE TABLE produits  (
    URL varchar(150),
    nom varchar(20),
    reference  varchar(20) PRIMARY KEY,
    prix decimal,
    stock int, 
    categorie varchar(150)
);
CREATE TABLE users  (
    id varchar(150) PRIMARY KEY,
    mdp varchar(20)
);

INSERT INTO produits VALUES
	('img/the_vert_citron.jpg','Thé vert Citron/100 g','tv01',5.95,100,'the_vert'),
	('img/the_vert_fruitsrouges.jpg', 'Thé vert fruits Rouges/100g','tv02',5.95,100,'the_vert'),
	('img/the_vert_jasmin.jpg', 'Thé vert Jasmin/100g','tv03',5.95,100,'the_vert'),
	('img/the_vert_matcha.jpg', 'Thé vert Matcha/100g','tv04',7.95,100,'the_vert'),
    ('img/the_vert_sencha.jpg','Thé vert Sencha/100g','tv05',6.95,100,'the_vert'),
    ('img/the_noir_assam.jpg','Thé noir Assam / 100g','tn01',6.95,100,'the noir'),
    ('img/the_noir_darjeeling.jpg','Thé noir Darjeeling / 100g','tn02',6.95,100,'the noir'),
    ('img/the_noir_earlgrey.jpg','Thé noir Earl Grey/ 100g','tn03',5.95,100,'the noir'),
    ('img/the_noir_fruitsdesbois.jpg','Thé noir Fruits des bois/ 100g','tn04',5.95,100,'the noir'),
    ('img/the_noir_rose.jpg','Thé noir à la Rose/ 100g','tn05',6.95,100,'the noir'),
    ('img/inf_boutonsrose.jpg','Infusion de boutons de Rose / 100g','if01',7.95,100,'infusion'),
    ('img/inf_camomille.jpg','Infusion de Camomille / 100g','if02',5.95,100,'infusion'),
    ('img/inf_gingembrecitronmiel.jpg','Infusion Gingembre, Citron, Miel / 100g','if03',6.95,100,'infusion'),
    ('img/inf_menthereglisse.jpg','Infusion Menthe Réglisse / 100g','if04',6.95,100,'infusion'),
    ('img/inf_noel.jpg','Infusion de Noël / 100g','if05',5.95,100,'infusion')
;
INSERT INTO users VALUES
('rose','rose');


