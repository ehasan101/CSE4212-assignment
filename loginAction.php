<?php

include 'config.php';


// echo $_POST['username'];
// echo $_GET['pass'];

$l_username = $_POST['username'];
$l_pass = $_POST['pass'];



$res = mysqli_query($conn, "SELECT * FROM `reg` WHERE username='$l_username' And pass='$l_pass'");


if(mysqli_num_rows($res)){
    session_start();
    $_SESSION['username'] = $l_username;
    echo $_SESSION['username'];
    echo "<script> location.href='Bhome.php' </script>";

}

else {
    echo "<script>alert('incorrect username & password!')</script>";
    echo "<script> location.href='loginPHP.html' </script>";
}

// ------------------


