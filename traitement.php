<?php
require('model.php');

if(isset($_POST['newTableNosServices'])){
  if(newTableNosServices()){
    echo "c'est ok Nos Services";
  }else{
    echo "c'est pas ok Nos Services";
  }
}

if(isset($_POST['newTitreNS']) && isset($_POST['newPresaNS']) && isset($_FILES['newIconeNS'])){
  $titre = $_POST['newTitreNS'];
  $presentation = $_POST['newPresaNS'];
  $icone = $_FILES['newIconeNS']['name'];
  $dir = "images/.$icone";
  move_uploaded_file($_FILES['newIconeNS']['tmp_name'], $dir);
  $titre = check($titre);
  $presentation = check($presentation);
  $icone = check($icone);
  newContentNosServices($titre, $presentation, $icone);
  header('location:backoffice.php');
}
?>
