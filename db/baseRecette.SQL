DROP DATABASE IF EXISTS recipe;

CREATE DATABASE recipe;

use recipe;

create table recette (
    id int auto_increment, 
    nomrecette varchar(100) not null,
    nbPersonnes INT not NULL,
    description TEXT,
    preparation INT not null, 
    cuisson INT not null, 
    temperature VARCHAR(100) not null, 
    PRIMARY KEY(id)
)ENGINE = InnoDB;

CREATE TABLE categorie (
    id INT auto_increment, 
    nomcategorie VARCHAR(100) NOT NULL,
    logo TEXT,
    PRIMARY KEY(id)
)ENGINE = InnoDB;

CREATE TABLE selection (
    id int auto_increment,
    id_recette INT not null, 
    id_categorie INT not null,
    PRIMARY KEY(id),
    FOREIGN KEY(id_recette) REFERENCES recette(id),
    FOREIGN KEY(id_categorie) REFERENCES categorie(id)
)ENGINE = InnoDB;



create table ingredient (
    id int AUTO_INCREMENT, 
    nomingredient VARCHAR(100) not NULL,
    type_mesure VARCHAR(100) not null, 
    calories varchar(100) not null,
    primary KEY(id)
)ENGINE = InnoDB;


create table mesure (
    id int auto_increment, 
    quantite int not null,
    primary key(id),
    id_recette INT not null, 
    id_ingredient INT not null,
    foreign key(id_recette) references recette(id),
    foreign key(id_ingredient) REFERENCES ingredient(id) 
)ENGINE = InnoDB;
 
CREATE INDEX indexSelectionRecette ON selection(id_recette);
CREATE INDEX indexSelectionCategorie ON selection(id_categorie);
CREATE INDEX indexMesureRecette ON mesure(id_recette);
CREATE INDEX indexMesureIngredient ON mesure(id_ingredient);




