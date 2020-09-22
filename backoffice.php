<?php include('header.php'); ?>

  <div class="FormNewNosServices" id="FormNewNosServices">
    <form class="BackForm" action="traitement.php" method="post">
      <label>Nouveau titre</label>
      <input type="text" name="newTitreNS" id="newTitreNS" required>
      <label>Nouvelle présentation</label>
      <input type="text" name="newPresaNS" id="newPresaNS" required>
      <button class="backbuttonform" type="submit" name="newTableNosServices">Nouveau Nos Services</button>
    </form>
    <br>
  </div>

<?php include('footer.php'); ?>
