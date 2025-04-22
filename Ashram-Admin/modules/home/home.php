<?php 
require_once('../../config/sparrow.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= GLOBAL_PATH . '/css/sidenavbar.css' ?>">
    <title>Document</title>
</head>
<body>
<div id="sidenavbar"></div>
    <main>
        <section id="form">
        
        </section>
    </main>
    <script src="<?= PACKAGES.'/jquery/jquery.js' ?>"></script>
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
            url: '<?= MODULES . '/firm_profile/components/form.php' ?>',
            type: 'POST',
            success: function(response) {
                response=JSON.parse(response);
                   console.log(response);
                   if (response.status=='success') {
                        console.log("OK!");
                        $("#username").text(response.username);
                        $("#pass").val(response.pass);
                    }
                    else{
                        console.log("NOT OK!!")
                    }
            },
            error: function(xhr, status, error) {
                alert('Error form: ' + error);
            }
        });
        });
    </script>
</body>
</html>

