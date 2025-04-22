
<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<div class="rectangle">
        <br />
        <div class="content-container">
            <div class="text-content">
                <h1>JOURNEY</h1>
                <br>
                <p>
                  Find peace in your way. This is a longer sentence to demonstrate the wrapping functionality of the paragraph element. Words should wrap correctly and entire words should move to the next line when necessary.
                </p>
              </div>
        </div>
      </div>
      <?php
}
?>