<?php
    
    include 'config.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];

    // print_r( $image);

    $imageLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $image_des = "image/".$imageName;

    move_uploaded_file($imageLocation,$image_des);

    $updateQuery = "UPDATE `crud` SET `name`='$name', `price` = '$price', `image` ='$image_des' WHERE id='$id'";

    if(mysqli_query($conn,$updateQuery)){
        echo "<script>alert('Updated !!!')</script>";
        echo "<script>location.href='controlP.php'</script>";
    }

    else{
        echo "<script>alert('Not updated!')</script>";
    }