insert into recette
(nomrecette, nbPersonnes, description, preparation, cuisson, temperature)
VALUES
('Gâteau au chocolat', 2, 'Recette de base pour 2 personnes, desc : 2 oeufs, 40 gr de chocolat, 10g de purée d amandes, 30gr de sirpot d agave, 10gr de farine', 20, 25, '180°C'),
('Cookies moelleux', 2, 'Recette pour 8 cookies, desc : 125gr de farine, 40gr de sucre de canne, 0.5 sachet de levure, 1 oeuf, 60gr de beurre, 60gr de pépites de chocolat, 5gr d arôme vanille', 10, 10, '220°C'), 
('Tortilla pour fajitas', 2, 'Recette pour 4 tortillas desc : 150gr de farine, 150gr de farine de maïs, 15cl d eau', 5, 5, 'feu moyen'),
('Flat bread', 2, 'Recette pour 4 flat bread, desc : 1 yaourt, 150g de farine, 1/2 sachet de levure', 5, 5, 'feu moyen'),
('Brownie minute', 2, 'recette de base pour 2 personnes, desc : 175g de nutella, 2 oeufs, 75g de farine, 40g d amandes en poudre', 5, 15, '180°C'), 
('Cookie minute', 2, 'recette de base pour 2 personnes, desc : 50g de beurre de cacahuètes, 50g de beurre, 1 oeuf', 5, 7, '180°C'),
('Cookie au nutella', 2, 'Recette de base pour 2 personnes, desc : 50g de nutella, 50g de farine, 1 oeuf, 1/2 sachet de levure', 5, 7, '180°C'),
('Rochers coco', 2, 'Recette pour 2 personnes, desc : 60g de noix de coco rapée, 50g de sucre de canne, 1 blanc d oeuf', 5, 13, '180°C'), 
('Chocolats à la noix de coco type Bounty', 2, 'Recette pour 2 personnes, desc : 100g de chocolat à dessert, 100g de noix de coco rapée, 200g de lait concentré sucré, au congélo pour 1h', 15, 90, '1 heure au congélateur'), 
('Biscuits light', 2, 'Recete de base pour 2 personnes, desc : 100g de compote de pommes, 50g de farine, 1/2 sachet de levure', 5, 25, '180°C'),
('Mug cake au chocolat micro-ondes', 1, 'Recette pour un mug cake, desc : 1 oeuf, 40g de sucre, 15g de cacao en poudre', 2, 1, '1 minute au micro-ondes'),
('Mug cake au Nutella micro-ondes', 1, 'Recette pour un mug cake, desc : 1 oeuf, 15g de farine, 50g de Nutella', 2, 1, '1 minute au micro-ondes'),
('Glace au chocolat maison', 2, 'recette pour 2 personnes, desc : 200g de lait concentré sucré, 30g de cacao en poudre; 250g de crème entière', 2, 180, '3 heures au congélateur'),
('Gratin au saumon et aux épinards', 2, 'recette pour 2 personnes, desc : épinards 300g, 100g de fromage frais au chèvre, 200g de saumon', 40, 20, '180°C'),
('Blancs de poulet à la moutarde', 2, 'Recette pour 2 personnes, desc : 2 blancs de poulet, 40g de crème fraîche, 30g de moutarde, 10g herbe de provence', 10, 40, '200°C'),
('Fondue de poireaux', 2, 'Recette pour 2 personnes, desc : 2 blancs de poireaux, 100g d oignon, 2cl d huile d olive, 20g de moutarde, 40g de crème fraiche, 25cl d eau', 10, 25, 'feu moyen'), 
('Quatre quart', 2, 'Recette pour 2 personnes, desc : 2 oeufs, 110g de sucre en poudre, 110g de beurre, 110g de farine', 10, 35, '180°C'), 
('Mousse au chocolat facile',2, 'Recette pour 2 personnes, desc : 2 blancs d oeufs, 2 jaunes d oeuf, 70g de chocolat dessert', 10, 120, '10 minutes au réfrigérateur' ), 
('Crumble aux pommes', 2, 'Recette pour 6 personnes, desc : 250g de pommes, 50g de farine, 25g de beurre, 65g de sucre en poudre', 20, 25, '180°C'), 
('Chessecake au chocolat blanc', 2, 'Recette pour 2 personnes, desc : 2 blanc d oeufs, 2 jaunes d oeufs, 80g de chocolat blanc, 80g de fromage blanc', 10, 15, '170°C'), 
('Muffin light au thon', 2, 'Recette pour 2 personnes, desc : 1 yaourt, 2 oeufs, 150g de thon au naturel', 10, 40, '180°C'), 
('Chesecake au chocolat', 2, 'Recette pour 2 personnes, desc : 2 blanc d oeufs, 2 jaunes d oeufs, 80g de chocolat à dessert, 80g de fromage blanc', 10, 15, '170°C'),
('Smoothie de betteraves au chèvre frais', 2, 'Recette pour 2 personnes desc : 75g de betterave cuite, 17cl de lait écrémé, 45g de fromage de chèvre frais', 5, 30, 'aucune'), 
('Tiramisu traditionnel', 2, 'Recette pour 2 personnes, desc : 1 oeuf, 20gr de sucre de canne, 60gr de mascarpone, biscuits à la cuillère, 10cl de café, 10gr de cacao', 10, 120, '1 heure au refrigérateur'),
('Tiramisu allégé', 2, 'Recette pour 2 personnes, desc : Biscuits à la cuillère, 100g de fromage blanc 0%, 10gr de sucre de canne, 1 blanc d oeuf, 10cl de café, 10gr de cacao', 10, 120, '1 heure au refrigérateur'),
('Mousse au chocolat sans oeufs', 2, 'Recette pour 2 personnes, desc : 100gr de chocolat noir à patisser, 8cl de jus de pommes, glaçons', 10, 0, '15 minutes minimum au réfrigérateur'),
('Crumble poire-chocolat', 2, 'Recette pour 2 personnes, desc : 2 poires, 50gr fr farine, 50gr de beurre, 50gr de sucre, 40gr de pépites de chocolat, 25gr de noisettes', 15, 25, '180°C'),
('Blancs de poulet coco-curry', 2, 'Recette pour 2 personnes, desc : 2 blancs de poulet, 15cl de lait de coco, 10cl de coulis de tomates, 100gr d oignon, 100gr de poivron, 10gr de curry, 10cl d eau', 10, 45, 'feu vif')

;


insert into categorie 
(nomcategorie, logo) 
VALUES
('entree', ' '),
('plat', ' '),
('dessert', ' '),
('SmartCook', ' '),
('boisson', ' '),
('oeuf parfait', ' '),
('conversion', ' '),
('nouvelle recette', ' '),
('vegetarien', ' '),
('15min', ' ')
;

