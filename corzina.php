<?php
    require_once "db.php";
    $stmt = $pdo->query("SELECT corzina.id, image, name, description, price FROM corzina JOIN products ON corzina.id_product = products.id;");
    $corzina = $stmt->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/corzina.css">
    <title>Севиче Кейтеринг - Корзина</title>
</head>

<body>
    <header>
        <?php include "header.php" ?>
    </header>  
    <main>
        <section>
            <div class="first-block">
                <h1>Корзина</h1>
                <div class="product-wrapper">
                    <div class="product-block">
                        <?php foreach($corzina as $cateringdb): ?>
                        <div class="product">
                            <div class="product-image"><img src="assets/img/<?= $cateringdb['image'] ?>" alt=""></div>
                            <div class="product-content">
                                <div class="product-title"><p><?= $cateringdb['name'] ?></p></div>
                                <div class="product-description"><?= $cateringdb['description'] ?></div>
                                <div class="flex price-delete">
                                    <p class="product-price">Цена: <?=$cateringdb['price']?> ₽<p>
                                    <a href="corzina_delete.php?id=<?= $cateringdb['id'] ?>">Удалить</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include "footer.php" ?>
    </footer>
</body>
</html>