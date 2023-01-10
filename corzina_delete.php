<?php
    require_once "rb.php";
    R::setup( 'mysql:host=127.0.0.1;port=3307;dbname=cateringdb','root', '' );

    $id = $_GET['id'];
    $corzina = R::load('corzina', $id);

    R::trash($corzina);

    header("Location: corzina.php");
?>