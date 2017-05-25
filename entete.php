  <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Delite</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/css/style.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> 
        
    </head>
 <!--   <div class="header" >  -->
<body>
  

        
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    
  
   <div class="navbar-header">
       <button type="button" 
                class="navbar-toggle" 
                data-toggle="collapse" 
                data-target="#monMenu">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>              
      </button>
    <!--	<p id="titresite">  -->
        <a class="navbar-brand">              
                Delite
        </a>
   </div>

 <div class="collapse navbar-collapse navbar-right" id="monMenu">
  




    <ul class=" nav navbar-nav">

        <li>
            <a href="pageAccueil.php">
                Accueil
            </a>
         </li>

        </li>
      <li>
            <a href="pageStarter.php">
                Entrées
            </a>
        </li>

        <li>
            <a href="pageDish.php">
                Plats
            </a>
        </li>

        <li>
            <a href="pageDessert.php">
                Desserts
            </a>
        </li>

        <li>
            <a href="pageDrink.php">
                Boissons
            </a>
        </li>

        <li>
             <a href="pageSmartCook.php">
                SmartCook
              </a>
        </li>

        <li>
            <a href="pageVegetarien.php">
                Végétariens
            </a>
        </li>    

        <li>
            <a href="pagePerfectEgg.php">
                L'oeuf parfait
            </a>
        </li> 

        </li>   
        <li>
            <a href="pageConversion.php">
                Conversion
            </a>
        </li> 
  
</ul>
</div>

      
    </div>

</div>


   <?php
    include("db/database.php");
 //   include("statics/menuTop.php"); 
    include("statics/function.php");
      ?>
   <h1><strong></strong></h1>


