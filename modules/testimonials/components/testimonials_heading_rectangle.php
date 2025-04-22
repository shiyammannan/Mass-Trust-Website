
<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<div class="rectangle">
        <!-- Content section -->
        <div class="text-content-rectangle">
            <h1>Testimonials Serve As Powerful Endorsements</h1>
        </div>

        <!-- Image section -->
        <div class="image-container-rectangle">
        <img src="<?= GLOBAL_PATH . '/images/testimonials.png'?>">
        </div>
    </div>

      <?php
}
?>