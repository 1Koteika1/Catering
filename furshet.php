<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="assets/css/furshet/main.css">
    <link rel="stylesheet" href="../css/footer.css">
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
                        <h1>Фуршеты</h1>
                        <a href="#oformit-form">Оформить заказ</a>
                    </div>
                    <div class="fotka">
                        <img src="assets/img/furchet.png" alt="Фуршет">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="secondary-block flex">
                <div class="text-furshet">
                    <h2>Организация банкетов</h2>
                    <p class="furchet-description">В Екатеринбурге в последнее 
                        время довольно популярна.</p>
                    <p class="furchet-description">Это связано с тем, 
                        что подобные мероприятия, как правило, проходят 
                        очень весело и непринужденно, а также позволяют 
                        лучше узнать друг друга и обзавестись новыми 
                        знакомствами.</p>
                    <p class="furchet-description">Для того чтобы организовать 
                        фуршет, необходимо заранее позаботиться о составлении 
                        меню.</p>
                    <p class="furchet-description">В меню могут входить как 
                        холодные закуски, так и горячие блюда.</p>
                    <p class="furchet-description">Также можно включить в него 
                        сладости, фрукты, соки.</p>
                </div>
                <div class="img-block">
                    <img src="assets/img/галерея2.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="background-color">
            <div class="fourth-block" id="oformit-form">
                    <div>
                        <div>
                            <h5>Оставьте заявку на фуршет</h5>
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