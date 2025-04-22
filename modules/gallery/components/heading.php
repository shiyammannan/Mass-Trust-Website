<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>
 <div class="img">
        <img src="<?= GLOBAL_PATH . '/images/Property 1=Variant2.svg'?>" alt="Heritage Gallery" class="gallery-image">
    </div>
      <?php
}?>