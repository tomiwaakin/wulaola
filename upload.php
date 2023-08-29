<?php
session_start();
$id = $_POST['id'];
$dir = "img/";
$dir_file = $dir.basename($_FILES["imgfile"]["name"]);
$connection = mysqli_connect("localhost","root","","gold");
if($connection){
    $_query = "UPDATE reg SET img = '$dir_file' WHERE id = '$id'";
    $result =  mysqli_query($connection,$_query);
    if($result){
        move_uploaded_file($_FILES["imgfile"]["tmp_name"],$dir_file);
         header("location:dachboard.php");
    }else{
        echo mysqli_error($connection);
    }
}else{
    echo "not successful";
}
?>