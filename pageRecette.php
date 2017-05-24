
    <?php include("statics/entete.php"); ?>

<?php
if(isset($_GET['id_recette'])) {
    $id_recette = $_GET['id_recette'];
}
else $id_recette=1;

if(isset($_GET['numberToSubmit'])) {
    $numberToSubmit = $_GET['numberToSubmit'];
}
else $numberToSubmit=1;

$data = recipeFor2b($id_recette,$numberToSubmit);

//  var_dump ($numberToSubmit);
?>

Je fais ma recette pour 


<form method="GET">
    <p>
<input type="number" name="numberToSubmit" value="<?php echo $numberToSubmit; ?>" min="1" max="30">
<input type="submit"  value="Envoyer">
<input type="hidden" name="id_recette" value="<?php echo $id_recette; ?>">

    </p>
</form>









<div class="recetteTitle">
    <h1>Titre de la recette : </h1>
  <h1> <?php echo $data[0]['nomrecette'];    ?> </h1>
</div> <br>
<div class="recettePrepareTime">
    Temps de préparation : <br>
    <?php  echo $data[0]['preparation'];  ?> minutes
</div> <br>

<div class="recetteCookingTime">
    Temps de cuisson :  <br>
    <?php  echo $data[0]['cuisson'];  ?> minutes
</div> <br>

<div class="recetteDesc">
    Cuisson : <br>
    <?php echo   $data[0]['temperature'];  ?>
</div> <br>

<div class="recetteConsigne">
    Description : <br>
    <?php  echo  $data[0]['description'];  ?>
    </div> <br>

<div class="recetteIngredient">
    Ingrédients : <br>
<?php // boucle pour afficher les ingrédients et quantité
foreach ($data as $key => $values) {
    echo $values['nomingredient'].' - '.$values['newQuantite'].' '.$values['type_mesure'].'<br>'."\n";
}
?>
    </div>


<?php include("statics/pieddepage.php"); ?>


