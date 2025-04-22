<?php
require_once('../../config/sparrow.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $currentLocation ?> </title>

    <!-- Include CSS -->
    <link rel="stylesheet" href="<?= GLOBAL_PATH . '/css/sidenavbar.css' ?>">
    <link rel="stylesheet" href="<?= MODULES . '/dashboard/css/dashboard.css' ?>">
</head>

<body>
    <div id="sidenavbar"></div>
    
    <main>
        <section id="stats-dash"></section>

    </main>

    <!-- Include jQuery -->
    <script src="<?= PACKAGES . '/jquery/jquery.js' ?>"></script>

    <!-- Include global JavaScript -->
    <script src="<?= GLOBAL_PATH . '/js/global.js' ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Load Side Nav Bar
            $.ajax({
                type: 'POST',
                url: '<?= GLOBAL_PATH . '/components/sidenavbar.php' ?>',
                data: {
                    getRewrittenUrl: '<?= $getRewrittenUrl ?>'
                },
                success: function(response) {
                    $('#sidenavbar').html(response);

                    // After loading sidenavbar.php content, initialize sidebar functionality
                    initializeSidebar();
                },
                error: function(xhr, status, error) {
                    console.error('Error loading side navbar:', error);
                }
            });

            $.ajax({
                type: 'POST',
                url: '<?= MODULES . '/dashboard/components/stats_dash.php' ?>',
                success: function(response) {
                    $('#stats-dash').html(response);
                },
                error: function(xhr, status, error) {
                    console.error('Error loading Top Section:', error);
                }
            });
        });
    </script>
</body>
</html>