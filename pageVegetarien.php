
    <?php include("entete.php"); ?>


    page starter

<?php 
// On récupère le contenu de la table des recettes

$reponse = $db->query('SELECT	  nomrecette
			            		, nomcategorie
			            		, recette.id AS recipeid
			            		, categorie.id
                                , description
                                , preparation
                                , cuisson
                                , temperature
			                FROM recette 
			            	JOIN selection 
			            			ON recette.id = id_recette
			            	JOIN categorie 
			            			ON categorie.id = id_categorie
                            WHERE categorie.id = 9');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>

    <p>

    <strong>Recette</strong> :  <a href="pageRecette.php?id_recette=<?php echo $donnees['recipeid']?> ">
    <?php  echo $donnees['nomrecette']; ?> <br>
    Temps de préparation : <?php echo $donnees['preparation']; ?> minutes<br>
    Cuisson : <?php echo $donnees['temperature']; ?>  <br> <a/>

<br>
   </p>
<br>
<?php

}


$reponse->closeCursor(); // Termine le traitement de la requête


?>



    
<?php include("pieddepage.php"); ?>

    