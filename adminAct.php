<?php

include 'config.php';


// echo $_POST['username'];
// echo $_GET['pass'];

//admin : @dm1N0

$l_username = $_POST['username'];
$l_pass = $_POST['pass'];



$res = mysqli_query($conn, "SELECT * FROM `reg` WHERE username='$l_username' And pass='$l_pass'");


if(mysqli_num_rows($res)){
    session_start();
    $_SESSION['username'] = $l_username;
    echo $_SESSION['username'];
    echo "<script>alert('Assalamulaikum Admin Shaheb!')</script>";

    echo "<script> location.href='controlP.php' </script>";

    echo " <a href='logout.php'> <input type='button' value='LOGOUT' name='Logout'>  </a> <br>";

}

else {
        echo "<script>alert('incorrect password Admin Shaheb!')</script>";
        echo "<script> location.href='adminLogin.html' </script>";
    
}

// ------------------

// $username = "admin";
// $pass = "123";
// session_start();


// if (isset($_SESSION['username'])){
//     echo "<h1> Assalamulaikum... ".$_SESSION['username']."</h1> <br>";
//     echo " <a href='product.php'> <input type='button' value='Product' name='product'> </a> <br> <br>";

//     echo "<script>alert('Assalamulaikum Admin Shaheb!')</script>";
//     // echo "<script> location.href='controlP.php' </script>";
//     echo " <a href='logout.php'> <input type='button' value='LOGOUT' name='Logout'>  </a> <br>";

// }

// else{ 
//     if(isset($_POST['username'])){
//         if ($_POST['username']==$username && $_POST['pass']==$pass){
//             $_SESSION['username'] = $username;
//             echo "<script> location.href='home.php' </script>";
//         }
//         else {
//             echo "<script>alert('incorrect A. Shaheb!')</script>";
//             echo "<script> location.href='loginPHP.html' </script>";
//         }
//     }

//     else { 
//         echo "<script> alert('Dear Not access form URL! :)')</script>";
//         echo "<script> location.href='loginPHP.html' </script>";

//     }
// }


