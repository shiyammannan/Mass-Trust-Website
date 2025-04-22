
<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<div class="rectangle">
        <br />
        <div class="content-container">
            <div class="text-content">
                <h1>MASS - A Place for</h1>
                <p>
                  Find peace in your way. This is a longer sentence to demonstrate the wrapping functionality of the paragraph element. Words should wrap correctly and entire words should move to the next line when necessary.
                </p>
              </div>
          <div class="flower-container">
            <div class="square square1">
              <img src="<?= GLOBAL_PATH . '/images/4.jpg'?>" alt="Square 1" class="square-image" />
            </div>
            <div class="square square2">
              <img src="<?= GLOBAL_PATH . '/images/4.jpg'?>" alt="Square 2" class="square-image" />
            </div>
            <div class="square square3">
              <img src="<?= GLOBAL_PATH . '/images/4.jpg'?>" alt="Square 3" class="square-image" />
            </div>
            <div class="square square4">
              <img src="<?= GLOBAL_PATH . '/images/4.jpg'?>" alt="Square 4" class="square-image" />
            </div>
          </div>
        </div>
      </div>
      <?php
}
?>