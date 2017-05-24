

select round(quantite*3.5), id_ingredient, id_recette, nomrecette, nomingredient

from mesure 

join ingredient on ingredient.id = id_ingredient

JOIN recette on recette.id = id_recette

WHERE recette.id = 2





--  suite
SELECT 
	quantite*4,
	recette.nom, 
	categorie.nom, 
	ingredient.nom, 
	type_mesure 
FROM 
		mesure 
JOIN 
		ingredient on ingredient.id = id_ingredient
JOIN
		categorie on categorie.id = id_categorie
JOIN
		recette on recette.id = id_recette
JOIN
		selection on categorie.id = id_categorie
WHERE 
			recette.nom = 'Rochers coco'


-- suite


select quantite*3.5, id_ingredient, id_recette from mesure WHERE id_recette = 1



-- suite


select quantite*1.5, id_ingredient, id_recette, recette.nom, ingredient.nom

from mesure 

join ingredient on ingredient.id = id_ingredient

JOIN recette on recette.id = id_recette

WHERE recette.id = 1






--  suite
avec arrondi : 

select round(quantite*3.5), id_ingredient, id_recette, recette.nom, ingredient.nom

from mesure 

join ingredient on ingredient.id = id_ingredient

JOIN recette on recette.id = id_recette

WHERE recette.id = 2 





--  suite
 avec variable de nombre de personne à générer en php

select round(quantite*$nombre_de_personnes/2), id_ingredient, id_recette, recette.nom, ingredient.nom

from mesure 

join ingredient on ingredient.id = id_ingredient

JOIN recette on recette.id = id_recette

WHERE recette.id = $ 




--  suite
srgsdgdsgdfsgdsfgdsfgdsgdsgdsg

select round(quantite*3.5), id_ingredient, id_recette, nomrecette, nomingredient

from mesure 

join ingredient on ingredient.id = id_ingredient

JOIN recette on recette.id = id_recette

WHERE recette.id = 2







