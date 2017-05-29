
    <?php include("entete.php"); ?>

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


 <div class="modifquantite">
Recette pour

<form method="GET">
<input type="number" name="numberToSubmit" value="<?php echo $numberToSubmit; ?>" min="1" max="50">
<button type="submit" class="btn btn-outline-secondary">En cuisine!</button>
<input type="hidden" name="id_recette" value="<?php echo $id_recette; ?>">

        </form>
    </div>





<div class="div-couleur0" >


   <p class="titrerecette">
    
  <h1> <?php echo $data[0]['nomrecette'];    ?> </h1>
</p> <br>

<div class="recettePrepareTime">
    Préparation : 
    <?php  echo $data[0]['preparation'];  ?> minutes  
 

    Cuisson :  
    <?php  echo $data[0]['cuisson'];  ?> minutes  à 


    <?php echo   $data[0]['temperature'];  ?>
</div> <br>


<div class="recetteIngredient">
    Ingrédients : <br>
<?php // boucle pour afficher les ingrédients et quantité
foreach ($data as $key => $values) {
    echo $values['nomingredient'].' - '.$values['newQuantite'].' '.$values['type_mesure'].'<br>'."\n";
}



?>

<div class="recetteConsigne">
    Description : <br>
    <?php  echo  $data[0]['description'];  ?>
    </div> <br>


    </div>


<?php include("pieddepage.php"); ?>


