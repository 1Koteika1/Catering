<?php
session_start();
require_once '../db2.php';

if(isset($_POST['edit__button'])){
    $id = $_GET["id"];
    $titleEdit = $_POST['name'];
    $dicsEdit =  $_POST['description'];
    $priceEdit =  $_POST['price'];
    $uploaddir = '../assets/img/';
    $uploadfile = basename($_FILES['image']['name']);
    //echo $uploadfile;
    $downloadimage = move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
    $sql = "UPDATE `products` SET `name` = '$titleEdit', `description` = '$dicsEdit', `price` = '$priceEdit', `image` = '$uploadfile' WHERE `products`.`id` = $id";  
    $result = $connect->query($sql);
    if($result = $connect->query($sql)){
        echo "<meta http-equiv='refresh' content='0; adminka.php'>";
    }  
}     
?>   