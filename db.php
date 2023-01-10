<?php
    // Подключение к ДБ
    $pdo = new PDO('mysql:host=localhost;port=3307;dbname=cateringdb;charset=utf8', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => 
    PDO::FETCH_ASSOC]);
?>