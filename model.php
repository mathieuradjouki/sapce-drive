<?php include('header.php'); ?>
<?php

$servername = "localhost";
$dbname = "spacedrivebdd";
$username = "root";
$password = "";
  // connexion à la base de donnée
try{
  $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //On définit le mode d'erreur de PDO sur Exception
  $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die('erreur :'.$e->getMessage());
}

function newContentNosServices($titre, $presentation){
  $servername = "localhost";
  $dbname = "spacedrivebdd";
  $username = "root";
  $password = "";

  try{
    $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //On définit le mode d'erreur de PDO sur Exception
    $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
  }

  $query = "INSERT INTO `nosservices`(`titre`, `Presentation`) VALUES (:titre,:presentation)";
  $request = $dB->prepare($query);
  $arrayValue = [
    ':titre'=>$titre,
    ':presentation'=>$presentation
    ];
    $request->execute($arrayValue);
    $request->closeCursor();
}

function newTableNosServices(){
  $servername = "localhost";
  $dbname = "spacedrivebdd";
  $username = "root";
  $password = "";

  try{
    $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //On définit le mode d'erreur de PDO sur Exception
    $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
  }
  $query = "CREATE TABLE IF NOT EXISTS `NosServices` (
    `id_NosServices` INT UNSIGNED NOT NULL AUTO_INCREMENT , `titre` VARCHAR(255) NOT NULL ,
    `Presentation` VARCHAR(255) , PRIMARY KEY (`id_NosServices`)) ENGINE = MyISAM;
  )";

  $request = $dB->prepare($query);
  $request->execute();
  $request->closeCursor();
  return True;
}

function check($input){
  trim($input);
  stripslashes($input);
  htmlspecialchars($input);
  return $input;
}

$cardService = $dB->query("SELECT `titre`, `Presentation` FROM `nosservices`");
  $donnees = $cardService->fetchAll();
  $_SESSION['NosServices']=$donnees;
 ?>
