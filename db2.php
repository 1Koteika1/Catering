<?php

define("HOST", "localhost:3307");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "cateringdb");

$connect = new mysqli(HOST,USER,PASSWORD,DATABASE);

if ($connect->connect_errno) {
die('Ошибка соединения: ' . $connect->connect_errno);
}

?>