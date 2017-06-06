<?php include ("entete.php");?>


<?php
  session_start();
  ?>

  <title>Formulaire de contact - Suggestion de recette </title>

</head>
<body>
  <div  class="container">
  <div class="row">
  <div class="col-xs-12 col-md-12">
  <hr>
  <div class="alert alert-info"><b></b> Si vous avez une question, une suggestion, merci de m'en faire part. Si vous souhaitez retrouver ici vos recettes favorites, n'hésitez pas à me les envoyer.</div>
  <hr>
  </div>
  </div>
  </div>
<!-- CONTENT -->
  <div class="container ">
  <?php if(array_key_exists('errors',$_SESSION)): ?>
  <div class="alert alert-danger">
  <?= implode('<br>', $_SESSION['errors']); ?>
  </div>
  <?php endif; ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div class="alert alert-success">
  Votre email à bien été transmis !
  </div>
  <?php endif; ?>
<form action="mailto:scrapp3rz@gmail.com" method="post">
  <div class="row">
<div class="col-md-6 col-xs-12">
  <div class="form-group">
  <label for="inputname"></label>
  <input required type="text" name="name" placeholder="Votre nom" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
  </div><!--/*.form-group-->
  </div><!--/*.col-md-6 col-xs-12-->
<div class="col-md-6 col-xs-12">
  <div class="form-group">
  <label for="inputemail"></label>
  <input required type="email" name="email" placeholder="Votre email" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
  </div><!--/*.form-group-->
  </div><!--/*.col-md-6 col-xs-12-->
<div class="col-md-12 col-xs-12">
  <div class="form-group">
  <label for="inputmessage"></label>
  <textarea required id="inputmessage" name="message" placeholder="Veuillez entrer ici votre message"class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
  </div><!--/*.form-group-->
  </div><!--/*.col-md-12-->
<div class="col-xs-12 col-md-6">
  <div class="checkbox">
  <label for="checkspam">
  <input type="checkbox" name="antispam" id="checkspam">
Si vous cochez cette case, le message ne partira pas.
  </label>
  </div>
  </div><!--/*.col-md-12-->
<div class="col-xs-12">
  <button type='submit' class='btn btn-info'>Envoyer</button>
  </div><!--/*.col-md-12-->
</div><!--/*.row-->
  </form>
</div><!--/*.container -->
  <!-- END CONTENT -->
</body>
  </html>
  <?php
unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);

?>


<?php include("pieddepage.php"); ?>