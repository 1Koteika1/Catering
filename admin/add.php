<?php
session_start();
require_once '../db2.php';
require_once "addback.php";

$id = $_GET["id"];
$sqlsearch="SELECT * FROM `products` WHERE id='$id'";
$result=$connect->query($sqlsearch);
$product_add = $result->fetch_all(MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/addeditdeletepage.css">
    <title>Добавление</title>
</head>
<body>
    <main class="page__container">
        <section class="page__edit edit">
            <h1>Добавление товара</h1>
            <div class="edit__container">
                <div class="edit__body">
                    <div class="edit__form">
                        <form action="" method="post" class="form" enctype="multipart/form-data">
                            <div class="edit__column">
                                <input type="hidden" name="id" value="<?=$id?>">
                                <label for="title">Название товара:</label>
                                <input type="text" name="name" value="<?=$titleAdd?>" class="form__item">
                            </div>
                            <div class="edit__column">
                                <label for="title">Описание:</label>
                                <textarea name="description" cols="30" rows="10"><?=$dicsAdd?></textarea>
                            </div>    
                            <div class="edit__column">
                                <label for="title">Цена:</label>
                                <input type="text" name="price" value="<?=$priceAdd?>" class="form__item">
                            </div>   
                            <div class="edit__column">
                                <label for="title">Фото:</label>
                                <div class="edit_img">
                                    <img width="200px" height="200px" src="../assets/img/<?=$image?>" alt="">
                                    <!-- <input class="upload__photo" value="Выбрать" type="button">  -->
                                    <input class="btn-addimg" type="file" name="image">
                                    <input class="form_button" type="submit" name="addButton" value="Добавить">
                                </div>
                            </div>
                        </form>
                        <a href="adminka.php" class="btn-back">Назад</a>
                    </div>
                </div>
            </div>
        </section>
    </main>      
</body>
</html>