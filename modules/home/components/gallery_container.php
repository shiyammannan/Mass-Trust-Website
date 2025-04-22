
<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<div class="donation_container">
    <!-- First row with two images -->
    <div class="row">
        <div class="donation_image-container">
            <img src="<?= GLOBAL_PATH . '/images/4.jpg'?>" alt="Image 1">
            <div class="hover-overlay">
                <div class="description">
                    <p>Help provide food to the needy.</p>
                    <button class="donate-btn">Donate Now</button>
                </div>
            </div>
        </div>
        <div class="donation_image-container">
            <img src="<?= GLOBAL_PATH . '/images/4.jpg'?>" alt="Image 2">
            <div class="hover-overlay">
                <div class="description">
                    <p>Support education for underprivileged children.</p>
                    <button class="donate-btn">Donate Now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Second row with three images -->
    <div class="row">
        <div class="donation_image-container">
            <img src="<?= GLOBAL_PATH . '/images/4.jpg'?>" alt="Image 3">
            <div class="hover-overlay">
                <div class="description">
                    <p>Provide clean water to remote communities.</p>
                    <button class="donate-btn">Donate Now</button>
                </div>
            </div>
        </div>
        <div class="donation_image-container">
            <img src="<?= GLOBAL_PATH . '/images/4.jpg'?>" alt="Image 4">
            <div class="hover-overlay">
                <div class="description">
                    <p>Help us build shelters for the homeless.</p>
                    <button class="donate-btn">Donate Now</button>
                </div>
            </div>
        </div>
        <div class="donation_image-container">
            <img src="<?= GLOBAL_PATH . '/images/4.jpg'?>" alt="Image 5">
            <div class="hover-overlay">
                <div class="description">
                    <p>Donate for medical aid to war-affected regions.</p>
                    <button class="donate-btn">Donate Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php
}
?>
                