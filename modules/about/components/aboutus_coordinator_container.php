<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest')) {
?>
<div class="coordinator-container" >
  <div class="headzz">Our Coordinator</div>
  <div class="card-container-wrapper">
    <button class="prev-slide">‹</button> <!-- Previous Button -->
    <div class="card-container">
      <?php 
      $coordinators = ['Coordinator 1', 'Coordinator 2', 'Coordinator 3', 'Coordinator 4', 'Coordinator 5', 'Coordinator 6', 'Coordinator 7', 'Coordinator 8'];
      foreach ($coordinators as $name) { ?>
        <div class="card">
          <img src="<?= GLOBAL_PATH . '/images/pic.jpeg' ?>" alt="<?= $name ?>" class="card-image" />
          <div class="card-name"><?= $name ?></div>
        </div>
      <?php } ?>
    </div>
    <button class="next-slide">›</button> <!-- Next Button -->
  </div>
</div>
<?php
}
?>
