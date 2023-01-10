<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/banket/main.css">
    
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
                        <h1>Банкеты</h1>
                        <a href="#oformit-form">Оформить заказ</a>
                    </div>
                    <div class="fotka">
                        <img src="assets/img/banket1.png" alt="Банкет">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="secondary-block flex">
                <div class="text-banket">
                    <h2>Организация банкетов</h2>
                    <p class="banket-description">Это не только приготовление 
                        блюд и их подача, но и создание атмосферы праздника.</p>
                    <p class="banket-description">Она должна быть интересной, 
                        красивой, стильной и запоминающейся.</p>
                    <p class="banket-description">Не секрет, что в современном 
                        мире люди часто планируют отметить какое-либо событие.</p>
                    <p class="banket-description">Это может быть свадьба, 
                        юбилей, корпоратив, встреча выпускников и т. д.</p>
                    <p class="banket-description">Но как сделать так, чтобы 
                        это событие запомнилось надолго?</p>
                    <p class="banket-description">Если вы хотите, чтобы ваше 
                        торжество было по-настоящему ярким, то вам стоит 
                        обратиться в нашу компанию.</p>
                </div>
                <div class="img-block">
                    <img src="assets/img/галерея1.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="background-color">
            <div class="fourth-block" id="oformit-form">
                    <div>
                        <div>
                            <h5>Оставьте заявку на банкет</h4>
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