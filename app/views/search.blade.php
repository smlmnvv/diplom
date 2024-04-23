<?php require_once 'modules/header.php'?>
<main class="main">
<?php require_once 'modules/pageTitle.php'?>

<section class="result">
    <div class="container">

        <?php if(empty($results)) : ?>
        <h2 class="result__title">По вашему запросу ничего не найдено.</h2>
        <?php endif ?>

        <?php foreach($results as $result) : ?>
        <div class="row mb-4">
            <div class="col-md-4">
                <img src="<?= $result['img'] ?>" alt="новость" srcset="" class="news__img">
            </div>
            <div class="col-md-8 d-flex flex-column justify-content-center">
                <h4 class="news__title fw-bold"><a href="/news/post?id=<?= $result['id'] ?>"><?= $result['title'] ?></a></h4>
                <p class="news__info"><?= $result['description'] ?></p>
                <div class="box d-flex justify-content-between">
                    <a href="/news/post?id=<?= $result['id'] ?>" class="fw-bold">Подробнее</a>
                    <span class="news__date"><?= $result['date'] ?></span>
                </div>
            </div>
        </div>
        <?php endforeach ?>
        
    </div>
</section>
</main>
<?php require_once 'modules/footer.php'?>