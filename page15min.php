
    <?php include("entete.php"); ?>

    <!-- Ininialisation de la page 15min 
==================================================================================
==================================================================================

-->

<!--
    Le code couleur utilisé est celui correspondant à celui du menu d'accueil, 
    en utilisant un dégradé en css pour une transition. Chaque divcouleur a pour 
    numéro le numéro correspondant à son ID dans la base de données.
    -->

    page 15minutes <br>

    A FAIRE en bdd pour remonter les recettes déjà existantes!!

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
                            WHERE categorie.id = 10');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>

    <p>

    <strong>Recette</strong> :  <a href="pageRecette.php?id_recette=<?php echo $donnees['recipeid']?> ">
    <?php  echo $donnees['nomrecette']; ?> <br>
    Temps de préparation : <?php echo $donnees['preparation']; ?> minutes<br>
    Cuisson : <?php echo $donnees['cuisson']; ?> minutes <br> <a/>

<br>
   </p>
<br>
<?php

}


$reponse->closeCursor(); // Termine le traitement de la requête


?>

    <!-- fin de la page 15min 
==================================================================================
==================================================================================

-->

    
<?php include("pieddepage.php"); ?>

