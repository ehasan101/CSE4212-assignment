<?php

session_start();

if (isset($_SESSION['username'])){
    session_destroy();
    echo "<script> location.href='loginPHP.html' </script>";
}

else{ //stop url access
    echo "<script> location.href='loginPHP.html' </script>";
}


