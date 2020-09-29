<?php include('header.php'); ?>

<div class="container">
  <!-- <button type="button" name="ajouter" class="backbuttonform btn btn-primary" id="ajouter">Ajouter un service</button> -->

  <div class="FormNewNosServices" id="FormNewNosServices">
    <!-- enctype=multipart definit le type utilisé pour encoder les données envoyé au serveur -->
    <form class="BackForm" action="traitement.php" method="post" enctype="multipart/form-data">
      <label>Titre</label>
      <input type="text" name="newTitreNS" id="newTitreNS" required>
      <label>Présentation</label>
      <input type="text" name="newPresaNS" id="newPresaNS" required>
      <label>Icone</label>
      <input type="file" name="newIconeNS" id="newIconeNS" required>
      <button class="backbuttonform btn btn-primary" type="submit" name="newTableNosServices">Nouveau Service</button>
    </form>
    <br>
  </div>

  <div class="FormUpdateNosServices" id="FormUpdateNosServices">
    <form class="BackForm" action="traitement.php" method="post" enctype="multipart/form-data">

    </form>
  </div>

  <div class="services">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
          if (isset($_SESSION['NosServices'])) {
            foreach ($_SESSION['NosServices'] as $value) {
        ?>
        <div class="col">
          <div class="card h-100">
            <img src="<?='images/'.$value['icone']?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $value['titre']?></h5>
              <p class="card-text"><?= $value['Presentation']?></p>
            </div>
          </div>
        </div>
        <?php
            }
          }
        ?>
      </div>
    </div>
  </div>
</div>



<?php include('footer.php'); ?>
