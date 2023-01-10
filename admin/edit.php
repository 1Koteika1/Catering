<?php
session_start();
require_once '../db2.php';
require_once "editback.php";

$id = $_GET["id"];
$sqlsearch="SELECT * FROM `products` WHERE id=$id";
$result=$connect->query($sqlsearch);
$product_edit = $result->fetch_all(MYSQLI_ASSOC);
if($result = $connect->query($sqlsearch)){
    foreach($product_edit as $row){
        $name = $row["name"];
        $dics = $row["description"];
        $price = $row["price"];
        $image = $row["image"];
    }
}   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/addeditdeletepage.css">
    <title>Редактирование</title>
</head>
<body>
    <main class="page __container">
        <section class="page__edit edit">
        <h1>Редактирование товара</h1>
            <div class="edit__container">
                <div class="edit__body">
                    <div class="edit__form">
                        <form action="" method="post" class="form" enctype="multipart/form-data">
                            <div class="edit1__column">
                                <input type="hidden" name="id" value="<?=$id?>">
                                <label for="title">Название товара:</label>
                                <input type="text" name="name" value="<?=$name?>" class="form__item">
                            </div>
                            <div class="edit1__column">
                                <label for="title">Описание:</label>
                                <textarea name="description" cols="30" rows="10"><?=$dics?></textarea>
                            </div>      
                            <div class="edit1__column">
                                <label for="title">Стоимость:</label>
                                <input type="text" name="price" value="<?=$price?>" class="form__item">
                            </div>
                            <div class="edit1__column">
                                <label for="title">Фото:</label>
                                <div class="edit_img">
                                    <img width="200px" height="200px" src="../assets/img/<?=$image?>" alt="">
                                    <!-- <input class="upload__photo" value="Выбрать" type="button">  -->
                                    <input type="file" name="image">
                                    <input class="form_button" type="submit" name="edit__button" value="Изменить">
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