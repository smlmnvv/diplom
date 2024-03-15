<?php require VIEWS . '/modules/pagesHeader.php' ?>

<main class="main">

    <section class="page__content py-5">
        <div class="container">
        <h1 class="text-center fw-bold py-5 display-4 text-uppercase">Ремонт <?= $device['model'] ?></h1>
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p>Добро пожаловать в наш сервисный центр, где мы предлагаем качественный ремонт техники всех марок и моделей. Наша команда квалифицированных специалистов готова помочь вам быстро и эффективно восстановить работоспособность вашего <?= $device['model'] ?>.</p>
                    <p>Обращайтесь к нам, если вам нужна помощь в ремонте вашего устройства. Мы гарантируем качество работы и приятные цены. Закажите ремонт сегодня и снова насладитесь работоспособным устройством!</p>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <img src="<?= $device['img'] ?>" alt="<?= $device['model'] ?>" class="img img-fluid mb-4">
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md">
                    <h2 class="fw-bold text-center mb-5">Прайс-лист:</h2>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Услуга</th>
                            <th scope="col">Устройство</th>
                            <th scope="col">Цена</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($service as $services) : ?>
                            <tr>
                            <td><?= $services['name'] ?></td>
                            <td><?= $device['model'] ?></td>
                            <td>от <?= $services['price'] ?>&#8381;</td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </section>

    <?php require VIEWS . '/modules/pagesForm.php' ?>
</main>

<?php require VIEWS . '/modules/footer.php' ?>