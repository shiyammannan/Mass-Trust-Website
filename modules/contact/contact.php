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
    <meta property="og:url" content="<?= SEO_URL ?>/contact-us">
    <meta property="og:title" content="Contact Us - Mira Alagarsamy Seva Sangam (MASS)">
    <meta property="og:description" content="Contact Mira Alagarsamy Seva Sangam (MASS), Pondicherry, for any inquiries or to get involved. Our dedicated team is here to assist you with information about our social activities, events, and volunteering opportunities.">
    <meta property="og:image" content="<?= SEO_URL ?>/wp-content/themes/social-theme/images/contact.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta name="description" content="Contact Mira Alagarsamy Seva Sangam (MASS), Pondicherry, for any inquiries or to get involved. Our dedicated team is here to assist you with information about our social activities, events, and volunteering opportunities." />
    <link rel="canonical" href="<?= SEO_URL ?>/contact-us" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact Us - Mira Alagarsamy Seva Sangam (MASS)" />
    <meta property="og:description" content="Contact Mira Alagarsamy Seva Sangam (MASS), Pondicherry, for any inquiries or to get involved. Our dedicated team is here to assist you with information about our social activities, events, and volunteering opportunities." />
    <meta property="og:url" content="<?= SEO_URL ?>/contact-us" />
    <meta property="og:site_name" content="Mira Alagarsamy Seva Sangam (MASS)" />
    <meta property="article:modified_time" content="2024-01-22T06:12:06+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />

    <!-- title -->
    <title>Contact Us - Mira Alagarsamy Seva Sangam (MASS)</title>








    <!-- CSS -->
    <link rel="stylesheet" href="<?= GLOBAL_PATH . '/css/style.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/contact/css/contactus_components.css'?>">
     <link rel="stylesheet" href="<?= MODULES . '/contact/css/contactus_map_container.css'?>">


</head>

<body>
<header class="navbar" id="navbar"></header>
    <main>
    <div id="contactus_components"></div>
    <div id="contactus_map_container"></div>
    </main>
    <footer>    <div id="footer"></div>    </footer>

    <!-- Include jQuery -->
    <script src="<?= PACKAGES . '/jquery/jquery.js' ?>"></script>
    <script src="<?= GLOBAL_PATH . '/js/global.js' ?>"></script>

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
            url: '<?= MODULES . '/contact/components/contactus_components.php' ?>',

            success: function(response) {
                $('#contactus_components').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
    $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/contact/components/contactus_map_container.php' ?>',

            success: function(response) {
                $('#contactus_map_container').html(response);
                
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