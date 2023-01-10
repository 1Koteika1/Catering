<?php
session_start();
require_once '../db2.php';

$sql_products="SELECT * FROM `products`";
$result=$connect->query($sql_products);
$product = $result->fetch_all(MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/addeditdeletepage.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Админ панель Севиче Кейтеринг</title>
</head>

<body>
    <header>
        <div class="header">
            <h1>Административные возможности</h1>
            <a href="../index.php">Главная страницы</a>
        </div>
    </header>  
    <main class="page_container">
        <section class="container_addform">
            <form action = "add.php" method = "post">
                <input class="form_button" type="submit" name="addButton1" value="Добавить товар">
            </form> 
        </section>
        <section class="page__product product">
            <div class="product__container">
                <?php
                    foreach ($product as $value){
                        $sql_products="SELECT * FROM `products` WHERE `name` AND `image`";
                        $result=$connect->query($sql_products);                            
                        $product = $result->fetch_all(MYSQLI_ASSOC);
                    ?>
                    <div class="product__column">
                        <div class="product__body">
                            <?php
                            ?>
                            <h2 class="product__body-title"><?=$value['name']?></h1>
                            <img src="../assets/img/<?=$value["image"]?>" alt="">
                        </div>
                        <form action="delete.php" method="post" class="details__form">
                            <span class="details__price"><?=$value["description"]?></span>
                            <span class="details__price"><?=$value["price"]?> ₽</span>
                            <input type="hidden" name="deleteItem" value="<?=$value["id"]?>">
                            <div class="btn-editdelete">
                                <a class="form__button" href="edit.php?id=<?=$value["id"]?>">Редактировать</a>
                                <input class="form__button" type="submit" name="delete__button" value="Удалить">
                            </div>
                        </form>
                    </div>
                    <?php
                    }
                    ?>
            </div>
        </section>
    </main> 
</body>
</html>