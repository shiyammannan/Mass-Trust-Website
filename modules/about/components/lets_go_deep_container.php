<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<div class="lets_go_deep_container">
        <div class="lets_go_deep_content">
          <h1>LET US GO DEEP...</h1>
        </div>
        <div class="lets_go_deep_cards-container">
          <div class="card">Accommodation And Meals</div>
          <div class="card">Health And Wellness Programs</div>
          <div class="card">Counseling And Mentorship</div>
          <div class="card">Spiritual Practices And Guidance</div>
          <div class="card">Community Services</div>
        </div>
      </div>
      <?php
}
?>