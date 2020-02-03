<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
    <link rel="stylesheet" href="stylecss.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
      <div class="col-lg-6">
<div class="card-group">

  <!-- Card -->
  <div class="card mt-5 ml-5">
    <!-- Card content -->
    <div class="card-body">

      <!-- Title -->
      <h4 class="card-title">Envoi d'email vers gmail</h4>
      <?php

if (isset($_SESSION["alert"])){ ?>
    <div class="alert alert-<?php echo $_SESSION["alert"]["type"];?>">
        <?php echo $_SESSION["alert"]["message"];?>
    </div>
    <?php unset($_SESSION["alert"]);?>
<?php } ?>
    <form action='traitement.php' method='post' enctype="multipart/form-data">

  <div class="form-group" >
    <label for="formGroupExampleInput">NOM</label>
    <input type="text" name="nom" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">PRENOM</label>
    <input type="text" name="prenom" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">EMAIL</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">MESSAGE</label>
    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <button type="submit" class="btn btn-primary mt-3" style="background-color: #f4a6e1 !important;" name="envoi" >Envoyer</button>
  </div>
</form>

    </div>
    <!-- Card content -->

  </div>
      </div>
    </div>
</body>
</html>
