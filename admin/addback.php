<?php
session_start();
require_once '../db2.php';
if (isset($_POST['addButton'])) 
{
    $id = $_GET["id"];
    $titleAdd = $_POST['name'];
    $priceAdd =  $_POST['price'];
    $dicsAdd = $_POST['description'];
    $AddDir = '../assets/img/';
    $Addfile = basename($_FILES['image']['name']);
    //echo $uploadfile;
    $downloadimage = move_uploaded_file($_FILES['image']['tmp_name'], $Addfile);
    $sql = "INSERT INTO `products` (`name`, `description`, `price`, `image`) VALUES ('$titleAdd', '$dicsAdd', '$priceAdd','$Addfile')";  
    $result = $connect->query($sql);
    // if($result = $connect->query($sql)){
        // echo "<meta http-equiv='refresh' content='0; adminka.php'>";
    // }  
}
?>