insert into selection
(id_recette, id_categorie)
VALUES
(1, 3),
(2, 3),
(3, 2),
(4, 1),
(4, 4),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(10, 4),
(11, 3),
(12, 3),
(13, 3),
(14, 2),
(15, 2),
(16, 1),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(21, 4),
(22, 3),
(23, 5),
(23, 4),
(24, 3),
(25, 3),
(25, 4),
(26, 3),
(27, 3),
(28, 2)

;

insert into ingredient 
(nomingredient, type_mesure)
VALUES
('chocolat', 'gr'),
('purée d amandes', 'gr'),
('oeuf(s)', ''),
('farine', 'gr'),
('levure', '1'),
('farine de blé T45', 'gr'),
('farine de blé T80', 'gr'),
('farine de sarrazin', 'gr'),
('agar-agar', 'gr'),
('ail', 'gousse'),
('amande en poudre', 'gr'),
('amandes effilées', 'gr'),
('amandes entières', 'gr'),
('ananas', 'gr'),
('basilic', 'gr'),
('beurre de cacahuètes', 'gr'),
('beurre doux', 'gr'),
('beurre salé', 'gr'),
('bicarbonate de sodium', 'cuillère à café'),
('bière blonde', 'cl'),
('bière brune', 'cl'),
('blanc(s) d oeuf(s)', ''),
('lait de riz','1'),
('lait de soja', 'cl'),
('lait d amandes', 'cl'),
('lait écrémé', 'cl'),
('lait entier','1'),
('cacao en poudre', 'gr'),
('café', 'cl'),
('cannelle', 'gr'),
('chocolat au lait à pâtisser', 'gr'),
('chocolat noir à pâtisser', 'gr'),
('citron', 'cl'),
('cognac', 'cl'),
('rhum', 'cl'),
('concentré de tomates', 'gr'),
('coquillettes', 'gr'),
('cornichons', 'gr'),
('coulis de tomates', 'gr'),
('crème de marron', 'gr'),
('crème entière', 'gr'),
('cumin', 'gr'),
('curcuma', 'gr'),
('curry', 'gr'),
('échalote', 'gr'),
('épautre', 'gr'),
('estragon', 'gr'),
('farine de riz complet', 'gr'),
('fécule de maïs', 'gr'),
('flocons d avoine', 'gr'),
('fromage rapé', 'gr'),
('fusillis', 'gr'),
('haricots blancs', 'gr'),
('haricots rouges', 'gr'),
('haricots verts', 'gr'),
('herbes de Provence', 'gr'),
('huile d arachide', 'cl'),
('huile d olive', 'cl'),
('huile de coco', 'cl'),
('huile de colza', 'cl'),
('huile de cuisson', 'cl'),
('huile de noisette', 'cl'),
('huile de tournesol', 'cl'),
('jambon blanc', 'gr'),
('jambon fumé', 'gr'),
('jambon cru', 'gr'),
('jaune(s) d oeuf(s)', ' '),
('lait concentré sucré', 'gr'),
('lait concentré non sucré', 'gr'),
('lait de coco', 'cl'),
('lentilles blondes', 'gr'),
('lentilles vertes', 'gr'),
('lentilles corail', 'gr'),
('levure chimique', 'sachet(s)'),
('levure fraîche', 'gr'),
('macaroni', 'gr'),
('maïs', 'gr'),
('mascarpone', 'gr'),
('parmesan', 'gr'),
('emmental', 'gr'),
('miel', 'gr'),
('moutarde', 'gr'),
('mozzarella', 'gr'),
('muscade', 'gr'),
('noisettes', 'gr'),
('noix', 'gr'),
('noix de cajou', 'gr'),
('noix de coco rapée', 'gr'),
('noix de pécan', 'gr'),
('oeuf(s) entier(s)', ' '),
('oignons', 'gr'),
('olives noires', 'gr'),
('olives vertes', 'gr'),
('origan', 'gr'),
('pain', 'gr'),
('paprika', 'gr'),
('penne', 'gr'),
('petits pois', 'gr'),
('poire', 'gr'),
('pois chiches', 'gr'),
('poivre', 'gr'),
('polenta', 'gr'),
('pomme', 'gr'),
('pomme de terre', 'gr'),
('quinoa', 'gr'),
('raisins secs', 'gr'),
('riz long', 'gr'),
('riz rond', 'gr'),
('sauce soja sucrée', 'cl'),
('sauce soja salée', 'cl'),
('sel', 'gr'),
('semoule à couscous', 'gr'),
('semoule fine', 'gr'),
('sirop d agave', 'cl'),
('sirop d érable', 'cl'),
('son d avoine', 'gr'),
('spaghetti', 'gr'),
('sucre de canne', 'gr'),
('sucre', 'gr'),
('tagliatelle', 'gr'),
('thé', 'cl'),
('thon au naturel', 'gr'),
('thym', 'gr'),
('vanille', 'gr'),
('vin blanc sec', 'cl'),
('vin blanc doux', 'cl'),
('vin rouge', 'cl'),
('vinaigre balsamique', 'cl'),
('vinaigre de cidre', 'cl'),
('yaourt', ' '),
('jus d orange', 'cl'),
('Nutella', 'gr'),
('compote de pommes', 'gr'),
('épinards', 'gr'),
('fromage frais au chèvre', 'gr'),
('saumon frais', 'gr'),
('saumon fumé', 'gr'),
('blanc(s) de poulet', ' '),
('blanc(s) de poireau(x)', ' '),
('eau', 'cl'),
('chocolat blanc à dessert', 'gr'),
('fromage blanc', 'gr'), 
('beterrave cuite', 'gr'), 
('pépites de chocolat', 'gr'),
('arôme vanille liquide', 'gr'),
('farine de maïs', 'gr'),
('fromage blanc 0%', 'gr'),
('biscuits à la cuillère', ' '),
('jus de pommes', 'cl'),
('glaçons', ' '),
('poivron rouge', 'gr'),
('poivron vert', 'gr'),
('poivron jaune', 'gr')
;




