<?php
 
    include 'config.php';

    $id=$_GET['id'];
    $deleteQuery = "DELETE FROM `crud` WHERE id='$id'" ;
    mysqli_query($conn, $deleteQuery);
    header('location:controlP.php');

?>