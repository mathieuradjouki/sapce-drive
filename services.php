
<div class="services">
  <div class="container">
    <h2 class="text-center">Our Services</h2>
    <p class="sercices-subtitle">Domain registration is the process of registering a domain name, which identifies one or more IP addresses with a name that is easier.</p>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php

      if (isset($_SESSION['NosServices'])) {
        foreach ($_SESSION['NosServices'] as $value) {


 ?>
      <div class="col">
        <div class="card h-100">
          <img src="..." class="card-img-top" alt="...">
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
