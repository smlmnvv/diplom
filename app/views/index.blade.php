    <?php require 'modules/header.php' ?>

    <main class="main">
    
    <section class="number d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column align-items-center">
                    <p class="number__text text-white fw-bold">Телефон горячей линии:</p>
                    <a href="tel: 83855822909" class="number__text text-white fw-bold">8-(38558)-22909</a>
                </div>
            </div>
        </div>
    </section>

    <section class="last__news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= $newsOfDay['img'] ?>" alt="фотография" class="last__news-img">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <p class="fw-bold">Новость дня</p>
                    <p><?= $newsOfDay['title'] ?></p>
                    <p><?= $newsOfDay['description'] ?></p>
                    <div class="box d-flex justify-content-between mt-5">
                        <a href="/news/post?id=<?= $newsOfDay['id'] ?>" class="fw-bold">Подробнее</a>
                        <p><?= $newsOfDay['date'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero">
        <div class="container">
            <div class="row">
                <h1 class="hero__title">Добро пожаловать на сайт <br> УСЗН по Шелаболихинскому району</h1>
                    <div class="col-md-8 d-flex flex-column justify-content-center">
                        <p class="hero__text">Управление социальной защиты населения — это ключевой государственный орган, заботящийся о благополучии наших граждан. Наша миссия заключается в обеспечении надлежащего уровня социальной поддержки и защиты всех слоев населения.</p>
                        <p class="hero__text">Мы разрабатываем и реализуем эффективные программы и меры социальной поддержки, направленные на повышение качества жизни граждан. Это включает в себя организацию пенсионного обеспечения, предоставление пособий по безработице, детские пособия, медицинское страхование и многое другое.</p>
                        <p class="hero__text mb-5">Мы стремимся к тому, чтобы каждый гражданин чувствовал себя защищенным и поддержанным государством в любой ситуации. Наша работа направлена на создание справедливого общества, где каждый имеет равные возможности для развития и самореализации. </p>

                        <p class="hero__text">Саютина Ирина Петровна, начальник управления.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/hero__img.png" alt="саютина" srcset="" class="img img-fluid">
                    </div>
                </div>
            </div>
    </section>

    <section class="important__links">
        <div class="container">
            <h2 class="important__links-title fw-bold">Полезные ссылки</h2>
                <div class="important__links-inner">
                    <div class="row">
                    <?php foreach($links as $link) : ?>
                        <div class="col-md-3 mb-3 d-flex justify-content-center">
                            <div class="important__links-box d-flex justify-content-center align-items-center">
                                <a href="<?= $link['link'] ?>">
                                    <p class="text-white text-center fw-bold px-3"><?= $link['title'] ?></p>
                                </a>
                            </div>
                        </div>
                    <?php endforeach ?>
                    </div>
                </div>
            </div>
    </section>

    <section class="contacts">
        <div class="container">
            <h3 class="contacts__title fw-bold">Контактная информация</h3>
            <div class="row">
                <div class="col-md-6">
                    <ul class="contacts__ul">
                        <li class="contacts__li"><strong>Адрес:</strong> Шелаболихинский район, с. Шелаболиха, ул. Солнечная, д. 8.</li>
                        <li class="contacts__li mb-3"><strong>График работы:</strong> Пн-чт: с 8.00 до 17.00, Пт: с 8.00 до 16.00. Обед: с 12.00 до 12.48</li>
                        <li class="contacts__li"><strong>Консультации специалистов</strong> можно получить по следующим телефонам:</li>
                        <li class="contacts__li">ЕДВ, доноры, доплата к пенсии, пособие на погребение, компенсация на проезд реабилитированным, ЧАЭС: <a href="tel: 83855822772">(38558) 22-7-72.</a></li>
                        <li class="contacts__li">Назначение и выплаты ежемесячной денежной компенсации на жилищно-коммунальные услуги: <a href="tel: 83855823483">(38558) 23-4-83.</a></li>
                        <li class="contacts__li">Назначение и выплаты субсидии на жилищно-коммунальные услуги: <a href="tel: 83855823483">(38558) 23-4-83.</a></li>
                        <li class="contacts__li">Назначение и выплаты детских пособий, регионального материнского капитала: <a href="tel: 83855822772">(38558) 22-7-72.</a></li>
                        <li class="contacts__li">Присвоение звания «Ветеран труда Алтайского края»: <a href="tel: 83855823451">(38558) 23-4-51.</a></li>
                        <li class="contacts__li">Предоставление материальной помощи: <a href="83855823451">(38558) 23-4-51.</a></li>
                        <li class="contacts__li">Назначение опеки и попечительства: <a href="tel: 83855822875">(38558) 22-8-75.</a></li>
                        <li class="contacts__li">Предоставление социальных услуг и включения в реестр поставщиков социальных услуг: <a href="tel:83855823451">(38558) 23-4-51.</a></li>
                        <li class="contacts__li mb-3">Присвоение гражданам статуса «дети войны», работа с ветеранами: <a href="tel: 83855823451">(38558) 23-4-51.</a></li>
                        <li class="contacts__li"><strong>Электронная почта управления:</strong> <a href="mailto: utszn.shelabol@mtsz.alregn.ru">utszn.shelabol@mtsz.alregn.ru</a>, <a href="mailto: sheszn@mail.ru">sheszn@mail.ru</a>.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A98728c00981eb19ed971005baa70ddf150341218166d77d18c0d0ee935d3a104&amp;width=580&amp;height=387&amp;lang=ru_RU&amp;scroll=true;apikey=09c892f6-26bb-46a1-8b72-7a47577a9edd"></script>
                </div>
            </div>
        </div>
    </section>

    </main>

    <?php require 'modules/footer.php' ?>