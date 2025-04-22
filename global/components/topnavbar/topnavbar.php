<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<nav class="navbar">
    <div class="logo">
        <img src="<?= GLOBAL_PATH . '/images/Group 142.png'?>" alt="MASS Logo">
    </div>
    <ul class="nav-links">
        <li><a href="<?= SEO_URL . '/home'?>">Home</a></li>
        <li><a href="<?= SEO_URL . '/about-us'?>">About Us</a></li>
        <li><a href="<?= SEO_URL . '/testimonials'?>">Testimonials</a></li>
        <li><a href="<?= SEO_URL . '/gallery'?>">Gallery</a></li>
        <li><a href="<?= SEO_URL . '/our-journey'?>">Road Map</a></li>
        <!-- <li><a href="<?= SEO_URL . '/supporters-impact'?>">Endorsements</a></li> -->
        <li><a href="<?= SEO_URL . '/reports'?>">Documents</a></li>
    </ul>
    <button class="contact-button" onclick="window.location.href='<?= SEO_URL . '/contact-us'?>'">Contact Us</button>
    <div class="hamburger" onclick="openNav()">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div id="mySidenav" class="side-nav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="<?= SEO_URL . '/home'?>">Home</a>
        <a href="<?= SEO_URL . '/about-us'?>">About Us</a>
        <a href="<?= SEO_URL . '/testimonials'?>">Testimonials</a>
        <a href="<?= SEO_URL . '/gallery'?>">Gallery</a>
        <a href="<?= SEO_URL . '/our-journey'?>">Road Map</a>
        <!-- <a href="<?= SEO_URL . '/supporters-impact'?>">Endorsements</a> -->
        <a href="<?= SEO_URL . '/reports'?>">Documents</a>
    </div>
</nav>

<?php
}
?>
