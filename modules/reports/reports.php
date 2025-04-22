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
    <meta property="og:url" content="<?= SEO_URL ?>/reports">
    <meta property="og:title" content="Reports - Mira Alagarsamy Seva Sangam (MASS)">
    <meta property="og:description" content="Stay updated with the latest reports from Mira Alagarsamy Seva Sangam (MASS). Explore our detailed documentation of social activities, events, and community initiatives that make a positive impact in Pondicherry.">
    <meta property="og:image" content="<?= SEO_URL ?>/wp-content/themes/social-theme/images/reports.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta name="description" content="Stay updated with the latest reports from Mira Alagarsamy Seva Sangam (MASS). Explore our detailed documentation of social activities, events, and community initiatives that make a positive impact in Pondicherry." />
    <link rel="canonical" href="<?= SEO_URL ?>/reports" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Reports - Mira Alagarsamy Seva Sangam (MASS)" />
    <meta property="og:description" content="Stay updated with the latest reports from Mira Alagarsamy Seva Sangam (MASS). Explore our detailed documentation of social activities, events, and community initiatives that make a positive impact in Pondicherry." />
    <meta property="og:url" content="<?= SEO_URL ?>/reports" />
    <meta property="og:site_name" content="Mira Alagarsamy Seva Sangam (MASS)" />
    <meta property="article:modified_time" content="2024-01-22T06:12:06+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />

    <!-- title -->
    <title>Reports - Mira Alagarsamy Seva Sangam (MASS)</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= GLOBAL_PATH . '/css/style.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/reports/css/document_heading.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/reports/css/documents_animation.css'?>">
    <link rel="stylesheet" href="<?= MODULES . '/reports/css/documents_card_components.css'?>">
    
</head>

<body>
<header class="navbar" id="navbar"></header>
    <main>
    <div id="document_heading_rectangle"></div>
    <div id="documents_animation_container"></div>
    <div id="documents_card_components"></div>
        
    </main>
    <footer>
    <div id="footer"></div>
    </footer>

    <!-- Include jQuery -->
    <script src="<?= PACKAGES . '/jquery/jquery.js' ?>"></script>
    <script src="<?= GLOBAL_PATH . '/js/global.js' ?>"></script>
    <script src="<?= MODULES . '/reports/js/documents_animation.js' ?>"></script>
    <script src="<?= MODULES . '/reports/js/documents_card_components.js' ?>"></script>
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
            url: '<?= MODULES . '/reports/components/document_heading_rectangle.php' ?>',

            success: function(response) {
                $('#document_heading_rectangle').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
    $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/reports/components/documents_animation_container.php' ?>',

            success: function(response) {
                $('#documents_animation_container').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
    $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/reports/components/documents_cards_components.php' ?>',

            success: function(response) {
                $('#documents_card_components').html(response);
                
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