<?php
session_start();
require_once '../db2.php';

if(isset($_POST['delete__button'])){
    $delete = $_POST['deleteItem'];
    $sql = "DELETE FROM `products` WHERE `id` = '$delete'"; 
    $result = $connect->query($sql);
    if($result = $connect->query($sql)){
        echo "<meta http-equiv='refresh' content='0; adminka.php'>";
    }
}
?>
