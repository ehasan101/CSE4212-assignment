
<?php

include 'config.php';

$r_username = $_POST['username'];
$r_email = $_POST['email'];
$r_phone = $_POST['no'];
$r_pass = $_POST['pass'];
// $r_conpass = $_POST['conpass'];

//echo $r_phone;

$_unamePattern = "/^([a-zA-Z])|([0-9])/";
$_mobilePattern = "/(\+88)?-?01[3-9]\d{8}/";
$_passPattern = "/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%]).{6,20}/";


$dupli_username = mysqli_query($conn, "SELECT * FROM `reg` WHERE username='$r_username'");



if(!preg_match($_unamePattern,$r_username)){
    echo "<script>alert('username is not valid!')</script>";
    echo "<script> location.href='regsis.html' </script>";

}

else if(mysqli_num_rows($dupli_username)>1){
    echo "<script>alert('username is already exists!')</script>";
    echo "<script> location.href='regsis.html' </script>";
}

else if(!preg_match($_mobilePattern,$r_phone)){
    echo "<script>alert('phone number is not valid!')</script>";
    echo "<script> location.href='regsis.html' </script>";

}

else if(!preg_match($_passPattern,$r_pass)){
    echo "<script>alert('Password is not valid!')</script>";
    echo "<script> location.href='regsis.html' </script>";

}



else {

    $insert_query = "INSERT INTO `reg`(`username`,`email`,`phone`,`pass`) VALUES ('$r_username','$r_email', '$r_phone', '$r_pass')";

        if(!mysqli_query($conn, $insert_query)) {
            die("Not insert!");
        }

        else {
            echo "<script>alert('Regsistration successfully Compeleted!')</script>";
            echo "<script> location.href='loginPHP.html' </script>";
        }
}




