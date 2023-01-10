
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/index/main.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
                    <div class="left-first-screen">
                        <h1>Профессиональный кейтеринг в Екатеринбурге</h1>
                        <a href="#oformit-form">Оформить заказ</a>
                    </div>
                    <div class="fotka">
                        <img src="assets/img/index.png" alt="Кейтеринг главная страница">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="secondary-block1">
                <div class="block-text-img flex">
                    <div class="left-block-div">
                        <h2>Еда как искусство</h2>
                        <p>Кейтеринг - это формат выездного ресторана. В условиях современной жизни непросто своими силами организовать банкет на свадьбу, фуршет на дипломатический приём, барбекю на корпоратив, сладкий бар для детского праздника. Услуги кейтеринга сэкономят время и силы. Chalfei Catering готов взять заботы по созданию торжества «под ключ» на себя: заранее рассчитаем стоимость и обсудим банкетное или фуршетное меню для праздника, подберем площадку и обговорим детали.
                            <br><br>Услуги кейтеринга обладают рядом преимуществ по сравнению с банкетом в ресторане или кафе. Вы можете организовать праздник для любого количества гостей и на удобной площадке, скорректировать меню в зависимости от предпочтений и количества гостей. Chalfei catering - это не только вкусные блюда, но и авторская подача. Вам не придётся думать об оформлении торжества, эту задачу кейтеринг также берет на себя. Мы учтём ваши пожелания, продумаем сценарий и оформление праздничных столов.</p>
                    </div>
                    <div>
                        <img src="assets/img/chuvak.png" alt="картинка">
                    </div>
                </div>
            </div>
        </section>
        <section class="background-color">               
            <div class="secondary-block">
                <h3>Форматы мероприятии</h2>
                <div class="elems-format flex">
                    <figure class="img1 elem-format">
                        <a href="banket.php">Банкет</a>
                    </figure>
                    <figure class="img2 elem-format">
                        <a href="furshet.php">Фуршет</a>
                    </figure>
                    <figure class="img3 elem-format">
                        <a href="dostavka.php">Доставка</a>
                    </figure>
                </div>
            </div>
        </section>
        <section>
            <div class="third-block">
                <h4>Хотите, чтобы Ваше мероприятие прошло идеально?</h3>
                <div class="advantages-elems flex">
                    <div>
                        <div class="flex">
                            <img src="assets/img/12.png" alt="картинка1">
                            <p>Детально прорабатываем сценарий. Соблюдаем этикет и традиции. Каждое блюдо будет подано вовремя и в строгой последовательности.</p>
                        </div>
                        <div class="flex">
                            <img src="assets/img/22.png" alt="картинка2">
                            <p>Выездной банкет дает возможность провести его именно там, где удобно Вам.</p>
                        </div>
                    </div>
                    <div>
                        <div class="flex">
                            <img src="assets/img/42.png" alt="картинка1">
                            <p>Официанты и администраторы умеют обслужить каждого гостя, включая VIP. Они всегда безупречно выглядят, тактичны и доброжелательны.</p>
                        </div>
                        <div class="flex">
                            <img src="assets/img/32.png" alt="картинка2">
                            <p>Незабываемые впечатления подарят оформление зала блюд, правильная сервировка и приятная атмосфера.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="background-color">
            <div class="fourth-block" id="oformit-form">
                    <div>
                        <div>
                            <h5>Оставьте заявку на кейтеринг</h5>
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