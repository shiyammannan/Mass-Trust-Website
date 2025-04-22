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
    <meta property="og:url" content="<?= SEO_URL ?>">
    <meta property="og:title" content="Leading Social Activities Organization in Pondicherry - Mira Alagarsamy Seva Sangam (MASS)">
    <meta property="og:description" content="Join Mira Alagarsamy Seva Sangam (MASS) in making a difference in Pondicherry through our dedicated social activities. Together, we can build a better community.">
    <meta property="og:image" content="<?= SEO_URL ?>wp-content/themes/social-theme/images/ogimg.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta name="description" content="Join Mira Alagarsamy Seva Sangam (MASS) in making a difference in Pondicherry through our dedicated social activities. Together, we can build a better community." />
    <link rel="canonical" href="<?= SEO_URL ?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Leading Social Activities Organization in Pondicherry - Mira Alagarsamy Seva Sangam (MASS)" />
    <meta property="og:description" content="Join Mira Alagarsamy Seva Sangam (MASS) in making a difference in Pondicherry through our dedicated social activities. Together, we can build a better community." />
    <meta property="og:url" content="<?= SEO_URL ?>" />
    <meta property="og:site_name" content="Mira Alagarsamy Seva Sangam (MASS)" />
    <meta property="article:modified_time" content="2024-01-22T06:12:06+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />

    <!-- title -->
    <title>Leading Social Activities Organization in Pondicherry - Mira Alagarsamy Seva Sangam (MASS)</title>



    <!-- CSS -->
     <link rel="stylesheet" href="<?= GLOBAL_PATH . '/css/style.css'?>">
     <link rel="stylesheet" href="<?= MODULES . '/home/css/header_rectangle.css'?>">
     <link rel="stylesheet" href="<?= MODULES . '/home/css/image_container_text.css'?>">
     <link rel="stylesheet" href="<?= MODULES . '/home/css/image_container.css'?>">
     <link rel="stylesheet" href="<?= MODULES . '/home/css/gallery_container.css'?>">
     <!-- <link rel="stylesheet" href="<?= MODULES . '/home/css/carousel_container.css'?>"> -->
     <link rel="stylesheet" href="<?= MODULES . '/home/css/document_file.css'?>">

</head>

<body>
<header class="navbar" id="navbar"></header>
    <main>
        <div id="header_rectangle"></div>
        <div id="image_container_text"></div>
        <div id="image_container"></div>
        <div id="gallery_text"></div>
        <div id="gallery_container"></div>
        <div id="carousel_text"></div>
        <!-- <div id="carousel_container"></div> -->
        <div id="document_file"></div>
    </main>
    <footer>
    <div id="footer"></div>
    </footer>

    <!-- Include jQuery -->
    
    <script src="<?= PACKAGES . '/jquery/jquery.js' ?>"></script>
    <script src="<?= GLOBAL_PATH . '/js/global.js' ?>"></script>
    <script src="<?= MODULES . '/home/js/header_rectangle.js' ?>"></script>
    <!-- <script src="<?= MODULES . '/home/js/document_file.js' ?>"></script> -->
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
            url: '<?= MODULES . '/home/components/header_rectangle.php' ?>',

            success: function(response) {
                $('#header_rectangle').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
    $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/home/components/image_container_text.php' ?>',

            success: function(response) {
                $('#image_container_text').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
    $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/home/components/image_container.php' ?>',

            success: function(response) {
                $('#image_container').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/home/components/gallery_text.php' ?>',

            success: function(response) {
                $('#gallery_text').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/home/components/gallery_container.php' ?>',

            success: function(response) {
                $('#gallery_container').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/home/components/carousel_text.php' ?>',

            success: function(response) {
                $('#carousel_text').html(response);
                
            },
            error: function(xhr, status, error) {
                console.error('Error loading top navbar:', error);
         }
         });
        //  $.ajax({
        //     type: 'POST',
        //     url: '<?= MODULES . '/home/components/carousel_container.php' ?>',

        //     success: function(response) {
        //         $('#carousel_container').html(response);
                
        //     },
        //     error: function(xhr, status, error) {
        //         console.error('Error loading top navbar:', error);
        //  }
        //  });
         $.ajax({
            type: 'POST',
            url: '<?= MODULES . '/home/components/document_file.php' ?>',

            success: function(response) {
                $('#document_file').html(response);
                
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