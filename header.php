<?php
session_start();
require_once 'db.php';
?>
    <link rel="stylesheet" href="assets/css/header.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


    <header>
        <div class="head flex">
            <div>
                <a href="index.php"><img src="./assets/img/Logo.svg" alt="Логотип"></a>
            </div>
            <div>
                <nav>
                    <ul class="menu-header flex">
                        <li><a>Услуги</a>
                            <ul id="uslugi" class="flex">
                                <li><a href="banket.php">Банкет</a></li>
                                <li><a href="furshet.php">Фуршет</a></li>
                            </ul>
                        </li>
                        <li><a href="dostavka.php">Доставка</a></li>
                        <li><a href="#footer">Контакты</a></li>
                        <li>
                            <?php if($_SESSION["user"]): ?>
                            <a href="corzina.php">Корзина</a>
                            <?php else: ?>
                                <?php endif; ?>
                        </li>
                        <li>
                            <?php if($_SESSION["user"]["role-id"]==1): ?>
                            <a href="admin/adminka.php">Админ панель</a>
                            <?php else: ?>
                                <?php endif; ?>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="login-btn flex">
                <div>
                    <?php if($_SESSION["user"]): ?>
                        <p class="profile"><?= $_SESSION['user'] ?></p>
                        <a href="logout.php">Выход</a>
                        <?php else: ?>
                            <a href="auth.php" class="flex"><img src="./assets/img/user.svg" width="25" alt="Войти">Войти</a>
                            <?php endif; ?>
                </div>
                <div>
                    <a href="#oformit-form" class="btn-zvonok">Заказать звонок</a>
                </div>
            </div>
        </div>
        
    </header>  