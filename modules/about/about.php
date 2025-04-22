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
    <meta property="og:url" content="<?= SEO_URL ?>/about">
    <meta property="og:title" content="About Us - Mira Alagarsamy Seva Sangam (MASS)">
    <meta property="og:description" content="Learn more about Mira Alagarsamy Seva Sangam (MASS), Pondicherry's leading organization dedicated to social activities and community development. Discover our mission, vision, and values.">
    <meta property="og:image" content="<?= SEO_URL ?>/wp-content/themes/social-theme/images/ogimg.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta name="description" content="Learn more about Mira Alagarsamy Seva Sangam (MASS), Pondicherry's leading organization dedicated to social activities and community development. Discover our mission, vision, and values." />
    <link rel="canonical" href="<?= SEO_URL ?>/about" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="About Us - Mira Alagarsamy Seva Sangam (MASS)" />
    <meta property="og:description" content="Learn more about Mira Alagarsamy Seva Sangam (MASS), Pondicherry's leading organization dedicated to social activities and community development. Discover our mission, vision, and values." />
    <meta property="og:url" content="<?= SEO_URL ?>/about" />
    <meta property="og:site_name" content="Mira Alagarsamy Seva Sangam (MASS)" />
    <meta property="article:modified_time" content="2024-01-22T06:12:06+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />

    <!-- title -->
    <title>About Us - Mira Alagarsamy Seva Sangam (MASS)</title>




    <!-- CSS -->
    <link rel="stylesheet" href="<?= GLOBAL_PATH . '/css/style.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/about/css/aboutus_header_rectangle.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/about/css/coordinator_text.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/about/css/coordinator_container.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/about/css/gif_container.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/about/css/lets_go_deep.css'?>">




</head>

<body>
<header class="navbar" id="navbar"></header>
    <main>
    <div id="aboutus_header_rectangle"></div>
    <div id="our_coordinator_text"></div>
    <div id="aboutus_coordinator_container"></div>
    <div id="aboutus_gif_container"></div>
    <div id="lets_go_deep_container"></div>
    </main>
    <footer>
    <div id="footer"></div>
    </footer>

    <!-- Include jQuery -->
    <script src="<?= PACKAGES . '/jquery/jquery.js' ?>"></script>
    <script src="<?= GLOBAL_PATH . '/js/global.js' ?>"></script>
    <script src="<?= MODULES . '/about/js/coordinator_text.js' ?>"></script>
    <script src="<?= MODULES . '/about/js/coordinator_container.js' ?>"></script>
    <script src="<?= MODULES . '/about/js/gif_container.js' ?>"></script>

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
            url: '<?= MODULES . '/about/components/aboutus_header_rectangle.php' ?>',

            success: function(response) {
                $('#aboutus_header_rectangle').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/about/components/our_coordinator_text.php' ?>',

            success: function(response) {
                $('#our_coordinator_text').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/about/components/aboutus_coordinator_container.php' ?>',

            success: function(response) {
                $('#aboutus_coordinator_container').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/about/components/aboutus_gif_container.php' ?>',

            success: function(response) {
                $('#aboutus_gif_container').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/about/components/lets_go_deep_container.php' ?>',

            success: function(response) {
                $('#lets_go_deep_container').html(response);
                
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