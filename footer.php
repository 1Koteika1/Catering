<link rel="stylesheet" href="assets/css/footer.css">
        <div class="footer flex" id="footer">
            <div>
                <a href="index.html"><img src="assets/img/Logo.svg" alt="Логотип"></a>
            </div>
            <div>
                <nav>
                    <ul class="menu-footer flex">
                        <li><a>Услуги</a>
                            <ul id="uslugi-footer" class="flex">
                                <li><a href="assets/pages/banket.html">Банкет</a></li>
                                <li><a href="assets/pages/furshet.html">Фуршет</a></li>
                            </ul>
                        </li>
                        <li><a href="assets/pages/dostavka.html">Доставка</a></li>
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
            <div class="about-us">
                <p>Севиче Кейтеринг<br> в Екатерингбурге</p>
                <p>Работаем ежедневно: с 9:00 до 18:00</p>
                <p>8 (800) 555-35-35</p>
            </div>
            <div>
                <a href="#oformit-form" class="btn-zvonok-footer">Заказать звонок</a>
            </div>
        </div>