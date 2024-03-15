    <?php require 'modules/indexHeader.php' ?>

    <main class="main">

        <section class="hero">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="hero__box d-flex flex-column align-items-center py-5 px-3">
                            <h1 class="hero__title fw-bold display-6">Быстрый ремонт смартфонов, ноутбуков и планшетов
                            </h1>
                            <p class="hero__text fw-bold pb-2">Ремонт от 30 минут!</p>
                            <div class="btn__box pb-">
                                <a href="#" class="btn btn-outline-dark">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="consultation">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col">
                        <h2 class="consultation__title  fw-bold h1 mb-4">Бесплатная <br>консультация</h2>
                        <p class="consultation__text  h5">Менеджер перезвонит в течение 5 минут</p>
                        <form action="#"
                            class="consultation__form d-flex justify-content-center flex-column align-items-center mt-4"
                            method="post">
                            <input type="text" class="consultation__form-input" placeholder="Ваше имя*" required>
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="consultation__form-input" placeholder="Ваш контактный телефон*"
                                required>
                            <input type="email" class="consultation__form-input" placeholder="Ваша почта*" required>
                            <button class="btn btn-outline-dark mt-4">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="advantages" id="advantages">
            <div class="container">
                <div class="advantages__inner d-flex flex-column align-items-center">

                    <div class="advantages__row row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <p class="advantages__text fw-bold h3">Ремонт любой сложности</p>
                            <p class="advantages__subtext">Ремонт попавших в жидкость и не включающихся устройств
                                (смартфоны, планшеты, ноутбуки).</p>
                        </div>
                        <div class="col-md-4">
                            <img src="assets/img/apple-watch.webp" alt="iphone" class="advantages__img">
                        </div>
                    </div>

                    <div class="advantages__row row align-items-center justify-content-center my-5">
                        <div class="col-md-8">
                            <p class="advantages__text fw-bold h3">Греется ноутбук?</p>
                            <p class="advantages__subtext">Чистка системы охлаждения. Замена всех термопрокладок и
                                термопасты. Только качественные материалы. Оставьте заявку на сайте и менеджер свяжется
                                с вами.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="assets/img/macbook.webp" alt="iphone" class="advantages__img">
                        </div>
                    </div>

                    <div class="advantages__row row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <p class="advantages__text fw-bold h3">Бесплатная диагностика</p>
                            <p class="advantages__subtext">Сделаем полную диагностику в день приема.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="assets/img/iphone.webp" alt="iphone" class="advantages__img">
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </section>

        <section class="about py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="fw-bold text-center mb-3 h3">Работаем всегда</h2>
                        <p class="text-center">Наш сервис работает в выходные и праздничные дни с 9-20 часов.</p>
                    </div>
                    <div class="col-md-4">
                        <h2 class="fw-bold text-center mb-3 h3">Экономия времени</h2>
                        <p class="text-center">Делаем нашу работу в <br>кратчайшие сроки и всегда вовремя.</p>
                    </div>
                    <div class="col-md-4">
                        <h2 class="fw-bold text-center mb-3 h3">Профессионалы</h2>
                        <p class="text-center">У нас работают инженеры с высокой квалификацией и огромным опытом работы.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="categories py-5" id="categories">
            <div class="container">
                <h3 class="fw-bold text-center display-5">Категории</h3>
                <div class="row">
                    <div class="col-md-4 d-flex flex-column align-items-center">
                        <img src="assets/img/priceinfo1.webp" alt="categoriesimg" class="categories__img">
                        <p class="fw-bold text-center h4 mt-3">Ремонт Iphone</p>
                        <p class="text-center mt-3 text-secondary">Чистка динамиков, замена дисплея, замена аккумулятора от 30 минут.
                        </p>
                        <a href="/iphone" class="btn btn-outline-dark mb-5">Подробнее</a>
                    </div>
                    <div class="col-md-4 d-flex flex-column align-items-center">
                        <img src="assets/img/priceinfo2.webp" alt="categoriesimg" class="categories__img">
                        <p class="fw-bold text-center h4 mt-3">Ремонт Android</p>
                        <p class="text-center mt-3 text-secondary">Samsung, Xiaomi, Honor, Huawei, Redmi и прочие производители
                            Android.</p>
                        <a href="/android" class="btn btn-outline-dark mb-5">Подробнее</a>
                    </div>
                    <div class="col-md-4 d-flex flex-column align-items-center">
                        <img src="assets/img/priceinfo3.webp" alt="categoriesimg" class="categories__img">
                        <p class="fw-bold text-center h4 mt-3">Ремонт Ноутбуков</p>
                        <p class="text-center mt-3 text-secondary">Ремонт, чистка и восстановление операционной системы.</p>
                        <a href="/laptop" class="btn btn-outline-dark mb-5">Подробнее</a>
                    </div>
                    <div class="col-md-4 d-flex flex-column align-items-center">
                        <img src="assets/img/priceinfo4.webp" alt="categoriesimg" class="categories__img">
                        <p class="fw-bold text-center h4 mt-3">Ремонт Смарт-Часов</p>
                        <p class="text-center mt-3 text-secondary">Замена аккумулятора, дисплея, шлейфов. Только от проверенных
                            поставщиков.</p>
                        <a href="/smart-watch" class="btn btn-outline-dark mb-5">Подробнее</a>
                    </div>
                    <div class="col-md-4 d-flex flex-column align-items-center">
                        <img src="assets/img/priceinfo5.webp" alt="categoriesimg" class="categories__img">
                        <p class="fw-bold text-center h4 mt-3">Ремонт После Воды</p>
                        <p class="text-center mt-3 text-secondary">Проведем антикоррозийную обработку вашего устройства.</p>
                        <a href="/water" class="btn btn-outline-dark mb-5">Подробнее</a>
                    </div>
                    <div class="col-md-4 d-flex flex-column align-items-center">
                        <img src="assets/img/priceinfo6.webp" alt="categoriesimg" class="categories__img">
                        <p class="fw-bold text-center h4 mt-3">Восстановление системы</p>
                        <p class="text-center mt-3 text-secondary">Восстановление Android/iOS после неудачного сброса, либо сбоя
                            системы.</p>
                        <a href="/recovery" class="btn btn-outline-dark mb-5">Подробнее</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="form py-5" id="form">
            <div class="container">
                <div class="row">
                    <div class="col-md d-flex justify-content-end">
                        <div class="form__box">
                            <h4 class="fw-bold h2 my-5">Нужен ремонт электроники? <br> Оставьте заявку!</h4>
                            <form action="#" class="form__form d-flex flex-column align-items-center mt-4">
                                <input type="text" class="consultation__form-input form__form-input"
                                    placeholder="Ваше имя*" required>
                                <input type="number" class="consultation__form-input form__form-input"
                                    placeholder="Ваш контактный телефон*" required>
                                <input type="email" class="consultation__form-input form__form-input"
                                    placeholder="Ваша почта*" required>
                                <button class="btn btn-outline-dark mt-4">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contacts py-5" id="contacts">
            <h5 class="display-5 fw-bold text-center mb-5">Контакты</h5>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <ul class="contacts__ul">
                            <p class="contacts__text fw-bold h3 mb-4">Адрес</p>
                            <li class="contacts__li">Г. Барнаул</li>
                            <li class="contacts__li">Ул. Павловский тракт, 299</li>
                            <li class="contacts__li">Цокольный этаж (Вход с ул.Ускова)</li>
                        </ul>
                        <ul class="contacts__ul">
                            <p class="contacts__text fw-bold h3 my-4">Время работы</p>
                            <li class="contacts__li">Ежедневно</li>
                            <li class="contacts__li">С 9:00 до 20:00</li>
                        </ul>
                        <ul class="contacts__ul">
                            <p class="contacts__text fw-bold h3 my-4">Для связи</p>
                            <li class="contacts__li">
                                <a href="tel:+7(3852)574766" class="contacts__link">+7 (3852) 57-47-66</a>
                            </li>
                            <li class="contacts__li">
                                <a href="tel:+7(923)7800898" class="contacts__link">+7 923 780 08 98</a>
                            </li>
                            <li class="contacts__li">
                                <a href="mailto:serv2x2@yandex.ru" class="contacts__link">serv2x2@yandex.ru</a>
                            </li>
                            <br>
                            <li class="contacts__li">
                                <a href="https://t.me/dents2x2" class="contacts__link">Telegram</a>
                            </li>
                            <li class="contacts__li">
                                <a href="https://api.whatsapp.com/send?phone=79831837969&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C%2C%20%D1%8F%20%D0%BF%D0%BE%20%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%83%20%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82%D0%B0%20%D1%8D%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%B8%D0%BA%D0%B8."
                                    class="contacts__link">WhatsApp</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <a class="dg-widget-link"
                            href="http://2gis.ru/barnaul/firm/70000001023199453/center/83.65520238876344,53.345337956262895/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть
                            на карте Барнаула</a>
                        <div class="dg-widget-link">
                            <a
                                href="http://2gis.ru/barnaul/firm/70000001023199453/photos/70000001023199453/center/83.65520238876344,53.345337956262895/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии
                                компании</a>
                        </div>
                        <div class="dg-widget-link">
                            <a
                                href="http://2gis.ru/barnaul/center/83.655197,53.344636/zoom/16/routeTab/rsType/bus/to/83.655197,53.344636╎2x2, сервисный центр?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти
                                проезд до 2x2, сервисный центр</a>
                        </div>
                        <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                        <script charset="utf-8">
                        new DGWidgetLoader({
                            "width": 240,
                            "height": 200,
                            "borderColor": "#a3a3a3",
                            "pos": {
                                "lat": 53.345337956262895,
                                "lon": 83.65520238876344,
                                "zoom": 16
                            },
                            "opt": {
                                "city": "barnaul"
                            },
                            "org": [{
                                "id": "70000001023199453"
                            }]
                        });
                        </script>
                    </div>
                </div>
        </section>
    </main>

    <?php require 'modules/footer.php' ?>