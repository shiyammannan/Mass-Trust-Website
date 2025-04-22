<?php

//include sparrow.php file
require_once '../../config/sparrow.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="language" content="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- seo -->
    <meta property="og:url" content="<?= SEO_URL ?>/gallery">
    <meta property="og:title" content="Gallery - Mira Alagarsamy Seva Sangam (MASS)">
    <meta property="og:description" content="Explore the impactful work of Mira Alagarsamy Seva Sangam (MASS) through our gallery. Discover images of our community activities, events, and initiatives that make a difference in Pondicherry.">
    <meta property="og:image" content="<?= SEO_URL ?>/wp-content/themes/social-theme/images/gallery.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta name="description" content="Explore the impactful work of Mira Alagarsamy Seva Sangam (MASS) through our gallery. Discover images of our community activities, events, and initiatives that make a difference in Pondicherry." />
    <link rel="canonical" href="<?= SEO_URL ?>/gallery" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Gallery - Mira Alagarsamy Seva Sangam (MASS)" />
    <meta property="og:description" content="Explore the impactful work of Mira Alagarsamy Seva Sangam (MASS) through our gallery. Discover images of our community activities, events, and initiatives that make a difference in Pondicherry." />
    <meta property="og:url" content="<?= SEO_URL ?>/gallery" />
    <meta property="og:site_name" content="Mira Alagarsamy Seva Sangam (MASS)" />
    <meta property="article:modified_time" content="2024-01-22T06:12:06+00:00" />   
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />

    <!-- title -->
    <title>Gallery - Mira Alagarsamy Seva Sangam (MASS)</title>

    <link rel="stylesheet" href="<?= GLOBAL_PATH . '/css/style.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/gallery/css/heading.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/gallery/css/slideimage.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/gallery/css/gallery.css'?>">





    <!-- CSS -->
 




</head>

<body>
<header class="navbar" id="navbar"></header>    
    <main>
    <div class="heading" id="heading"></div>
    
    <div class="slideimage" id="slideimage"></div>
    <div class="galleryimage" id="galleryimage"></div>
    <!-- <div class="popup" id="popup"></div> -->
    </main>
    <footer><div id="footer"></div></footer>

    <!-- Include jQuery -->
    <script src="<?= PACKAGES . '/jquery/jquery.js' ?>"></script>

    <script src="<?= MODULES . '/gallery/js/slide.js' ?>"></script>
    <script>
        
        $.ajax({
            type: 'POST',
            url: '<?= GLOBAL_PATH . '/components/topnavbar/topnavbar.php' ?>',

            success: function(response) {
                $('#navbar').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/gallery/components/heading.php' ?>',

            success: function(response) {
                $('#heading').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/gallery/components/slide_image.php' ?>',

            success: function(response) {
                $('#slideimage').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/gallery/components/gallery.php' ?>',

            success: function(response) {
                $('#galleryimage').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/gallery/components/popup.php' ?>',

            success: function(response) {
                $('#popup').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= GLOBAL_PATH . '/components/footer/footer.php' ?>',

            success: function(response) {
                $('#footer').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
    </script>


</body>

</html>