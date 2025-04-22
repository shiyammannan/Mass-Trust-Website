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
    <meta property="og:url" content="<?= SEO_URL ?>/our-journey">
    <meta property="og:title" content="Our Journey - Mira Alagarsamy Seva Sangam (MASS)">
    <meta property="og:description" content="Discover the inspiring journey of Mira Alagarsamy Seva Sangam (MASS). Learn about our milestones, achievements, and ongoing efforts to create a positive impact in Pondicherry through our social activities.">
    <meta property="og:image" content="<?= SEO_URL ?>/wp-content/themes/social-theme/images/our-journey.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta name="description" content="Discover the inspiring journey of Mira Alagarsamy Seva Sangam (MASS). Learn about our milestones, achievements, and ongoing efforts to create a positive impact in Pondicherry through our social activities." />
    <link rel="canonical" href="<?= SEO_URL ?>/our-journey" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Our Journey - Mira Alagarsamy Seva Sangam (MASS)" />
    <meta property="og:description" content="Discover the inspiring journey of Mira Alagarsamy Seva Sangam (MASS). Learn about our milestones, achievements, and ongoing efforts to create a positive impact in Pondicherry through our social activities." />
    <meta property="og:url" content="<?= SEO_URL ?>/our-journey" />
    <meta property="og:site_name" content="Mira Alagarsamy Seva Sangam (MASS)" />
    <meta property="article:modified_time" content="2024-01-22T06:12:06+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />

    <!-- title -->
    <title>Our Journey - Mira Alagarsamy Seva Sangam (MASS)</title>





    <!-- CSS -->
    <link rel="stylesheet" href="<?= GLOBAL_PATH . '/css/style.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/journey/css/journey_heading.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/journey/css/journey_card_details.css'?>">




</head>

<body>
<header class="navbar" id="navbar"></header>
    <main>
    <div id="journey_heading_rectangle"></div>
    <div id="journey_card_details"></div>
    </main>
    <footer>
    <div id="footer"></div>
    </footer>

    <!-- Include jQuery -->
    <script src="<?= PACKAGES . '/jquery/jquery.js' ?>"></script>
    <script src="<?= GLOBAL_PATH . '/js/global.js' ?>"></script>
    <script src="<?= MODULES . '/journey/js/foot.js' ?>"></script>
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
            url: '<?= MODULES . '/journey/components/journey_heading_rectangle.php' ?>',

            success: function(response) {
                $('#journey_heading_rectangle').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/journey/components/journey_card_details.php' ?>',

            success: function(response) {
                $('#journey_card_details').html(response);
                
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