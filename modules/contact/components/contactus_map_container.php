<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>


<div class="map-containers">
      <div class="map-container">
        <!-- Left Section: Google Map -->
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.015360862261!2d79.82828181533338!3d11.932963291531602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5361e582f7fdad%3A0x7b83fb2b0806ac87!2sSri%20Aurobindo%20Ashram!5e0!3m2!1sen!2sin!4v1694012191781!5m2!1sen!2sin"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          >
          </iframe>
        </div>

        <!-- Right Section: Location Info -->
        <div class="location-info">
          <h1>Our Location</h1>
          <br />
          <p>And, No. 9, Marine Street, White Town,<br />Puducherry, 605002</p>
          <br />
          <a href="http://www.sriaurobindoashram.org/"
            >http://www.sriaurobindoashram.org/</a
          >
        </div>
      </div>
    </div>
    <?php
}
?>