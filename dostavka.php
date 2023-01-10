<?php
session_start();
include 'main.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/dostavka/main.css">
    <title>Севиче Кейтеринг</title>
</head>

<body>
    <header>
        <?php include "header.php" ?>
    </header>  
    <main>
        <section>
            <div class="first-block">
                <div class="container-first-block flex">
                    <div>
                        <h1>Доставка</h1>
                        <a href="#oformit-form">Оформить заказ</a>
                    </div>
                    <div class="fotka">
                        <img src="assets/img/banket.png" alt="Доставка">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="secondary-block">
                <h2>Каталог</h2>
                <div class="product-wrapper">
                    <div class="product-block">
                        <?php foreach($out as $row): ?>
                        <div class="product">
                            <div class="product-image"><img src="assets/img/<?=$row['image'];?>" alt=""></div>
                            <div class="product-content">
                                <div class="product-title"><p><?=$row['name']; ?></p></div>
                                <div class="product-description"><?=$row['description']?></div>
                                <div class="flex price-delete">
                                    <p class="product-price">Цена: <?=$row['price']?> ₽</p>
                                    <a href="corzina_add.php?id=<?= $row['id'] ?>">В корзину</a>
                                </div>
                                
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="background-color">
            <div class="fourth-block" id="oformit-form">
                    <div>
                        <div>
                            <h5>Обсудить индивидуальное меню</h5>
                        </div>
                        <form action="applications.php" method="post">
                            <div>
                                <label>Ваше имя</label>
                                <input type="text" name="name">
                            </div>
                            <div>
                                <label>Ваш телефон</label>
                                <input type="text" name="phone">
                            </div>
                            <div>
                                <input type="submit" name="btn-applications" class="btn-form">
                            </div>
                        </form>
                    </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include "footer.php" ?>
    </footer>
</body>
</html>