<?php
    print "This app returns a random funny quote.\n"
        <?php    $link = mysqli_connect($_ENV["DATABASE_SERVICE_NAME"],$_ENV["DATABASE_USER"],$_ENV["DATABASE_PASSWORD"],$_ENV["DATABASE_NAME"]);    if (!$link) {        http_response_code (500);        error_log ("Error: unable to connect to database\n");        die();    }
        
?>
