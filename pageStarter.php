
    <?php include("entete.php"); ?>

    <!-- Ininialisation de la page entree 
==================================================================================
==================================================================================

--> 
<!--
    Le code couleur utilisé est celui correspondant à celui du menu d'accueil, 
    en utilisant un dégradé en css pour une transition. Chaque divcouleur a pour 
    numéro le numéro correspondant à son ID dans la base de données.
    -->

     
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
                            WHERE categorie.id = 1
                            ORDER BY nomrecette');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>

<div class="div-couleur1" >  <a href="pageRecette.php?id_recette=<?php echo $donnees['recipeid']?> ">

   <p class="titrerecette"> 
     <strong> 
    <?php  echo $donnees['nomrecette']; ?> </strong>
   </p>    
   
   <p class="titrerecette"> 
    Préparation : <?php echo $donnees['preparation']; ?> minutes   -   

    Cuisson : <?php echo $donnees['temperature']; ?>  <br> 
 </p>    <a/>


    </div>
<?php

}


$reponse->closeCursor(); // Termine le traitement de la requête


?>
</div>
</div>
    <!-- fin de la page entrée 
==================================================================================
==================================================================================

-->
    
<?php include("pieddepage.php"); ?>

