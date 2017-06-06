<!--
    Le code couleur utilisé ne correspond volontairement à aucun du menu d'accueil, 
    pour un souci de lisibilité. Le choix d'utiliser un fond légèrement grisé a pour
    objectif de rappeler le papier, et le texte est sur une nuance de marron foncé et
    non pas de noir afin de garder une certaine douceur à la lecture, tout en ayant un 
    contraste suffisant pour lire aisément.

    -->

    <?php include("entete.php"); ?>

<?php
if(isset($_GET['id_recette'])) {
    $id_recette = $_GET['id_recette'];
}
else $id_recette=1; /*choix de la recette, sinon propose la 1 */

if(isset($_GET['numberToSubmit'])) {
    $numberToSubmit = $_GET['numberToSubmit'];
}
else $numberToSubmit=1;  /*choix du nombre de convives, sinon démarre à 1 */

$data = recipeFor2b($id_recette,$numberToSubmit);

//  var_dump ($numberToSubmit);
?>


 <div class="div-couleur0 col-md-4">
     <div class="col-xs-12 enCuisine">
            
  <!--  affichage de la recette, titre, quantités initialisées à 1 -->

<form method="GET">Recette pour   
<input type="number" name="numberToSubmit" class="numberToCookFor" value="<?php echo $numberToSubmit; ?>" min="1" max="50">
<button type="submit" class="btn btn-outline-success numberToCookFor2">GO</button>
<input type="hidden" name="id_recette" value="<?php echo $id_recette; ?>">

        </form>
   </div>
   <p class="titrerecette">
    
  <h1> <strong class="uppercase"> <?php echo $data[0]['nomrecette'];    ?> </strong></h1>
</p> <br>

<div class="recettePrepareTime howTo">
 <strong class="uppercase">   Préparation : </strong>
    <?php  echo $data[0]['preparation'];  ?> minutes  
 

 <strong class="uppercase">   Cuisson :  </strong>
    <?php  echo $data[0]['cuisson'];  ?> minutes  à 


    <?php echo   $data[0]['temperature'];  ?>
</div> <br>


<div class="recetteIngredient class="ingredientConsigne">
 <strong class="uppercase">   Ingrédients : </strong> <br> <strong>
<?php // boucle pour afficher les ingrédients et quantité
foreach ($data as $key => $values) {
    echo $values['nomingredient'].' : '.$values['newQuantite'].' '.$values['type_mesure'].'<br>'."\n";
}
?>
</strong> <br>

  <strong class="uppercase">  Description : </strong><br>
    <?php  echo  $data[0]['description'];  ?>
    </div> <br>


<?php include("pieddepage.php"); ?>

