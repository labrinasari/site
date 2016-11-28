<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>InfoSet</title>
        <link rel="shortcut icon" href="img/ty.png" >
        <link rel="stylesheet" href="css/demo.css">
        <link rel="stylesheet" href="css/sidebar-collapse.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script src="https://use.fontawesome.com/ab34a7299b.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <aside class="sidebar-left-collapse">
            <img src="img/ty.png">
            <div class="sidebar-links">
                <?php
                include "menu.php";
                ?>
            </div>
        </aside>
        <div class="main-content">
            <?php
            $pg = $_GET["pg"];
            if (!empty($pg)) {
                include $pg . '.php';
            } else {
                include 'home.php';
            }
            ?>
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>

            $(function () {

                var links = $('.sidebar-links > div');

                links.on('click', function () {

                    links.removeClass('selected');
                    $(this).addClass('selected');

                });
            });

        </script>

    </body>

</html>
