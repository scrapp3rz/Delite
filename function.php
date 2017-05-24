<?php


function listGlobalRecipe() {  //function liste de toutes les recettes 
	global $db;
	$sql = 'SELECT nomrecette 
			FROM recette 
			ORDER BY nomrecette ASC';
	$request = $db->query($sql);
	return $request->fetchall();
}



function listRecipe() {  //function liste de recettes par categorie
	global $db;
	$sql = 'SELECT	  nomrecette
					, nomcategorie
					, recette.id
					, categorie.id
			FROM recette 
				JOIN selection 
						ON recette.id = id_recette
				JOIN categorie 
						ON categorie.id = id_categorie
			WHERE categorie.id = nomrecette';
	$request = $db->query($sql);
	return $request->fetchall();
}


function listCategories() {  //function liste des catégories de recettes
	global $db;
	$sql = 'SELECT DISTINCT 
				nomcategorie
				, id
				, logo 
			FROM categorie';
	$request = $db->query($sql);
	return $request->fetchall();
} 


function recipeAdapt() {  //function recette adaptée avec 2 variables $quantite et $idrecette
	global $db;
	
	$sql = ' 	SELECT ROUND(quantite*3.5), id_ingredient, id_recette, nomrecette, nomingredient
				FROM mesure 
				JOIN ingredient ON ingredient.id = id_ingredient
				JOIN recette ON recette.id = id_recette
				WHERE recette.id = ' .$recetteid ;

	$request = $db->query($sql);

	return $request->fetchall();
}



function recipeFor2b($recetteid, $convive) {  //function recette à adapter avec 2 variables $convive et $recetteid
	global $db;



	$sql = ' 	SELECT 		  ROUND(quantite* ' .$convive. ' *0.5) as newQuantite
							, id_ingredient
							, id_recette as recipeid
							, nomrecette
							, nomingredient
							, description
							, preparation
							, cuisson
							, temperature
							, quantite
							, type_mesure
				FROM mesure 
				JOIN ingredient ON ingredient.id = id_ingredient
				JOIN recette ON recette.id = id_recette
				WHERE recette.id = ' .$recetteid ;

	$request = $db->query($sql);


	return $request->fetchall();

}



function recipeFor2($recetteid) {  //function recette à adapter avec 1 variable et $idrecette
	global $db;
	
	$sql = ' 	SELECT ROUND(quantite*1)
							, id_ingredient
							, id_recette as recipeid
							, nomrecette
							, nomingredient
							, description
							, preparation
							, cuisson
							, temperature
							, quantite
							, type_mesure
							, nbPersonnes AS convive
				FROM mesure 
				JOIN ingredient ON ingredient.id = id_ingredient
				JOIN recette ON recette.id = id_recette
				WHERE recette.id = ' .$recetteid ;

	$request = $db->query($sql);

	return $request->fetchall();

}





function listRecipe2() {  //function liste de recettes pour 1 categorie
	global $db;
	$sql = 'SELECT	  nomrecette
				FROM recette 
				JOIN selection 
						ON recette.id = id_recette
				JOIN categorie 
						ON categorie.id = id_categorie
				WHERE categorie.id = 3';
	$request = $db->query($sql);
	return $request->fetchall();
}





function listRecipeCat() {

	global $db;

	
// On récupère le contenu de la table des recettes

$reponse = $db->query('SELECT	  nomrecette
					, nomcategorie
					, recette.id AS recipeid
					, categorie.id AS categorieid
                    , description
                    , préparation
                    , cuisson
                    , temperature
			FROM recette 
				JOIN selection 
						ON recette.id = id_recette
				JOIN categorie 
						ON categorie.id = id_categorie
                WHERE categorie.id = 2');

					$request = $db->query($sql);

	return $request->fetchall();

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>

    <p>

    <strong>Recette</strong> : <?php echo $donnees['nomrecette']; ?> <br>
    Temps de préparation : <?php echo $donnees['preparation']; ?> minutes<br>
    Cuisson : <?php echo $donnees['temperature']; ?>  <br>
   </p> <br>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
}




function rappelDonnees() {




}









?>