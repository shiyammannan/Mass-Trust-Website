
<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<section class="image-gallery">
      <div class="image-containers">
        <img
          src="<?= GLOBAL_PATH . '/images/trust.jpg'?>"
          alt="Description of image 1"
          class="gallery-image"
        />
      </div>
      <div class="image-containers">
        <img
          src="<?= GLOBAL_PATH . '/images/2.jpg'?>"
          alt="Description of image 1"
          class="gallery-image"
        />
      </div>
      <div class="image-containers">
        <img
          src="<?= GLOBAL_PATH . '/images/trust.jpg'?>"
          alt="Description of image 1"
          class="gallery-image"
        />
      </div>
      <div class="image-containers">
        <img
          src="<?= GLOBAL_PATH . '/images/trust.jpg'?>"
          alt="Description of image 1"
          class="gallery-image"
        />
      </div>
      <div class="image-containers">
        <img
          src="<?= GLOBAL_PATH . '/images/trust.jpg'?>"
          alt="Description of image 1"
          class="gallery-image"
        />
      </div>
    </section>
    <?php
}
?>