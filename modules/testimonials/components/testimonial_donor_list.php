<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<div class="containers">
    <!-- Left side text -->
    <div class="text-content">
        <h1>Donors</h1>
        <p>Donors play a crucial role in supporting nonprofits, charities, and various causes by providing the necessary financial resources for their operations and initiatives.</p>
    </div>

    <!-- Right side image section -->
    <div class="image-containers">
        <img id="donorImage" src="<?= GLOBAL_PATH . '/images/0.2.jpg'?>">
        <div class="donor-name" id="donorName">Dante</div>
    </div>
</div>

<?php } ?>
