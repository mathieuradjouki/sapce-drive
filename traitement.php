<?php
require('model.php');

if(isset($_POST['newTableNosServices'])){
  if(newTableNosServices()){
    echo "c'est ok Nos Services";
  }else{
    echo "c'est pas ok Nos Services";
  }
}

if(isset($_POST['newTitreNS']) && isset($_POST['newPresaNS'])){
  $titre = $_POST['newTitreNS'];
  $presentation = $_POST['newPresaNS'];
  $titre = check($titre);
  $presentation = check($presentation);
  newContentNosServices($titre, $presentation);
  header('location:backoffice.php');
}
?>
