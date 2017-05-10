<?php

include 'api_interface.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>geogram</title>
</head>
<body>
        <?php
            echo '<pre>';

            print_r(url_shortener::shorten("http://google.com/"));

            echo '</pre>';
        ?>

</body>
</html>
