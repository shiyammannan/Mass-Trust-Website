
<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>


<div class="rectangle">
        <div class="content-container">
          <div class="text-content">
            <h1>MASS - A Place for <span id="changing-text">Spiritual</span> </h1>
            <p>Find peace in your way.</p>
            <button class="join-button" id="joinButton">Join Us</button>
          </div>
          <div class="image-content">
            <img src="<?= GLOBAL_PATH . '/images/4.jpg'?>" alt="Spiritual Image" class="rectangle-image" />
          </div>
        </div>
      </div>
      <?php
}
?>