<?php require 'modules/pagesHeader.php' ?>

    <main class="main">

        <section class="page__content py-5">
            <div class="container">
                <h1 class="fw-bold text-uppercase text-center display-4 py-5"><?= $pageTitle ?></h1>
               <?php require VIEWS . '/modules/pagesText.php' ?>
                <div class="row">
                    <p class="fw-bold h2 text-center text-uppercase py-5">Мы ремонтируем:</p>
                    <?php foreach($iphones as $iphone) : ?>
                    <div class="col-md-4">
                        <a href="/iphone/page?id=<?= $iphone['id'] ?>">
                            <div class="col d-flex justify-content-center">
                                <img src="<?= $iphone['img'] ?>" alt="iphone14" class="iphone__img">
                            </div>
                        <p class="fw-bold text-center h4 mb-3"><?= $iphone['model'] ?></p>
                        <p class="text-center mb-5 text-secondary"><?= $iphone['description'] ?></p>
                        </a>
                    </div>
                    <?php endforeach ?>
                </div>
                <div class="col d-flex justify-content-center">
                <a href="iphone#pageform" class="text-secondary text-center fw-bold">Если вы не нашли интересующую вас модель в списке, оставьте заявку ниже ↓</a>
                </div>
            </div>
        </section>

        <?php require 'modules/pagesForm.php' ?>
        
    </main>

<?php require 'modules/footer.php' ?>