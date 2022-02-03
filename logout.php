<?php     
    session_start();
    session_destroy();
      
    header("Location: http://localhost/php-user-authentication/index.php")
;?>