insert into mesure 
(id_recette, id_ingredient, quantite)
VALUES
(1, 3, 2),
(1, 32, 40),
(1, 2, 10),
(1, 114, 30),
(1, 6, 10),

(2, 145, 5),
(2, 144, 60),
(2, 17, 60),
(2, 3, 1),
(2, 74, 0.5),
(2, 118, 40),
(2, 6, 125),

(3, 6, 150),
(3, 146, 150),
(3, 140, 150),

(4, 6, 150), 
(4, 130, 1), 
(4, 74, 0.5),

(5, 132, 175),
(5, 90, 2),
(5, 6, 75),
(5, 11, 40),

(6, 16, 50),
(6, 17, 50),
(6, 90, 1),

(7, 132, 50),
(7, 6, 50),
(7, 90, 1),
(7, 74, 0.5),

(8, 88, 60),
(8, 118, 50),
(8, 22, 1),

(9, 32, 100),
(9, 88, 100),
(9, 68, 200),

(10, 133, 100),
(10, 6, 50),
(10, 74, 0.5),

(11, 90, 1),
(11, 119, 40),
(11, 28, 15),

(12, 90, 1),
(12, 6, 15),
(12, 132, 50),

(13, 68, 200),
(13, 28, 30),
(13, 41, 250),

(14, 134, 300),
(14, 135, 100),
(14, 136, 200),

(15, 138, 2),
(15, 41, 40),
(15, 82, 30),
(15, 56, 10),

(16, 139, 2),
(16, 91, 100),
(16, 58, 2),
(16, 82, 20),
(16, 41, 30),
(16, 140, 20),

(17, 3, 2),
(17, 119, 110),
(17, 17, 110),
(17, 6, 110),

(18, 22, 2),
(18, 67, 2),
(18, 32, 70),

(19, 103, 250),
(19, 6, 50),
(19, 17, 25),
(19, 119, 65),

(20, 22, 2),
(20, 67, 2),
(20, 141, 80),
(20, 142, 80),

(21, 130, 1),
(21, 3, 2),
(21, 122, 150),

(22, 22, 2),
(22, 67, 2),
(22, 32, 80),
(22, 142, 80),

(23, 143, 75),
(23, 26, 17),
(23, 135, 45),

(24, 22, 1),
(24, 118, 20),
(24, 78, 60),
(24, 148, ' '),
(24, 29, 10),
(24, 28, 10),

(25, 148, ' '),
(25, 147, 100),
(25, 118, 10),
(25, 22, 1),
(25, 29, 10),
(25, 28, 10), 

(26, 32, 100),
(26, 149, 8),
(26, 150, 10),

(27, 99, 2),
(27, 17, 50),
(27, 6, 50),
(27, 119, 50),
(27, 85, 25),
(27, 144, 40),

(28, 138, 2),
(28, 70, 15),
(28, 39, 10),
(28, 91, 100),
(28, 151, 100),
(28, 44, 10),
(28, 140, 10)

;