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

function newContentNosServices($titre, $presentation, $icone){
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

  $query = "INSERT INTO `nosservices`(`titre`, `Presentation`, `icone`) VALUES (:titre,:presentation,:icone)";
  $request = $dB->prepare($query);
  $arrayValue = [
    ':titre'=>$titre,
    ':presentation'=>$presentation,
    ':icone'=>$icone
    ];
    $request->execute($arrayValue);
    $request->closeCursor();
}
// création de la table si non existante
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
  `Presentation` VARCHAR(255), `icone` VARCHAR(255), PRIMARY KEY (`id_NosServices`)) ENGINE = MyISAM;
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

// function updateTableNosServices(){
//   $servername = "localhost";
//   $dbname = "spacedrivebdd";
//   $username = "root";
//   $password = "";
//
//   try{
//     $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     //On définit le mode d'erreur de PDO sur Exception
//     $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   } catch(PDOException $e) {
//     die('erreur :'.$e->getMessage());
//   }
//   $query = ""
// }

$cardService = $dB->query("SELECT * FROM `nosservices` ORDER BY id_NosServices DESC LIMIT 0, 6");
  $donnees = $cardService->fetchAll();
  $_SESSION['NosServices']=$donnees;
  var_dump($donnees);
 ?>
